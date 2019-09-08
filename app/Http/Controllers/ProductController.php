<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function index(){
    	$products = DB::table('products')->latest()->OrderBy('product_id')->get();
    	return view('product',compact('products'));
    }
}
