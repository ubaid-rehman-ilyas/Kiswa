<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Category;
use App\Models\PackageImage;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller {
    public function index() {
        $packages = Package::with('category', 'images')->orderBy('id','desc')->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }
    
    public function create() {
        $categories = Category::all();
        return view('admin.packages.add', compact('categories'));
    }
    
    public function store(Request $request) {
        try {
            $request->validate([
                'category_id' => 'required',
                'title' => 'required',
                'no_of_days' => 'required|integer',
                'price' => 'required|numeric',
                'details' => 'required',
                'makkah_hotel' => 'required',
                'madinah_hotel' => 'required',
                'makkah_nights' => 'required|integer',
                'madinah_nights' => 'required|integer',
                'images.*' => 'image|mimes:jpg,png,jpeg|max:2048'
            ]);
    
            $package = Package::create($request->only([
                'category_id', 'title', 'no_of_days', 'price', 'details',
                'makkah_hotel', 'madinah_hotel', 'makkah_nights', 'madinah_nights'
            ]));
    
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Generate unique filename for each image
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    
                    // Move image to public folder
                    $image->move(public_path('packages'), $imageName);
                    
                    // Save image name in the database
                    PackageImage::create([
                        'package_id' => $package->id,
                        'image_path' => $imageName // Only save the image name
                    ]);
                }
            }
    
            return redirect()->route('packages.index')->with([
                'msg' => 1,
                'alert_data' => 'Package created successfully!'
            ]);
    
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'msg' => 2,
                'alert_data' => $e->getMessage()
            ]);
        }
    }
    
    public function show($id) {
        $package = Package::with('category', 'images')->findOrFail($id);
        return view('admin.packages.view', compact('package'));
    }
    
    public function edit($id) {
        $package = Package::with('images')->findOrFail($id);
        $categories = Category::all();
        return view('admin.packages.edit', compact('package', 'categories'));
    }
    
    public function update(Request $request, $id) {
        // return $request;
        try {
            $package = Package::findOrFail($id);
    
            $request->validate([
                'category_id' => 'required',
                'title' => 'required',
                'no_of_days' => 'required',
                'price' => 'required',
                'details' => 'required',
                'makkah_hotel' => 'required',
                'madinah_hotel' => 'required',
                'makkah_nights' => 'required',
                'madinah_nights' => 'required',
                'images.*' => 'image|mimes:jpg,png,jpeg|max:2048'
            ]);
    
            $package->update($request->only([
                'category_id', 'title', 'no_of_days', 'price', 'details',
                'makkah_hotel', 'madinah_hotel', 'makkah_nights', 'madinah_nights'
            ]));
    
            if ($request->hasFile('images')) {
                // Delete old images from storage and database
                foreach ($package->images as $image) {
                    Storage::delete('public/packages/' . $image->image_path);
                    $image->delete();
                }
            
                foreach ($request->file('images') as $image) {
                    // Generate unique filename for each image
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    
                    // Move image to public folder
                    $image->move(public_path('packages'), $imageName);
                    
                    // Save image name in the database
                    PackageImage::create([
                        'package_id' => $package->id,
                        'image_path' => $imageName // Only save the image name
                    ]);
                }
            }
    
            return redirect()->route('packages.index')->with([
                'msg' => 1,
                'alert_data' => 'Package updated successfully!'
            ]);
    
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'msg' => 2,
                'alert_data' => $e->getMessage()
            ]);
        }
    }
    
    public function destroy($id) {
        try {
            $package = Package::findOrFail($id);
            foreach ($package->images as $image) {
                Storage::delete('public/' . $image->image_path);
                $image->delete();
            }
            $package->delete();
    
            return redirect()->route('packages.index')->with([
                'msg' => 1,
                'alert_data' => 'Package deleted successfully!'
            ]);
    
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'msg' => 2,
                'alert_data' => 'Error deleting package: ' . $e->getMessage()
            ]);
        }
    }    
}
