<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class SpecialServiceConroller extends Controller
{
    public function index(){
    	$special_services = DB::table('special__services')->latest()->get();
    	return view('admin.special-service.index',compact('special_services'));
    }

    public function create(){
    	return view('admin.special-service.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'icon_name'=>'required',
            'name'=>'required',
            'description'=>'required',

			]);

        $data = array();
        $data['icon_name'] = $request->icon_name;
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('special__services')->insert($data);
        Toastr::success('Special Service Successfully Added :)','Success');
        return redirect()->route('admin.special-service.index');
    }
}
