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




        <div>
          <a class="btn btn-sm bg-info text-white" href="{{ route('admin.january.salary') }}">January</a>
          <a class="btn btn-sm bg-success text-white" href="{{ route('admin.february.salary') }}">February</a>
          <a class="btn btn-sm bg-primary text-white" href="{{ route('admin.march.salary') }}">March</a>
          <a class="btn btn-sm bg-danger text-white" href="{{ route('admin.april.salary') }}">April</a>
          <a class="btn btn-sm bg-primary text-white" href="{{ route('admin.may.salary') }}">May</a>
          <a class="btn btn-sm bg-warning text-white" href="{{ route('admin.june.salary') }}">June</a>
          <a class="btn btn-sm bg-info text-white" href="{{ route('admin.july.salary') }}">July</a>
          <a class="btn btn-sm bg-success text-white" href="{{ route('admin.august.salary') }}">August</a>
          <a class="btn btn-sm bg-primary text-white" href="{{ route('admin.september.salary') }}">September</a>
          <a class="btn btn-sm bg-danger text-white" href="{{ route('admin.october.salary') }}">October</a>
          <a class="btn btn-sm bg-info text-white" href="{{ route('admin.november.salary') }}">November</a>
          <a class="btn btn-sm bg-success text-white" href="{{ route('admin.december.salary') }}">December</a>
      </div>
            <!-- Start Widget -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading bg-info">
                        <h3 class="panel-title"> {{ date('F') }} MONTHLY EXPENSE<a href="{{-- {{ route('yearly.expense') }} --}}"><span class="pull-right btn btn-sm btn-primary">Yearly Expense</span></a></h3>
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
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($salaries as $salary)
                                        <tr>
                                            <td>{{ $salary->name }}</td>
                                            
                                            <td>{{ $salary->date }}</td>
                                            <td>{{ $salary->pay }}</td>
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