@extends('layouts.backend.app')

@section('title','Product')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Product</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Parlour</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Product</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD PRODUCT</h3>
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
						<form role="form" method="POST" action="{{-- {{ route('admin.slider.store') }} --}}" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label for="product_name">Name</label>
								<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
							</div>


							<div class="form-group">
								<label for="description">Description</label>
								<textarea cols="30" rows="10" class="form-control" id="description" name="description"></textarea>
							</div>

							<div class="form-group">
								<label for="price">Price</label>
								<input type="number" class="form-control" id="price" name="price" placeholder="Enter product price">
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