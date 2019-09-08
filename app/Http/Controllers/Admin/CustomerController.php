<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CustomerController extends Controller
{
    public function index(){
    	$customers = DB::table('customers')->latest()->get();
    	return view('admin.customer.index',compact('customers'));
    }
}
