<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class BarberController extends Controller
{
    public function index(){
    	$barbers = DB::table('barbers')
    				->join('roles','roles.role_id','=','barbers.role_id')
    				->select('barbers.*','roles.role')
    				->get();
    	return view('admin.barber.index',compact('barbers'));
    }

    public function create(){
    	$roles = DB::table('roles')->get();
    	return view('admin.barber.create',compact('roles'));
    }

    public function store(Request $request){

    	$this->validate($request,[
            'name'=>'required',
            'role_id'=>'required',
            'about'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/barber/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['name'] = $request->name;
        $data['role_id'] = $request->role_id;
        $data['about'] = $request->about;
        $data['image'] = $image_url;
     


        DB::table('barbers')->insert($data);
        Toastr::success('Barber Successfully Added :)','Success');
        return redirect()->route('admin.barber.index');
    }

    public function edit($id){
        $barber = DB::table('barbers')
                    ->where('id',$id)
                    ->first();
        $roles = DB::table('roles')->get();

        return view('admin.barber.edit',compact('barber','roles'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'name'=>'required',
            'role_id'=>'required',
            'about'=>'required',
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

            ]);
      

        $image = $request->file('image');
        $slug = str_slug($request->name);

        $barber = DB::table('barbers')->where('id',$id)->first();
        $image_path = $barber->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/barber/';
            $image_url   = $upload_path.$imageName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image->move($upload_path,$imageName);
        }else {
            $image_url = $image_path;
        }

        $data = array();
        $data['name'] = $request->name;
        $data['role_id'] = $request->role_id;
        $data['about'] = $request->about;
        $data['image'] = $image_url;

        DB::table('barbers')->where('id',$id)->update($data);
        Toastr::success('Barber Successfully Updated :)','Success');
        return redirect()->route('admin.barber.index');

     }

     public function destroy($id){

        $barber = DB::table('barbers')
                    ->where('id',$id)
                    ->first();
        $image_path = $barber->image;
        if (file_exists($image_path)) {
           unlink($image_path);
        }
        
        DB::table('barbers')->where('id',$id)->delete();
        Toastr::success('Barber Successfully Deleted :)','Success');
        return redirect()->route('admin.barber.index');
    }

}
