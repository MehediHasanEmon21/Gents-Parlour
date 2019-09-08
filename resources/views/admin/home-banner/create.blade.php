@extends('layouts.backend.app')

@section('title','Home-Banner')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Home Banner</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Home Banner</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD BANNER</h3>
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
						<form role="form" method="POST" action="{{ route('admin.home-banner.store') }}" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
							</div>

							<div class="form-group">
								<label for="video_link">Video Link</label>
								<input type="text" class="form-control" id="video_link" name="video_link" placeholder="Enter video link">
							</div>

							<div class="form-group">
								<label for="button">Button Name</label>
								<input type="text" class="form-control" id="button" name="button" placeholder="Enter button">
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