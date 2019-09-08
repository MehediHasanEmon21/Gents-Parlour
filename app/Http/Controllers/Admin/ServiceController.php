<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class ServiceController extends Controller
{
    public function index(){
    	$services = DB::table('services')->latest()->get();
    	return view('admin.service.index',compact('services'));
    }

    public function create(){
    	return view('admin.service.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'service_name'=>'required',
            'long_description'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        $slug = str_slug($request->service_name);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/service/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['service_name'] = $request->service_name;
        $data['long_description'] = $request->long_description;
        $data['short_description'] = $request->short_description;
        $data['image'] = $image_url;
     


        DB::table('services')->insert($data);
        Toastr::success('Service Successfully Added :)','Success');
        return redirect()->route('admin.service.index');
    }

    public function edit($id){
        $service = DB::table('services')
                    ->where('service_id',$id)
                    ->first();

        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'service_name'=>'required',
            'long_description'=>'required',
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

            ]);
      

        $image = $request->file('image');
        $slug = str_slug($request->service_name);

        $service = DB::table('services')->where('service_id',$id)->first();
        $image_path = $service->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/service/';
            $image_url   = $upload_path.$imageName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image->move($upload_path,$imageName);
        }else {
            $image_url = $image_path;
        }

        $data = array();
        $data['service_name'] = $request->service_name;
        $data['long_description'] = $request->long_description;
        $data['short_description'] = $request->short_description;
        $data['image'] = $image_url;

        DB::table('services')->where('service_id',$id)->update($data);
        Toastr::success('Service Successfully Updated :)','Success');
        return redirect()->route('admin.service.index');

     }

     public function destroy($id){

        $service = DB::table('services')
                    ->where('service_id',$id)
                    ->first();
        $image_path = $service->image;
        if (file_exists($image_path)) {
           unlink($image_path);
        }
        
        DB::table('services')->where('service_id',$id)->delete();
        Toastr::success('Service Successfully Deleted :)','Success');
        return redirect()->route('admin.service.index');
    }

}
