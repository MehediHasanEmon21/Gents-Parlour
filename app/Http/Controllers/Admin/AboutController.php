<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index(){
    	$abouts = DB::table('abouts')->latest()->get();
    	return view('admin.about.index',compact('abouts'));
    }

    public function create(){
    	return view('admin.about.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'title'=>'required',
            'description'=>'required',

			]);

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
      
     


        DB::table('abouts')->insert($data);
        Toastr::success('Shop About Successfully Added :)','Success');
        return redirect()->route('admin.about.index');
    }

}
