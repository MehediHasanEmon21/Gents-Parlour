@extends('layouts.backend.app')

@section('title','barber')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.barber.index') }}">barber</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL BARBER</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Barber Name</th>
											<th>Barber Role</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($barbers as $barber)
										<tr>
											<td>{{ $barber->name }}</td>
											<td>{{ $barber->role }}</td>
											<td><img src="{{ URL::to($barber->image) }} " width="80" height="80" class="img-fluid"></td>
											<td>

												<a href="{{ route('admin.barber.edit',$barber->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

												<a id="delete" href="{{ route('admin.barber.destroy',$barber->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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