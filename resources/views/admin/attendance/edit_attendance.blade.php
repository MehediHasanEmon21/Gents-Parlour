@extends('layouts.backend.app')

@section('title','Attendance')

@section('content')

<div class="content">
    <div class="container">

        <!-- Page-Title -->
         <div class="row clearfix">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ route('admin.take.attendance') }}">attendance</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
        </div>


            <!-- Start Widget -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading bg-info">
                        <h3 class="panel-title">EDIT ATTENDANCE</h3>
                    </div>

                    <h4 style="text-align: center;color: red;">Update Attendance {{ $date->att_date }}</h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <form action="{{ route('admin.attendance.update') }}" method="POST">
                                @csrf
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody>
                                        
                                        @foreach ($barbers_att as $barber)
                                        <tr>
                                            <td>{{ $barber->barber_name }}</td>
                                            <td><img src="{{ URL::to($barber->image) }} " width="80" height="80" class="img-fluid"></td>
                                            
                                            <td>
                                                <input type="hidden" name="id[]" value="{{ $barber->id }}">

                                                <input type="radio" name="attendance[{{ $barber->id }}]" required="" value="Present" {{ $barber->attendance == 'Present' ? 'checked' : '' }}>Present
                                                <input type="radio" name="attendance[{{ $barber->id }}]" required="" value="Absent" {{ $barber->attendance == 'Absent' ? 'checked' : '' }}>Absent

                                                <input type="hidden" name="att_date" value="{{ date('d/m/y') }}">
                                                <input type="hidden" name="att_month" value="{{ date('F') }}">
                                                <input type="hidden" name="att_year" value="{{ date('Y') }}">
                                                <input type="hidden" name="edit_date" value="{{ date('d-m-y') }}">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-sm btn-success">Update Attendance</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
            <!-- End row--


           

            </div> <!-- container -->

        </div> <!-- content -->

    </div>





@endsection



























































