@extends('layouts.backend.app')

@section('title','Appointment')

@section('content')

<div class="content">
	<div class="container">



    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
                <!-- <div class="panel-heading">
                    <h4>Invoice</h4>
                </div> -->
                <div class="panel-body">
                	<div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-right"><img src="images/logo_dark.png" alt="velonic"></h4>
                            
                        </div>
                        <div class="pull-right">
                            <h4>Invoice # <br>
                                <strong>{{ date('d/m/y') }}</strong>
                            </h4>
                        </div>
                    </div>
                	<hr>
                	<div class="row">
                		<div class="col-md-12">

                			<div class="pull-left m-t-30">
                                <address>
                                  Name : <strong>{{ $appointment_detail->name }}</strong><br>
                                  Email : <strong>{{ $appointment_detail->email }}</strong><br>
                                  <abbr title="Phone">P:</abbr> {{ $appointment_detail->phone }}
                              </address>
                            </div>
                			<div class="pull-right m-t-30">
                				<p><strong>Today Date: </strong> {{ date('l jS \of F Y') }}</p>
                                <p class="m-t-10"><strong>Service Status: </strong> <span class="label label-pink">Confirm</span></p>
                                <p class="m-t-10"><strong>Order ID: </strong> {{ $appointment_detail->id }}</p>
                			</div>
                		</div>
                	</div>
                	<div class="m-h-50"></div>
                	<div class="row">
                		<div class="col-md-6 col-md-offset-3">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Service Information</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $appointment_detail->first_name }} {{ $appointment_detail->last_name }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Service Name</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $appointment_detail->service_name }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Stylist Name</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $appointment_detail->barber_name }}</p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Service Price</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $price->price }} Tk</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->

                            <div class="row" style="border-radius: 0px;">
                			<div class="col-md-3 col-md-offset-9">
                				<p class="text-right"><b>Sub-total:</b> {{ $price->price }}
                				<p class="text-right">VAT: 0.00</p>
                				<hr>
                				<h3 class="text-right">TOTAL {{ $price->price }}</h3>
                			</div>
                		</div>

                		<div class="hidden-print">
                			<div class="pull-right">
                				<a target="_blank" href=" {{ route('admin.generate.bill',$appointment_detail->id) }} " class="btn btn-primary waves-effect waves-light">Generate Bill</a>
                			</div>
                		</div>
                                        
                        </div>
                		<hr>
                	
                	</div>
                </div>

            </div>

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