@extends('layouts.backend.app')

@section('title','Address')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.shop-address.index') }}">banner</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL ADDRESS</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Phone</th>
											<th>Address</th>
											<th>Street</th>
											<th>House</th>
											<th>Open</th>
											<th>Time</th>
											<th>Action</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($shop__addresses as $shop__address)
										<tr>
											<td>{{ $shop__address->phone }}</td>
											<td>{{ $shop__address->address }}</td>
											<td>{{ $shop__address->street }}</td>
											<td>{{ $shop__address->house }}</td>
											<td>{{ $shop__address->open }}</td>
											<td>{{ $shop__address->time }}</td>
											
											<td>

												<a href="{{ route('admin.shop-address.edit',$shop__address->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

												<a id="delete" href="{{ route('admin.shop-address.destroy',$shop__address->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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