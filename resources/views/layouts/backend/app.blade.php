<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('public/assets/backend/images/favicon_1.ico') }}">
    <title>@yield('title')</title>

    <!-- Base Css Files -->
    <link href="{{ asset('public/assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('public/assets/backend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/backend/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/backend/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('public/assets/backend/css/animate.css') }}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('public/assets/backend/css/waves-effect.css') }}" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('public/assets/backend/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('public/assets/backend/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('public/assets/backend/js/modernizr.min.js') }}"></script>

    
</head>
<body class="fixed-left">
    <!-- Begin page -->
        <div id="wrapper">
        
            @include('layouts.backend.partial.topbar')

            @include('layouts.backend.partial.sidebar')
          



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">

               @yield('content')

               

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            @include('layouts.backend.partial.footer')
   

        </div>
        <!-- END wrapper -->

        
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('public/assets/backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/waves.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/wow.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/backend/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/chat/moment-2.2.1.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

        {{-- <!-- sweet alerts -->
        <script src="{{ asset('public/assets/backend/assets/sweet-alert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/sweet-alert/sweet-alert.init.js') }}"></script> --}}

        <!-- flot Chart -->
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.selection.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

        <!-- Counter-up -->
        <script src="{{ asset('public/assets/backend/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/backend/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{ asset('public/assets/backend/js/jquery.app.js') }}"></script>

        <!-- Dashboard -->
        <script src="{{ asset('public/assets/backend/js/jquery.dashboard.js') }}"></script>

        <!-- Chat -->
        <script src="{{ asset('public/assets/backend/js/jquery.chat.js') }}"></script>

        <!-- Todo -->
        <script src="{{ asset('public/assets/backend/js/jquery.todo.js') }}"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
      </script>
        
        {!! Toastr::message() !!}
</body>
</html>
