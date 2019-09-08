@extends('layouts.backend.app')

@section('title','Address')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Shop Address</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Shop Address</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD ADDRESS</h3>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="{{ route('admin.shop-address.store') }}">
							@csrf

							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
							</div>

							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Enter addressstreet">
							</div>

							<div class="form-group">
								<label for="street">Street</label>
								<input type="text" class="form-control" id="street" name="street" placeholder="Enter street">
							</div>

							<div class="form-group">
								<label for="house">House</label>
								<input type="text" class="form-control" id="house" name="house" placeholder="Enter house">
							</div>

							<div class="form-group">
								<label for="open">Open</label>
								<input type="text" class="form-control" id="open" name="open" placeholder="Enter open">
							</div>

							<div class="form-group">
								<label for="time">Time</label>
								<input type="text" class="form-control" id="time" name="time" placeholder="Enter time">
							</div>


							

							<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
						</form>
					</div><!-- panel-body -->
				</div> <!-- panel -->
			</div> <!-- col-->
		</div> 



	</div> <!-- container -->

</div> <!-- content -->



@endsection