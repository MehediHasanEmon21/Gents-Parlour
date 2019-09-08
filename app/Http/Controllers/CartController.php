<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Brian2694\Toastr\Facades\Toastr;

class CartController extends Controller
{
    public function add_cart($id){
    	
    	$product = DB::table('products')
    			  ->where('product_id',$id)
    			  ->first();
    	$data = array();

    	$data['id'] = $product->product_id;
    	$data['name'] = $product->product_name;
    	$data['price'] = $product->price;
    	$data['qty'] = 1;
    	$data['options'] ['image'] = $product->image;
    	Cart::add($data);

    	return redirect()->route('cart.show');

    }

    public function show_cart(){

    	$cart_products = Cart::content();
    	
    	return view('show_cart',compact('cart_products'));

    }

    public function update_cart(Request $request,$rowId){

    	$qty = $request->quantity;
    	$update = Cart::update($rowId,$qty);
    	if ($update) {
	        Toastr::success('Cart Product Updated Successfully :)','Success');
	        return redirect()->back();
    	}
    }

    public function delete_cart($rowId){
        Cart::remove($rowId);
        Toastr::success('Cart Product Deleted Successfully :)','Success');
        return redirect()->back();
    }
  
}
