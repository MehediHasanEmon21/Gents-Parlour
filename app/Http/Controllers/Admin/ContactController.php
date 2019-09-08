<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class ContactController extends Controller
{
   public function index(){

    	$contacts = DB::table('contacts')->latest()->get();
    	return view('admin.contact.index',compact('contacts'));
    }

    public function destroy($id){

    	DB::table('contacts')->where('id',$id)->delete();

        Toastr::success('Message Deleted Successfully :)','Success');
        return redirect()->back();

    }

}
