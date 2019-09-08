@extends('layouts.backend.app')

@section('title','Gallery')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.gallery.index') }}">gallery</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

<div class="row port">
<div class="portfolioContainer">
	@foreach($galleries as $gallery)
	<div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
		<div class="gal-detail thumb">
			<a href="images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
				<img height="200" width="200" src="{{ URL::to($gallery->image) }}" class="thumb-img" alt="work-thumbnail">
			</a>
			<h4>Gallary Image</h4>
		</div>
	</div>
	@endforeach



</div>
</div> <!-- End row -->


           

            </div> <!-- container -->

        </div> <!-- content -->

    </div>





@endsection