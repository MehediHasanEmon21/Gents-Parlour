<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SalaryController extends Controller
{   
    public function index(){

        $month = date('F');
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->orderBy('salaries.salary_id','asc')
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.index',compact('salaries','payment'));
    }

     public function create(){

     	$barbers = DB::table('barbers')->get();
    	return view('admin.salary.create',compact('barbers'));
    }

    public function store(Request $request){


      $month = date('F');
      $id = $request->barber_id;

      $sal_check = DB::table('salaries')
                    ->where('month',$month)
                    ->where('barber_id',$id)
                    ->get()
                    ->count();

    
          $this->validate($request,[
            'barber_id'=>'required',
            'pay'=>'required',
          ]);

          if ($sal_check >= 1) {
            Toastr::error('Already Paid This Month Salary ):','Error');
            return redirect()->back();
          }else{

            $data = array();
            $data['barber_id'] = $request->barber_id;
            $data['pay'] = $request->pay;
            $data['month'] = $request->month;
            $data['date'] = $request->date;
            $data['year'] = $request->year;

            DB::table('salaries')->insert($data);
            Toastr::success('Salary Successfully Added :)','Success');
            return redirect()->route('admin.salary.index');

          }

      

            

      
    	

    }

    public function edit($id){
        $month = date('F');
        $barbers = DB::table('barbers')->get();
        $salary = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name as barber_name')
                      ->where('salaries.month',$month)
                      ->where('salaries.salary_id',$id)
                      ->first();
        return view('admin.salary.edit',compact('barbers','salary'));
    }

    public function update(Request $request,$id){

       $this->validate($request,[
            'barber_id'=>'required',
            'pay'=>'required',
        ]);

        $data = array();
        $data['barber_id'] = $request->barber_id;
        $data['pay'] = $request->pay;
        $data['month'] = $request->month;
        $data['date'] = $request->date;
        $data['year'] = $request->year;


        DB::table('salaries')->where('salary_id',$id)->update($data);
        Toastr::success('Salary Successfully Updated :)','Success');
        return redirect()->route('admin.salary.index');

    }

    public function destroy($id){
   
        
        DB::table('salaries')->where('salary_id',$id)->delete();
        Toastr::success('Salary Successfully Deleted :)','Success');
        return redirect()->route('admin.salary.index');

    }

    public function monthly_salary(){

        $month = date('F');
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }


    public function january_salary(){

        $month = 'January';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function february_salary(){

        $month = 'February';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function march_salary(){

        $month = 'March';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function april_salary(){

        $month = 'April';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function may_salary(){

        $month = 'May';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function june_salary(){

        $month = 'June';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function july_salary(){

        $month = 'July';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function august_salary(){

        $month = 'August';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function september_salary(){

        $month = 'September';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function october_salary(){

        $month = 'October';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function november_salary(){

        $month = 'November';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }

    public function december_salary(){

        $month = 'December';
        $salaries = DB::table('salaries')
                      ->join('barbers','barbers.id','salaries.barber_id')
                      ->select('salaries.*','barbers.name')
                      ->where('salaries.month',$month)
                      ->get();
        $payment = DB::table('salaries')->where('month',$month)->get()->sum('pay');
        return view('admin.salary.monthly_salary',compact('salaries','payment'));
    }
}
