<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class SliderController extends Controller
{	
	public function index(){
    	$sliders = DB::table('sliders')->latest()->OrderBy('id')->get();
    	return view('admin.slider.index',compact('sliders'));
    }

    public function create(){
    	return view('admin.slider.create');
    }

    public function store(Request $request){


    	$this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/slider/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['image'] = $image_url;
        $data['btn'] = $request->btn;
     


        DB::table('sliders')->insert($data);
        Toastr::success('Slider Successfully Added :)','Success');
        return redirect()->route('admin.slider.index');
    }

    public function edit($id){
        $slider = DB::table('sliders')
                    ->where('id',$id)
                    ->first();

        return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

            ]);
      

        $image = $request->file('image');
        $slug = str_slug($request->title);

        $slider = DB::table('sliders')->where('id',$id)->first();
        $image_path = $slider->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/slider/';
            $image_url   = $upload_path.$imageName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image->move($upload_path,$imageName);
        }else {
            $image_url = $image_path;
        }

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['image'] = $image_url;
        $data['btn'] = $request->btn;

        DB::table('sliders')->where('id',$id)->update($data);
        Toastr::success('Slider Successfully Updated :)','Success');
        return redirect()->route('admin.slider.index');

     }

     public function destroy($id){

        $slider = DB::table('sliders')
                    ->where('id',$id)
                    ->first();
        $image_path = $slider->image;
        if (file_exists($image_path)) {
           unlink($image_path);
        }
        
        DB::table('sliders')->where('id',$id)->delete();
        Toastr::success('Slider Successfully Deleted :)','Success');
        return redirect()->route('admin.slider.index');
    }
}
