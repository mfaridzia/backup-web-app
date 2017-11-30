@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">
            <div class="col-md-3 left-page">

            <!-- <div class="row">
                <h3 class="user-info text-center"> Info Customer </h3>   
            </div> -->

                <div class="row">
                    <div class="col-md-12 info-user">
                        <center> <img src="{{ asset('storage/photo/' . Auth::user()->photo) }}" alt="" class="img-responsive img-circle img-user" width="150" height="100"> </center>

                        <ul class="list-info-user">
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }}</li>
                            <li> {{ Auth::user()->number_phone }} </li>
                        </ul>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="/query" method="GET">
                                {{ csrf_field() }}
                                    <div class="input-group">
                                         <input type="search" name="q" class="form-control" placeholder="Search by name..." required>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">Go</button>
                                        </span>
                                    </div>
                                </form>

                            </div>
                        </div>
                       
                    </div>
            </div>

                <!-- <div class="row">
                    <div class="col-md-12">
                        <ul class="menu-left">
                            <li> <a href=""> Beranda </a> </li>
                            <li> <a href=""> Pengaturan </a> </li>
                            <li> <a href=""> Logout </a> </li>
                        </ul>
                    </div>
                </div>
   -->
            </div>    

        <div class="container-fluid">
            <div class="col-md-9">
                <div class="row col-md-offset-1" style="margin-top:60px;">  
                  
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 jasa box-dashboard">

                        <i class="glyphicon glyphicon-tags"></i>
                        <p class="text-title-box"> Lihat Pesanan </p>

                        <a href="/order/show-orders" class="btn-box">Lihat</a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6 jasa box-dashboard">

                        <i class="glyphicon glyphicon-user"></i>
                        <p class="text-title-box"> Tukang Pijit </p>

                        <a href="/masseus/tambah" class="btn-box">Lihat</a>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6 jasa box-dashboard">

                        <i class="glyphicon glyphicon-list-alt"></i>
                        <p class="text-title-box"> Data User </p>

                        <a href="" class="btn-box">Lihat</a>
                        </div>
                    </div>

                </div>

            </div>  
        </div>   

        </div>
</div>

@endsection
