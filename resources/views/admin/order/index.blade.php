@extends('layouts.backend.app')

@section('title','Order')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{-- {{ route('admin.order.index') }} --}}">order</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL ORDER</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Customer Name</th>
											<th>Total</th>
											<th>order_status</th>
											<th>Action</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($orders as $order)
										<tr>
											<td>{{ $order->order_id }}</td>
											<td>{{ $order->name }}</td>
											<td>{{ $order->order_total }}</td>
											<td>
												@if($order->order_status==false)
												<span class="badge bg-danger">Pending</span>
												@else
												<span class="badge bg-success">Confirm</span>
												@endif
											</td>
											<td>
												@if($order->order_status==false)
													<a href="{{ route('admin.approve.order',$order->order_id) }}" class="btn btn-sm btn-info"><i class="md-thumb-up"></i></a>
												@endif
												
												<a href="{{ route('admin.order.show',$order->order_id) }}" class="btn btn-sm btn-success"><i class=" md-visibility"></i></a>

												<a id="delete" href="{{-- {{ route('admin.order.destroy',$order->id) }} --}}" class="btn btn-sm btn-danger"><i class=" md-delete"></i></a>

												


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