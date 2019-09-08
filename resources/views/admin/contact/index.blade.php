@extends('layouts.backend.app')

@section('title','contact')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row clearfix">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">{{ config('app.name') }} !</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="{{ route('admin.message.index') }}">message</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>

		<!-- Start Widget -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading bg-info">
						<h3 class="panel-title">ALL Message</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Subject</th>
											<th>Message</th>
											<th>Action</th>
										</tr>
									</thead>


									<tbody>
										@foreach ($contacts as $contact)
										<tr>
											<td>{{ $contact->name }}</td>
											<td>{{ $contact->email }}</td>
											<td>{{ $contact->subject }}</td>
											<td>{{ $contact->message }}</td>
											
											<td>

												<a id="delete" href="{{ route('admin.contact.destroy',$contact->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
											</td>
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