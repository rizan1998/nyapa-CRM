<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\{Testimonial,Price,Product};
use Illuminate\Support\Carbon;


class DashboardController extends Controller
{
    public function index(){
        $currentTime = Carbon::now();
        $testimonialsCount = Testimonial::count();
        $product = Product::count();
        return view('admin.index', compact('testimonialsCount','currentTime','product'));
    }
}
