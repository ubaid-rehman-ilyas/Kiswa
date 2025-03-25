<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $threeStarPackages = Package::with('category', 'images')
            ->whereHas('category', function($query) {
                $query->where('name', '3 Star Umrah Package');
            })
            ->get();
    
        $fourStarPackages = Package::with('category', 'images')
            ->whereHas('category', function($query) {
                $query->where('name', '4 Star Umrah Package');
            })
            ->get();
    
        $fiveStarPackages = Package::with('category', 'images')
            ->whereHas('category', function($query) {
                $query->where('name', '5 Star Umrah Package');
            })
            ->get();
        return view('front.packages',compact('threeStarPackages', 'fourStarPackages', 'fiveStarPackages'));
    }
    public function detail($id){
        $package = Package::with('category', 'images')->find($id);
        return view('front.product-detail', compact('package'));
    }
}
