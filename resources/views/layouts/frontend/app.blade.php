<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/css/mystyle.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

    @include('layouts.frontend.partial.navbar')

    <!-- END nav -->
    
    @yield('banner')

    @yield('page-banner')

    @yield('speech')
    
    @yield('special-service') 

    @yield('service') 

    @yield('hair-stylist')

    @yield('product') 

    @yield('gallery')



    @yield('appointment')

    @yield('login-form')

    @yield('contact')

    @yield('cart')

    @yield('shipping-info')

     @yield('success-msg')

    @include('layouts.frontend.partial.footer')

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

  <script src="{{asset('public/assets/frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/aos.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('public/assets/frontend/js/google-map.js')}}"></script>
  <script src="{{asset('public/assets/frontend/js/main.js')}}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
</body>
</html>
