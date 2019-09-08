@extends('layouts.backend.app')

@section('title','Slider')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Slider</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Slider</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">EDIT SLIDER</h3>
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
						<form role="form" method="POST" action="{{ route('admin.slider.update',$slider->id) }}" enctype="multipart/form-data">
							@csrf
							
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Enter slider title" value="{{ $slider->title }}">
							</div>

							<div class="form-group">
								<label for="description">Description</label>
								<textarea cols="30" rows="10" class="form-control" id="description" name="description">{{ $slider->description }}</textarea>
							</div>

							<div class="form-group">
								<label for="btn">Button</label>
								<input type="text" class="form-control" id="btn" name="btn" placeholder="Enter slider btn" value="{{ $slider->btn }}">
							</div>



							<div class="form-group">
								<img id="image" src="#" />
								<label for="image">Image</label>
								<input type="file" name="image" accept="image/*" onchange="readURL(this);">
								<div class="form-group">
				                  <img src="{{ URL::to($slider->image) }}" width="80" height="80">
				                </div>
							</div>

							<button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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