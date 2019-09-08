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
                        <h3 class="panel-title">ALL ATTENDANCE<a href="{{ route('admin.take.attendance') }}"><span class="pull-right btn btn-sm btn-success">Take Attendance</span></a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($attendances as $key=>$attendance)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $attendance->edit_date }}</td>
                                            <td class="text-center">

                                                <a href="{{ route('admin.attendance.edit',$attendance->edit_date) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

                                                <a id="delete" href="{{-- {{ route('attendance.destroy',$attendance->id) }} --}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>

                                                <a href="{{ route('admin.attendance.show',$attendance->edit_date) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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



































