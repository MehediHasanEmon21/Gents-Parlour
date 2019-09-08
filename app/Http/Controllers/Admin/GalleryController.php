<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class GalleryController extends Controller
{
    public function index(){
    	$galleries = DB::table('galleries')->latest()->get();
    	return view('admin.gallery.index',compact('galleries'));
    }

    public function create(){
    	return view('admin.gallery.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        //$slug = str_slug($request->title);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/gallery/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['image'] = $image_url;
     


        DB::table('galleries')->insert($data);
        Toastr::success('Gallery Successfully Added :)','Success');
        return redirect()->route('admin.gallery.index');
    }

}
