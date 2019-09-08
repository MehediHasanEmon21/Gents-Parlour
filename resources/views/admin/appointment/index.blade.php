@extends('layouts.backend.app')

@section('title','Appointment')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.appointment.index') }}">appointment</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL appointment</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Appintment's Name</th>
											<th>Appointment Date</th>
											<th>Appointment Time</th>
											<th>Phone</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($appointments as $appointment)
										<tr>
											<td>{{ $appointment->first_name }}</td>
											<td>{{ $appointment->date }}</td>
											<td>{{ $appointment->time }}</td>
											<td>{{ $appointment->phone }}</td>
											<td>
												@if($appointment->status==false)
												<span class="badge bg-danger">Pending</span>
												@else
												<span class="badge bg-success">Confirm</span>
												@endif
											</td>
											<td>
												@if($appointment->status==false)
													<a href="{{ route('admin.unactive.appointment',$appointment->id) }}" class="btn btn-sm btn-info"><i class="md-thumb-up"></i></a>
												@endif
												
												<a id="delete" href="{{ route('admin.appointment.destroy',$appointment->id) }}" class="btn btn-sm btn-danger"><i class=" md-delete"></i></a>

												<a href="{{ route('admin.appointment.view_details',$appointment->id) }}" class="btn btn-sm btn-success"><i class=" md-visibility"></i></a>


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