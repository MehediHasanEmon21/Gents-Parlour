@extends('layouts.frontend.app')

@section('title','Hairsal')

@section('banner')

<style type="text/css">

  @foreach($sliders as $key=>$slider)
  
  #showcase .carousel-img-{{ $key + 1 }} {
  background-image: url({{ URL::to($slider->image)}});
  background-size: cover;
  
}

  @endforeach


</style>


<section id="showcase" class="bg-dark">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        @foreach($sliders as $key=>$slider)
        <div class="carousel-item carousel-img-{{ $key + 1 }} {{ $key == 0 ? 'active' : ''}}">
          <div class="container">
            <div class="carousel-caption mb-5 pb-5 text-left">
              <h2 class="display-4" style="color: white;font-style: italic; font-weight: bold;">{{ $slider->title }}</h2>
              <p class="lead">
                {{ $slider->description }}
              </p>
              @php
                $customer_id = Session::get('customer_id');
              @endphp

              @if(isset($customer_id))
              <a href="{{ route('appointment.index') }}" class="btn btn-danger" style="padding-right: 30px; padding-left: 30px; padding-top: 20; padding-bottom: 10px; font-size: 20px; ">{{ $slider->btn }}</a>
              @else
              <a href="{{ route('login.index') }}" class="btn btn-danger" style="padding-right: 30px; padding-left: 30px; padding-top: 20; padding-bottom: 10px; font-size: 20px; ">{{ $slider->btn }}</a>
              @endif

            </div>
          </div>
        </div>
        @endforeach

      </div>

      <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      
    </div>

</section>

<br><br><br><br><br>


<section class="ftco-intro">
  <div class="container-wrap">
    <div class="wrap d-md-flex align-items-end">
      <div class="info">
        @foreach($shop_addresses as $shop_address)
        <div class="row no-gutters">

          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">
              <h3>{{ $shop_address->phone }}</h3>
              <p>{{ $shop_address->address }}</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-my_location"></span></div>
            <div class="text">
              <h3>{{ $shop_address->street }}</h3>
              <p>{{ $shop_address->house }}</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-clock-o"></span></div>
            <div class="text">
              <h3>{{ $shop_address->open }}</h3>
              <p>{{ $shop_address->time }}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="social pl-md-5 p-4">
        <ul class="social-icon">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection

@section('speech')
@include('layouts.frontend.partial.speech')
@endsection

@section('special-service')
@include('layouts.frontend.partial.service')
@endsection

@section('service')
@include('layouts.frontend.partial.service-price')
@endsection



@section('hair-stylist')
@include('layouts.frontend.partial.hair-stylist')
@endsection

@section('product')
<section class="ftco-section ftco-bg-dark">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Shop</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">We also provide you to buy the best product what you like in the cheapest price</p>
          </div>
        </div>
        <div class="row">
          @foreach($products as $product)
          <div class="col-md-3 ftco-animate">
            <div class="product-entry text-center">
              <a href="#"><img src="{{ URL::to($product->image) }}" class="img-fluid" alt="Colorlib Template"></a>
              <div class="text">
                <p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
                <h3><a href="#">{{ $product->product_name }}</a></h3>
                <span class="price mb-4">{{ $product->price }} Tk</span>
                <p><a href=" {{ route('cart.add',$product->product_id) }} " class="btn btn-primary">Add to cart</a></p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </section>

@endsection



@section('gallery')
<section class="ftco-gallery">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Gallery</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Here is our awesome gallery image</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters">
      @foreach($galleries as $gallery)
      <div class="col-md-3 ftco-animate">
        <a href="{{ route('gallery') }}" class="gallery img d-flex align-items-center" style="background-image: url({{ $gallery->image }});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection

@section('appointment')
@php
  $customer_id = Session::get('customer_id');
@endphp
@if(isset($customer_id))
@include('layouts.frontend.partial.appointment')
@endif
@endsection



