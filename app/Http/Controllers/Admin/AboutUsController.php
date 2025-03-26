<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function edit()
    {
        $aboutUs = AboutUs::first();
        return view('admin.about.edit', compact('aboutUs'));
    }

    public function update(Request $request)
    {
        try {
            $aboutUs = AboutUs::first();
    
            if (!$aboutUs) {
                return redirect()->route('admin.about.edit')->with([
                    'msg' => 2,
                    'alert_data' => 'No record found!'
                ]);
            }
    
            $aboutUs->update($request->all());
    
            return redirect()->route('admin.about.edit')->with([
                'msg' => 1,
                'alert_data' => 'Content updated successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admin.about.edit')->with([
                'msg' => 2,
                'alert_data' => 'Something went wrong: ' . $e->getMessage()
            ]);
        }
    } 
}
