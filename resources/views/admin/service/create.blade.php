@extends('layouts.backend.app')

@section('title','Service')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Service</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Service</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD SERVICE</h3>
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
						<form role="form" method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label for="service_name">Service Name</label>
								<input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter service name">
							</div>

							<div class="form-group">
								<label for="long_description">Long Description</label>
								<textarea cols="30" rows="10" class="form-control" id="long_description" name="long_description"></textarea>
							</div>

							<div class="form-group">
								<label for="short_description">Short Description</label>
								<textarea cols="20" rows="5" class="form-control" id="short_description" name="short_description"></textarea>
							</div>


							<div class="form-group">
								<img id="image" src="#" />
								<label for="image">Image</label>
								<input type="file" name="image" accept="image/*"  required onchange="readURL(this);">
							</div>

							<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
						</form>
					</div><!-- panel-body -->
				</div> <!-- panel -->
			</div> <!-- col-->
		</div> 



	</div> <!-- container -->

</div> <!-- content -->


<script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection