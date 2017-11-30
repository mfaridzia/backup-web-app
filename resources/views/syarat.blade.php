<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> TOS MasTel </title>
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
        .box-register {
            background:#fff;
            border-radius:3px;
        }        
        #new-account-title {
            color:#00AE86;
            margin-bottom:50px;
            text-decoration:underline;
            font-weight:bold;
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

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 box-register">
            <!-- <div class="panel panel-default"> -->
                <!-- <div class="panel-heading">Daftar Akun Baru</div> -->

                <h2 class="text-center" id="new-account-title"> Syarat di MasTel </h2>
                <h4 class="text-center" style="margin-top:-20px;"> 
                    Aturan yang wajib customer ikuti selama beraktivitas di MasTel
                </h4>

                <h1 class="text-center"> COMING SOON </h1>

                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

    
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
</body>
</html>
