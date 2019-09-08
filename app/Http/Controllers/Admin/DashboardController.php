<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DashboardController extends Controller
{
    public function index(){
    	$special_service_count = DB::table('special__services')->get()->count();
    	$service_count = DB::table('services')->get()->count();
    	$barber_count = DB::table('barbers')->get()->count();
        $gallery_image_count = DB::table('galleries')->get()->count();
        $message_count = DB::table('contacts')->get()->count();
        $appointment_count = DB::table('appointments')->get()->count();
        $pending_appointment_count = DB::table('appointments')->where('status',false)->get()->count();
        $appointments = DB::table('appointments')->where('status',false)->latest()->get();
        $messages = DB::table('contacts')->latest()->get();
        $product_count = DB::table('products')->get()->count();
        $order_count = DB::table('orders')->get()->count();
        $pending_order_count = DB::table('orders')->where('order_status',false)->get()->count();
        $pending_orders = DB::table('orders')
                  ->join('customers','orders.customer_id','=','customers.id')
                  ->where('order_status',false)
                  ->select('orders.*','customers.name')
                  ->get();

    	return view('admin.dashboard',compact('special_service_count','service_count','barber_count','gallery_image_count','message_count','appointment_count','pending_appointment_count','appointments','messages','product_count','order_count','pending_order_count','pending_orders'));
    }
}
