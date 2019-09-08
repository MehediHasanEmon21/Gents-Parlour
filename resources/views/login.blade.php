@extends('layouts.frontend.app')

@section('title','Login')

{{-- @section('page-banner')
@include('layouts.frontend.partial.page-banner')
@endsection --}}



@section('login-form')


<section class="ftco-section contact-section">
	<h1 class="text-center" style="color: white;background: red;border-radius: 30%">Login Or Sign Up Here</h1>
	<div class="container mt-5">
		<div class="row block-9">

			<div class="col-md-4 contact-info ftco-animate">
				<h4>Login</h4>
				<form action="{{ route('customer.login') }}" method="POST" class="contact-form">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-primary py-3 px-5">
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6 ftco-animate">
				<h4>Sign Up Here</h4>
				<form action="{{ route('customer.register') }}" method="POST" class="contact-form">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group">
						<input type="text" name="address" class="form-control" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="submit" value="Sign Up" class="btn btn-primary py-3 px-5">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


@endsection




