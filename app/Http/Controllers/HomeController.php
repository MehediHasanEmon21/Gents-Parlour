<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{

    public function index()
    {	
    	$sliders = DB::table('sliders')->latest()->take(3)->get();
    	$home_banners = DB::table('home_banners')->latest()->take(1)->get();
    	$shop_addresses = DB::table('shop__addresses')->latest()->take(1)->get();
    	$galleries = DB::table('galleries')->latest()->take(4)->get();
    	$products = DB::table('products')->latest()->OrderBy('product_id')->take(4)->get();

        return view('welcome',compact('home_banners','shop_addresses','galleries','sliders','products'));
    }
}
