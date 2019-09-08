<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class ApointMentController extends Controller
{
    public function index(){
        
        $customer_id = Session::get('customer_id');

        if (isset($customer_id)) {
            return view('appointment');
        }else{
            return redirect()->route('home');
        }
        

    }

    public function appointment_store(Request $request){

        $this->validate($request,[
            'service_id' => 'required',
            'barber_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'phone' => 'required',
        ],[
            'service_id.required'=>'Service name must be selected',
            'barber_id.required'=>'Barber name must be selected',
        ]);

        $date = $request->date;
        $time = $request->time;

        $apointment_date_time = DB::table('appointments')->select('date','time')->where(['date'=>$date,'time'=>$time])->first();
        if (!isset($apointment_date_time)) {

            $data = array();
            $data['customer_id'] = Session::get('customer_id');
            $data['service_id'] = $request->service_id;
            $data['barber_id'] = $request->barber_id;
            $data['first_name'] = $request->first_name;
            $data['last_name'] = $request->last_name;
            $data['date'] = $request->date;
            $data['time'] = $request->time;
            $data['phone'] = $request->phone;
            $data['status'] = false;
            $data['message'] = $request->message;

            $appointment_id = DB::table('appointments')->insertGetId($data);
            Session::put('appointment_id',$appointment_id);
            Toastr::success('Appointment Successfully Done :), We will contact you as soon as possible','Success');
            return redirect()->route('home');
                
            } else {
                Toastr::error('This slot is already taken ): , Please choose another slot for booking appointment','Error');
                return redirect()->back();
            }


    	
    }
}
