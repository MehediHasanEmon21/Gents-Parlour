<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AppiontConfirmNotification;
use PDF;

class AppointmentController extends Controller
{
    public function index(){
    	$appointments = DB::table('appointments')->latest()->orderBy('id', 'desc')->get();
    	return view('admin.appointment.index',compact('appointments'));
    }

    public function unactive_appointment($id){



    	
        // $appoint_customer = DB::table('appointments')
        //                     ->join('customers','customers.id','=','appointments.customer_id')
        //                     ->where('appointments.id',$id)
        //                     ->first();
                            
        // Notification::route('mail',$appoint_customer->email)
        //     ->notify(new AppiontConfirmNotification($appoint_customer));
            
        DB::table('appointments')->where('id',$id)->update(['status'=>true]);
        Toastr::success('Appointment Confirm Successfully :)','Success');
        return redirect()->back();
        


        

    }

    public function destroy($id){

    	DB::table('appointments')->where('id',$id)->delete();

        Toastr::success('Appointment Deleted Successfully :)','Success');
        return redirect()->back();

    }

    public function view_details($id){

        $appointment_detail = DB::table('appointments')
                                ->join('services','services.service_id','=','appointments.service_id')
                                ->join('barbers','barbers.id','=','appointments.barber_id')
                                ->join('customers','customers.id','=','appointments.customer_id')
                                ->select('appointments.*','services.service_name','barbers.name as barber_name','customers.name','customers.email','customers.phone')
                                ->where('appointments.id',$id)
                                ->first();

       $service_id = $appointment_detail->service_id;

        $price = DB::table('prices')
                   ->where('service_id',$service_id)
                   ->first();

        return view('admin.appointment.view_details',compact('appointment_detail','price'));
    }

    public function generate_bill($id){

        $appointment_detail = DB::table('appointments')
                                ->join('services','services.service_id','=','appointments.service_id')
                                ->join('barbers','barbers.id','=','appointments.barber_id')
                                ->join('customers','customers.id','=','appointments.customer_id')
                                ->select('appointments.*','services.service_name','barbers.name as barber_name','customers.name','customers.email','customers.phone')
                                ->where('appointments.id',$id)
                                ->first();

       $service_id = $appointment_detail->service_id;

        $price = DB::table('prices')
                   ->where('service_id',$service_id)
                   ->first();


        $pdf = PDF::loadView('admin.appointment.bill',compact('appointment_detail','price'));
        return $pdf->stream('bill.pdf');

    }

    
}
