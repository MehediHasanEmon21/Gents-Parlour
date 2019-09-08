<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class HomeBannerController extends Controller
{
    public function index(){
    	$home_banners = DB::table('home_banners')->latest()->get();
    	return view('admin.home-banner.index',compact('home_banners'));
    }

    public function create(){
    	return view('admin.home-banner.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'title'=>'required',
            'video_link'=>'required',
            'button'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/home-banner/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['title'] = $request->title;
        $data['video_link'] = $request->video_link;
        $data['button'] = $request->button;
        $data['image'] = $image_url;
     


        DB::table('home_banners')->insert($data);
        Toastr::success('Home Banner Successfully Added :)','Success');
        return redirect()->route('admin.home-banner.index');
    }


    public function edit($id){
        $home_banner = DB::table('home_banners')
                    ->where('home_banner_id',$id)
                    ->first();

        return view('admin.home-banner.edit',compact('home_banner'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'title'=>'required',
            'video_link'=>'required',
            'button'=>'required',
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

            ]);
      

        $image = $request->file('image');
        $slug = str_slug($request->title);

        $home_banner = DB::table('home_banners')->where('home_banner_id',$id)->first();
        $image_path = $home_banner->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/home-banner/';
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
        $data['video_link'] = $request->video_link;
        $data['button'] = $request->button;
        $data['image'] = $image_url;

        DB::table('home_banners')->where('home_banner_id',$id)->update($data);
        Toastr::success('Home Banner Successfully Updated :)','Success');
        return redirect()->route('admin.home-banner.index');

     }

      public function destroy($id){

        $home_banner = DB::table('home_banners')
                    ->where('home_banner_id',$id)
                    ->first();
        $image_path = $home_banner->image;
        if ($image_path) {
           unlink($image_path);
        }
        
        DB::table('home_banners')->where('home_banner_id',$id)->delete();
        Toastr::success('Home Banner Successfully Deleted :)','Success');
        return redirect()->route('admin.home-banner.index');
    }
}
