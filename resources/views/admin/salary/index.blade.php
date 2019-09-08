@extends('layouts.backend.app')

@section('title','Salary')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Salary</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Parlour</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Salary</li>
				</ol>
			</div>
		</div>

            <!-- Start Widget -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading bg-info">
                        <h3 class="panel-title"> {{ date('F') }} MONTH SALARY<a href="{{ route('admin.monthly.salary') }}"><span class="pull-right btn btn-sm btn-primary">Monthly Salary</span></a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Pay</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($salaries as $salary)
                                        <tr>
                                            <td>{{ $salary->name }}</td>
                                            
                                            <td>{{ $salary->date }}</td>
                                            <td>{{ $salary->pay }}</td>
                                            <td>

                                            <a href="{{ route('admin.salary.edit',$salary->salary_id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

                                            <a id="delete" href="{{ route('admin.salary.delete',$salary->salary_id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                           </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <h4 style="color: red">Total Expense : {{ $payment }}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 



	</div> <!-- container -->

</div> <!-- content -->


@endsection