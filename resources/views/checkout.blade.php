@extends('layouts.frontend.app')

@section('title','Checkout')




@section('shipping-info')


<section class="ftco-section contact-section">
	<h1 class="text-center" style="color: white;background: red;border-radius: 30%">Bill To</h1>
	<h1 class="text-white">
		@php
			$customer_id = Session::get('customer_id')
		@endphp

	</h1>
	<div class="container mt-5">
		<div class="row block-9">
			<div class="col-md-1"></div>
			<div class="col-md-6 ftco-animate">
				<h4></h4>
				<form action="{{ route('shipping.store') }}" method="POST" class="contact-form">
					@csrf
					<div class="form-group">
						<input type="text" name="shipping_name" class="form-control" placeholder="Shipping Name">
					</div>
					<div class="form-group">
						<input type="text" name="shipping_mobile" class="form-control" placeholder="Shipping Mobile">
					</div>
					<div class="form-group">
						<input type="text" name="shipping_address" class="form-control" placeholder="Shipping Address">
					</div>
					<div class="form-group">
						<input type="text" name="shipping_city" class="form-control" placeholder="Shipping City">
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


@endsection