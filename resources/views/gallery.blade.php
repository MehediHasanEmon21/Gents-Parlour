@extends('layouts.frontend.app')

@section('title','Gallery')

@section('page-banner')
@include('layouts.frontend.partial.page-banner')
@endsection

@section('gallery')
<section class="ftco-gallery">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Gallery</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters">
      @foreach($galleries as $gallery)
      <div class="col-md-3 ftco-animate">
       <a href="{{ asset('public/assets/frontend/images/gallery-1.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ $gallery->image }});">
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



