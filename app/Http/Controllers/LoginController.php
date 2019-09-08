<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Session;
use Cart;
class LoginController extends Controller
{
    public function index(){
        
        return view('login');
    }

    public function customer_register(Request $request){
    	

    	$this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
			]);

       

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
     


        $customer_id = DB::table('customers')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        $cart_count = Cart::count();
        $ses_customer_id = Session::get('customer_id');

        if ($cart_count > 0) {
            Toastr::success('Registration Successfully Done :)','Success');
            return redirect()->route('checkout.index');
        } else {
            Toastr::success('Registration Successfully Done :)','Success');
            return redirect()->route('appointment.index');
        }
        
    }

    public function customer_login(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
            ]);

    	$email = $request->email;
    	$password = md5($request->password);

    	$result = DB::table('customers')
    				->where('email',$email)
    				->where('password',$password)
    				->first();
        Session::put('customer_id',$result->id);
        $cart_count = Cart::count();
    	if ($cart_count > 0) {
            Toastr::success('Login Successfully Done :)','Success');
            return redirect()->route('checkout.index');
        } else {
            Toastr::success('Login Successfully Done :)','Success');
            return redirect()->route('appointment.index');
        }

    }

    public function customer_logout(){
    	Session::flush();
    	return redirect()->route('home');
    }
 
}
