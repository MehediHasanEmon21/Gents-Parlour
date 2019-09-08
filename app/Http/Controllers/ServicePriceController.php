<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePriceController extends Controller
{
    public function index(){
    	return view('service_price');
    }
}
