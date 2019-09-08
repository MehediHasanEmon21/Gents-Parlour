@extends('layouts.frontend.app')

@section('title','Products')



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


