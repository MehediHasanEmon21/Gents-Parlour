<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderConfirmNotification;

class OrderController extends Controller
{
    public function index(){

    	$orders = DB::table('orders')
    			  ->join('customers','orders.customer_id','=','customers.id')
    			  ->select('orders.*','customers.name')
    			  ->get();
    	return view('admin.order.index',compact('orders'));
    }

    public function show($id){

    	$orders_information = DB::table('orders')
    						  ->join('customers','orders.customer_id','=','customers.id')
    						  ->join('shippings','orders.shipping_id','=','shippings.shipping_id')
    						  ->join('order_details','orders.order_id','=','order_details.order_id')
    						  ->select('customers.*','shippings.*','order_details.*')
    						  ->where('orders.order_id',$id)
    						  ->get();


    	return view('admin.order.show',compact('orders_information'));
    }

    public function approve_order($id){

        // $customer_email = DB::table('customers')
        //                     ->join('orders','orders.customer_id','=','customers.id')
        //                     ->where('orders.order_id',$id)
        //                     ->first();
        // Notification::route('mail',$customer_email->email)
        //     ->notify(new OrderConfirmNotification($customer_email));
            

        $approve = DB::table('orders')->where('order_id',$id)->update(['order_status'=>true]);
        if ($approve) {
            Toastr::success('Order Successfully Delivered :)','Success');
            return redirect()->back();
        }
    }
}
