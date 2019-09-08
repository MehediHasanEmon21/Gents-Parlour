<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class ContactController extends Controller
{
    public function index(){
    	return view('contact');
    }

    public function contact_store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
            ]);

    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['subject'] = $request->subject;
    	$data['message'] = $request->message;

    	DB::table('contacts')->insert($data);
        Toastr::success('Message Sent Successfully ):','Success');
        return redirect()->back();
    }
}
