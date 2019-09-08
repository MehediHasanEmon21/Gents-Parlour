<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
{
    public function index(){

    	$galleries = DB::table('galleries')->latest()->get();
        return view('gallery',compact('galleries'));

    }
}
