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

    <link href="/datatables/datatables-asset/css/jquery.dataTables.css" rel="stylesheet">
    <link href="/datatables/datatables-asset/css/dataTables.bootstrap.css" rel="stylesheet">

    <style>
        .text-logo {
            color:#00AE86;
        }
        .logo-mastel {
            margin-top:-5px;
        }
        @media (min-width: 1100px) {
            /* .right-page-home-result-home {
                background:#F2F0F0;
                height: 100%;
            } */
            .right-page-settings {
                background:#F2F0F0;
                height: 100%;
            }
            .right-page-order {
                background:#F2F0F0;
                height: 100%;
            }
            /* .paging-home {
                margin-left:-100px;
            } */
        }

        @media (max-width: 1000px) {
            .right-page-home-result-home {
                background:#F2F0F0;
                height: 100%;
            }
            .right-page-settings {
                background:#F2F0F0;
                height: 100%;
            }
            .right-page-home-result {
                background:#F2F0F0;
                height: 100%;
            }
            .right-page-order {
                background:#F2F0F0;
                height: 100%;
            }
            .right-page-single-page {
                background:#F2F0F0;
                height: 100%;
            }
            .paging-home {
                margin-left:-100px;
            }
        }
    </style>
</head>
<body style="background-color:#fff;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            <li><a href="{{ route('register') }}">Daftar</a></li>
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

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
    <script src="/datatables/datatables-asset/js/jquery.dataTables.min.js"></script>
    <script src="/datatables/datatables-asset/js/dataTables.bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
