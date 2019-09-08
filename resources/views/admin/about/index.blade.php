@extends('layouts.backend.app')

@section('title','About')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.about.index') }}">Shop About</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL ABOUT</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Title</th>
											<th>Description</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($abouts as $about)
										<tr>
											<td>{{ $about->title }}</td>
											<td>{{ $about->description }}</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
            <!-- End row--


           

            </div> <!-- container -->

        </div> <!-- content -->

    </div>





@endsection