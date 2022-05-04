<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        $banners = Banner::all();
        $products = Product::all();
        $services = Service::all();
        
        return view('site.home', compact('sliders', 'banners', 'products', 'services'));

    }// end of index

}//end of controller
