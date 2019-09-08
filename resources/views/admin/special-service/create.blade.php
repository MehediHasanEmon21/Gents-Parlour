@extends('layouts.backend.app')

@section('title','Special-Service')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Special Service</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Special Service</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD SPECIAL SERVICE</h3>
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
						<form role="form" method="POST" action="{{ route('admin.special-service.store') }}" >
							@csrf

							<div class="form-group">
								<label for="icon_name">Icon Name</label>
								<input type="text" class="form-control" id="icon_name" name="icon_name" placeholder="Enter icon_name">
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
							</div>

							<div class="form-group">
								<label for="video_link">Desctription</label>
								<textarea cols="20" rows="5" type="text" class="form-control" id="description" name="description"></textarea>
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