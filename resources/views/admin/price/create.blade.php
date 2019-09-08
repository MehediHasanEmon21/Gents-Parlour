@extends('layouts.backend.app')

@section('title','Price')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Price</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Hairsal</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Price</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD PRICE</h3>
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
						<form role="form" method="POST" action="{{ route('admin.price.store') }}" enctype="multipart/form-data">
							@csrf
							
							
							<div class="form-group">
                                <label for="service_id">Service Name</label>
                             
                                    <select class="form-control" name="service_id">
                                    	@foreach($services as $service)
                                        <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                                        @endforeach
                                      
                                    </select>
                               
                            
                            </div>

							<div class="form-group">
								<label for="price">Price</label>
								<input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
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