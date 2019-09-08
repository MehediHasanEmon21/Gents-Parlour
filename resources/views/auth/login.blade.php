<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('public/assets/backend/images/favicon_1.ico') }}">

        <title>Moltran - Gents World</title>

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

        <!-- Custom Files -->
        <link href="{{ asset('public/assets/backend/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('public/assets/backend/js/modernizr.min.js') }}"></script>
        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Gents World</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group ">

                        <div class="col-xs-12">
                            <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" required="" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" id="password" type="password" name="password" required="" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                         

                    <div class="form-group ">
                        <div class="col-xs-12">
                        
                            
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                 
                </form> 
                </div>                                 
                
            </div>
        </div>

        
        <script>
            var resizefunc = [];
        </script>
        <script src="{{ asset('public/assets/backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/waves.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/wow.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/backend/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('public/assets/backend/assets/jquery-blockui/jquery.blockUI.js') }}"></script>


        <!-- CUSTOM JS -->
        <script src="{{ asset('public/assets/backend/js/jquery.app.js') }}"></script>
    
    </body>
</html>





























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}