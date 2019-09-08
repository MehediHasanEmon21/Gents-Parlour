<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class ProductController extends Controller
{	

	public function index(){
    	$products = DB::table('products')->latest()->OrderBy('product_id')->get();
    	return view('admin.product.index',compact('products'));
    }

    public function create(){
    	return view('admin.product.create');
    }

    
    public function store(Request $request){


    	$this->validate($request,[
            'product_name'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,bmp',

			]);

        $image = $request->file('image');
        $slug = str_slug($request->product_name);

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            
            $upload_path ='public/product/';
            $image_url   = $upload_path.$imageName;
            $image->move($upload_path,$imageName);
        }else {
            $image_url = 'default.png';
        }

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['image'] = $image_url;
     


        DB::table('products')->insert($data);
        Toastr::success('Product Successfully Added :)','Success');
        return redirect()->route('admin.product.index');
    }

    public function edit($id){
        $product = DB::table('products')
                    ->where('product_id',$id)
                    ->first();

        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request,$id){


      
            $this->validate($request,[
            'product_name'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:jpeg,jpg,png,bmp',

			]);
      

        $image = $request->file('image');
        $slug = str_slug($request->product_name);

        $product = DB::table('products')->where('product_id',$id)->first();
        $image_path = $product->image;

        if (isset($image)) {
            
            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug."-".$currentDate."-".uniqid().".".$image->getClientOriginalExtension();
            $upload_path ='public/product/';
            $image_url   = $upload_path.$imageName;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image->move($upload_path,$imageName);
        }else {
            $image_url = $image_path;
        }

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['image'] = $image_url;

        DB::table('products')->where('product_id',$id)->update($data);
        Toastr::success('Product Successfully Updated :)','Success');
        return redirect()->route('admin.product.index');

     }

     public function destroy($id){

        $product = DB::table('products')
                    ->where('product_id',$id)
                    ->first();
        $image_path = $product->image;
        if (file_exists($image_path)) {
           unlink($image_path);
        }
        
        DB::table('products')->where('product_id',$id)->delete();
        Toastr::success('Product Successfully Deleted :)','Success');
        return redirect()->route('admin.product.index');
    }

}
