@extends('layouts.backend.app')

@section('title','Salary')

@section('content')

<div class="content">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="pull-left page-title">Salary</h4>
				<ol class="breadcrumb pull-right">
					<li><a href="#">Parlour</a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Salary</li>
				</ol>
			</div>
		</div>




		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">ADD SALARY</h3>
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
					      <form role="form" method="POST" action="{{-- {{ route('today-expense.store') }} --}}">
                                @csrf
	                          <div class="form-group">
                                <label for="barber_id">Barber Name</label>
                             
                                    <select class="form-control" name="barber_id">
                                    	@foreach($barbers as $barber)
                                        <option value="{{ $barber->id }}">{{ $barber->name }}</option>
                                        @endforeach
                                      
                                    </select>
                               
                            
                               </div>

                                

                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="month" name="month" value="{{ date('F') }}">
                                </div>


                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="date" name="date" value="{{ date('d/m/y') }}">
                                </div>

                                 <div class="form-group">
                                    <input type="hidden" class="form-control" id="year" name="year" value="{{ date('Y') }}">
                                </div>

                                 <div class="form-group">
                                    <label for="pay">Payment</label>
                                    <input type="text" class="form-control" id="pay" name="pay" placeholder="Enter payment">
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