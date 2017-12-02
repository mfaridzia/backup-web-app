<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> MasTel </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Rubik" rel="stylesheet">
    <style>
        *{
            font-family: 'Rubik', sans-serif;
        }
        .logo-mastel {
            margin-top:-7px;
        }
        .title-web {
            color:#00AE86; margin-left:90px; font-weight:550; margin-top:100px; line-height:40px;
        }
        .description-page {
            color:rgb(76, 77, 76);
            margin-left:90px;
            margin-top:50px;
            font-size:20px;
            margin-bottom:40px;
        }
        .btn-register {
            margin-left:90px;
            padding:15px 35px;
            background:#00AE86;
            color:#fff;
            border-radius:3px;
            text-decoration:none;
            font-weight:bold;
        }
        .btn-register:hover {
            color:#ddd;
            text-decoration:none;
        }
        .image-home {
            margin-top:75px;
        }
        .image-home:hover {
            opacity:0.8;
        }
        .masuk-title {
            font-size:16px;
            color:#00AE86;
            font-weight:bold;
        }
        .forgot-text {
            color:#000;
        }
    </style>
</head>
<body style="background-color:#F2F0F0;">
    <div id="app">
        <!-- <nav class="navbar navbar-default navbar-static-top" style="background:#F2F0F0; border:none;"> -->
        <nav class="navbar navbar-default navbar-static-top" style="border-bottom:1px solid #00AE86 ;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-weight:bold; color:#00AE86;">
                        <img src="{{ asset('img/new-logo3.png') }}" alt="Logo-MasTel" class="logo-mastel">
                        <!-- MasTel -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="border-nav"><a href="{{ route('login') }}">Masuk</a></li>
                            <li class="border-nav"><a href="{{ route('register') }}">Daftar</a></li>
                        @else

                        @if(Auth::user()->user_type == "admin")
                             <li><a href="{{ route('admin') }}"> Dashboard </a></li>
                        @endif

                            <li><a href="{{ route('home') }}"> Beranda </a></li>
                            <!-- <li><a href="{{ route('login') }}"> Pesanan </a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="/user/setting/{{ Auth::user()->id }}">
                                            Pengaturan
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    <div class="container" style="margin-top:100px;">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (session()->has('warning-register'))
                <div class="alert alert-warning text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('warning-register') }}
                </div>
            @endif
        </div>
    </div>

     <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (session()->has('warning'))
                <div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('warning') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
        
                <div class="panel-heading">
                   <p class="masuk-title"> Masuk </p>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-10  col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn btn-success">
                                    Masuk
                                </button>

                                <a class="btn btn-link forgot-text" href="{{ route('password.request') }}">
                                    Lupa Password ?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
</body>
</html>
