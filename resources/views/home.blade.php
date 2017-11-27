@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">
            <div class="col-md-4 left-page">

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
                                    <input type="search" name="q" class="form-control" placeholder="Cari tukang pijit..">
                                    <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                    </div>
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

            <div class="col-md-8 right-page">
                <div class="row">
                    <h3 class="masseus-info text-center"> Daftar Tukang Pijit </h3>   
                </div>

                <div class="row col-md-offset-1 ">  
                    @foreach($masseuss as $masseus)
                        <div class="col-md-5 jasa jasa-1">
                            <center> <img src="{{ asset('storage/photo/' . $masseus->photo) }}" alt="" class="img-responsive img-circle  img-masseus" width="70" height="50"> </center>

                            <ul class="list-masseus text-center">
                                <li> <b> {{ $masseus->name }} </b> </li> 
                                <li> <b> Tarif : Rp. {{ $masseus->tariff }} </b> </li>
                            </ul>

                            <center> <a href="/masseus/{{ $masseus->id }}" class="btn btn-success"> Lihat Detail </a> </center>  

                        </div>    
                    @endforeach
                        
                    
                </div>

            </div>  
              

        </div>
</div>

@endsection
