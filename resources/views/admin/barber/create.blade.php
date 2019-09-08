@extends('layouts.backend.app')

@section('title','Barber')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Barber</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Barber</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD BARBER</h3>
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
						<form role="form" method="POST" action="{{ route('admin.barber.store') }}" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label for="name">Barber Name</label>
								<input type="text" class="form-control" id="barber_name" name="name" placeholder="Enter barber name">
							</div>

							<div class="form-group">
                                <label for="role_id">Barber Role</label>
                             
                                    <select class="form-control" name="role_id">
                                    	@foreach($roles as $role)
                                        <option value="{{ $role->role_id }}">{{ $role->role }}</option>
                                        @endforeach
                                      
                                    </select>
                               
                            
                            </div>

							<div class="form-group">
								<label for="about">About</label>
								<textarea cols="20" rows="5" class="form-control" id="about" name="about"></textarea>
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