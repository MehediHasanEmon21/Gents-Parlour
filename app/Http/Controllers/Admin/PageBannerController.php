<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class PageBannerController extends Controller
{
    public function index(){
    	$page_banners = DB::table('page_banners')->latest()->get();
    	return view('admin.page-banner.index',compact('page_banners'));
    }

    public function create(){
    	return view('admin.page-banner.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
    

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   =$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/page-banner/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['image'] = $image_url;
     


        DB::table('page_banners')->insert($data);
        Toastr::success('Page Banner Successfully Added :)','Success');
        return redirect()->route('admin.page-banner.index');
    }

    public function edit($id){
        $page_banner = DB::table('page_banners')
                    ->where('id',$id)
                    ->first();

        return view('admin.page-banner.edit',compact('page_banner'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

			]);
      

        $image = $request->file('image');
    

        $page_banner = DB::table('page_banners')->where('id',$id)->first();
        $image_path = $page_banner->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   =$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/page-banner/';
            $image_url   = $upload_path.$imageName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image->move($upload_path,$imageName);
        }else {
            $image_url = $image_path;
        }

        $data = array();
        $data['image'] = $image_url;

        DB::table('page_banners')->where('id',$id)->update($data);
        Toastr::success('Page Banner Successfully Updated :)','Success');
        return redirect()->route('admin.page-banner.index');

     }

      public function destroy($id){

        $page_banner = DB::table('page_banners')
                    ->where('id',$id)
                    ->first();
        $image_path = $home_banner->image;
        if (file_exists($image_path)) {
                unlink($image_path);
            }
        
        DB::table('page_banners')->where('id',$id)->delete();
        Toastr::success('Page Banner Successfully Deleted :)','Success');
        return redirect()->route('admin.page-banner.index');
    }
}
