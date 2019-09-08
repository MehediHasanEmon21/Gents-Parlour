<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Session;
use Cart;
use DB;

class ShippingController extends Controller
{
    public function shipping_store(Request $request){

    	$this->validate($request,[
    		'shipping_name'=>'required',
    		'shipping_address'=>'required',
    		'shipping_mobile'=>'required',
    		'shipping_city'=>'required',
    	]);

    	$data = array();

    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_address'] = $request->shipping_address;
    	$data['shipping_mobile'] = $request->shipping_mobile;
    	$data['shipping_city'] = $request->shipping_city;

    	$shipping_id = DB::table('shippings')->insertGetId($data);
    	Session::put('shipping_id',$shipping_id);
    	Toastr::success('Shipping Info Created :)','Success');
    	return redirect()->route('payment.index');
    }

    public function handcash(){
        return view('handcash');
    }

     public function payment_index(){

    	$cart_products = Cart::content();
    	return view('payment',compact('cart_products'));
    }

    public function order_place(Request $request){

    	$customer_id = Session::get('customer_id');
    	$shipping_id = Session::get('shipping_id');

    	$pdata = array();

    	$pdata['payment_method'] = $request->payment_gateway;
    	$pdata['payment_status'] = false;
    	$payment_id = DB::table('payments')->insertGetId($pdata);

    	$odata = array();

    	$odata['customer_id'] = $customer_id; 
    	$odata['shipping_id'] = $shipping_id; 
    	$odata['payment_id'] = $payment_id; 
    	$odata['order_total'] = Cart::total(); 
    	$odata['order_status'] = false;
    	$order_id = DB::table('orders')->insertGetId($odata);

    	$oddata =  array();

    	$cart_products = Cart::content();

    	foreach($cart_products as $products){

    		$oddata['order_id'] = $order_id;
    		$oddata['product_id'] = $products->id;
    		$oddata['product_name'] = $products->name;
    		$oddata['product_price'] = $products->price;
    		$oddata['product_sales_quantity'] = $products->qty;

    		$result = DB::table('order_details')->insertGetId($oddata);
    	}

    	if ($result) {
    		if ($request->payment_gateway == "handcash") {
    			Cart::destroy();
    			return redirect()->route('handcash.index');
    		}
    	}

    }

}
