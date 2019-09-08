<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class PriceController extends Controller
{
    public function index(){
    	$prices = DB::table('prices')
    				->join('services','prices.service_id','=','services.service_id')
    				->select('prices.*','services.service_name','services.short_description')
    				->get();
    	return view('admin.price.index',compact('prices'));
    }

    public function create(){
    	$services = DB::table('services')->get();
    	return view('admin.price.create',compact('services'));
    }

    public function store(Request $request){

    	$this->validate($request,[
            'service_id'=>'required',
            'price'=>'required',
			]);

       

        $data = array();
        $data['service_id'] = $request->service_id;
        $data['price'] = $request->price;
     


        DB::table('prices')->insert($data);
        Toastr::success('Price Successfully Added :)','Success');
        return redirect()->route('admin.price.index');
    }

}
