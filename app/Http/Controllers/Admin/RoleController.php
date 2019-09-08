<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
class RoleController extends Controller
{
    public function index(){
    	$roles = DB::table('roles')->get();
    	return view('admin.role.index',compact('roles'));
    }

    public function create(){
    	return view('admin.role.create');
    }

    public function store(Request $request){

    	$this->validate($request,[
            'role'=>'required',
			]);

       

        $data = array();
        $data['role'] = $request->role;
     


        DB::table('roles')->insert($data);
        Toastr::success('Role Successfully Added :)','Success');
        return redirect()->route('admin.role.index');
    }
}
