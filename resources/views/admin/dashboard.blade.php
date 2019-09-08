@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')



 <!-- Start content -->
 <div class="content">
 	<div class="container">

 		<!-- Page-Title -->
 		<div class="row">
 			<div class="col-sm-12">
 				<h4 class="pull-left page-title">Welcome ! Hairsal</h4>
 				<ol class="breadcrumb pull-right">
 					<li><a href="#">Gents Parlour</a></li>
 					<li class="active">Dashboard</li>
 				</ol>
 			</div>
 		</div>

 		<!-- Start Widget -->
 		<div class="row">
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-info"><i class=" md-account-balance"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $special_service_count }}</span>
 						Special Services
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Special Services</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-purple"><i class=" md-shop-two"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $service_count }}</span>
 					 Services
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Services</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-success"><i class=" md-perm-contact-cal"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $barber_count }}</span>
 					 Our Barbers
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Barbers</h5>
 						</div>
 					</div>
 				</div>
 			</div>

 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-primary"><i class=" md-photo"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $gallery_image_count }}</span>
 					 Gallery Image
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Gallery Image</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-success"><i class="md-sms"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $message_count }}</span>
 					 Message
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Message</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-warning"><i class="md-loyalty"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $appointment_count }}</span>
 					 Appointment
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Appointment</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-info"><i class="ion-load-d "></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $pending_appointment_count }}</span>
 					 Pending 
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Pending Appointment</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-info"><i class=" md-account-balance"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $product_count }}</span>
 						Product
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Product</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-purple"><i class=" md-shop-two"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $order_count }}</span>
 					 Orders
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Orders</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 				<div class="col-md-6 col-sm-6 col-lg-3">
 				<div class="mini-stat clearfix bx-shadow">
 					<span class="mini-stat-icon bg-success"><i class=" md-perm-contact-cal"></i></span>
 					<div class="mini-stat-info text-right text-muted">
 						<span class="counter">{{ $pending_order_count }}</span>
 					 Pending Orders
 					</div>
 					<div class="tiles-progress">
 						<div class="m-t-20">
 							<h5 class="text-uppercase">Pending Orders</h5>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div> 
 		<!-- End row-->


 		<div class="row">
 			<div class="col-lg-12">
 				<div class="portlet"><!-- /portlet heading -->
 					<div class="portlet-heading">
 						<h3 class="portlet-title text-dark text-uppercase">
 							ALL PENDING APPOINTMENT
 						</h3>
 						<div class="portlet-widgets">
 							<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
 							<span class="divider"></span>
 							<a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
 							<span class="divider"></span>
 							<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
 						</div>
 						<div class="clearfix"></div>
 					</div>
 					<div id="portlet1" class="panel-collapse collapse in">
 						<div class="portlet-body">
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

												<a id="delete" href="{{ route('admin.appointment.destroy',$appointment->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>

							</div>
 							</div>
 						</div>
 					</div>
 				</div> <!-- /Portlet -->
 			</div> <!-- end col -->
 		</div> <!-- End row -->

 		<div class="row">
 			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL PENDING ORDER</h3>
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
										@foreach ($pending_orders as $order)
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
 		</div> <!-- End row -->


 		<div class="row">
 			<!-- INBOX -->
 			<div class="col-lg-4">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<h4 class="panel-title">Customer Message</h4>
 					</div>
 					<div class="panel-body">
 						<div class="inbox-widget nicescroll mx-box">
 							@foreach($messages as $message )
 							<a href="#">
 								<div class="inbox-item">
 									<div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
 									<p class="inbox-item-author">{{ $message->name }}</p>
 									<p class="inbox-item-text">{{ $message->message }}</p>
 									<p class="inbox-item-date">{{ $message->created_at }}</p>
 								</div>
 							</a>
 							@endforeach
 							
 						
 						</div>
 					</div>
 				</div>
 			</div> <!-- end col -->

 	


 		
 		</div> <!-- end row -->

 	</div> <!-- container -->
 	
 </div> <!-- content -->



@endsection