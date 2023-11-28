<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Price,Testimonial,
    Banner,Social,Product,Service,ServiceCard,Hero,Started};

class HomepageController extends Controller
{
    public function index () {
        $banner = Banner::all();
        $testimonials = Testimonial::all();
        $prices = Price::all();
        $social = Social::with('icon')->get();
        $product = Product::all();
        $service = Service::all();
        $service_card = ServiceCard::with('icon')->get();
        $firstSetOfData = $service_card->take(2);
        $secondSetOfData = $service_card->splice(2);
        $hero = Hero::all();
        $started = Started::all();
        return view('landingpage', compact(
            'prices',
            'testimonials',
            'banner',
            'social',
            'product',
            'service',
            'firstSetOfData',
            'secondSetOfData',
            'hero',
            'started'
        ));
    }
}