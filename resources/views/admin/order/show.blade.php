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
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">CUSTOMER DETAILS</h3>
					</div>
					@foreach($orders_information as $order_info)
                    @endforeach
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Customer Name</th>
											<th>Mobile</th>
										</tr>
									</thead>


									<tbody>
									
										<tr>
											<td>{{ $order_info->name }}</td>
											<td>{{ $order_info->phone }}</td>
											
										</tr>

									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">SHIPPING DETAILS</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Username</th>
											<th>Address</th>
											<th>Mobile</th>
										</tr>
									</thead>


									<tbody>
										
										<tr>
											<td>{{ $order_info->shipping_name }}</td>
											<td>{{ $order_info->shipping_address }}</td>
											<td>{{ $order_info->shipping_mobile }}</td>
										</tr>
	
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ORDER DETAILS</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Producr Name</th>
											<th>Product Price</th>
											<th>Product Sales Quantity</th>
											<th>Total Tk</th>
										</tr>
									</thead>


									<tbody>
										@foreach($orders_information as $product_info)
										<tr>
											<td>{{ $product_info->order_details_id }}</td>
											<td>{{ $product_info->product_name }}</td>
											<td>{{ $product_info->product_price }}</td>
											<td>{{ $product_info->product_sales_quantity }}</td>
											@php
				                               $total =  $product_info->product_price*$product_info->product_sales_quantity;
				                            @endphp
											
												<td class="center">{{ $total }}</td>
		

												
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