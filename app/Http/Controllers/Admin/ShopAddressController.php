<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class ShopAddressController extends Controller
{
    public function index(){
    	$shop__addresses = DB::table('shop__addresses')->latest()->get();
    	return view('admin.shop-address.index',compact('shop__addresses'));
    }

    public function create(){
    	return view('admin.shop-address.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'phone'=>'required',
            'street'=>'required',
            'open'=>'required',
            'time'=>'required',

			]);

        $data = array();
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['street'] = $request->street;
        $data['house'] = $request->house;
        $data['open'] = $request->open;
        $data['time'] = $request->time;
      
     


        DB::table('shop__addresses')->insert($data);
        Toastr::success('Shop Address Successfully Added :)','Success');
        return redirect()->route('admin.shop-address.index');
    }

    public function edit($id){
        $shop_address = DB::table('shop__addresses')
                    ->where('id',$id)
                    ->first();
        //print_r($shop_address);

        return view('admin.shop-address.edit',compact('shop_address'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'phone'=>'required',
            'street'=>'required',
            'open'=>'required',
            'time'=>'required',

            ]);
      

        

        $data = array();
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['street'] = $request->street;
        $data['house'] = $request->house;
        $data['open'] = $request->open;
        $data['time'] = $request->time;
      
        DB::table('shop__addresses')->where('id',$id)->update($data);
        Toastr::success('Shop Address Successfully Updated :)','Success');
        return redirect()->route('admin.shop-address.index');

     }
}
