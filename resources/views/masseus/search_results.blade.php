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
                        <center> <img src="{{ asset('storage/public/photo/' . Auth::user()->photo) }}" alt="" class="img-responsive img-circle img-user" width="150" height="100"> </center>

                        <ul class="list-info-user">
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }}</li>
                            <li> <span class="number-phone-font"> {{ Auth::user()->number_phone }} </span> </li>
                        </ul>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="" method="GET">
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

            @if(count($results) < 6)
                <div class="col-md-9 right-page-home-result">
            @else
                <div class="col-md-9 right-page-result">
            @endif
                <div class="row">
                    <h3 class="masseus-info text-center"> Hasil Pencarian Tukang Pijit </h3>   
                </div>

                @if(count($results) === 1)
                    <div class="row col-md-offset-2">  
                    @foreach($results as $result)
                        <div class="col-md-8 jasa-hasil-cari">
                            <center> <img src="{{ asset('storage/public/photo/' . $result->photo) }}" alt="" class="img-responsive img-circle  img-masseus" width="70" height="50"> </center>

                            <ul class="list-masseus text-center">
                                <li> <b> {{ $result->name }} </b> </li> 
                                <li> <b class="number-phone-font"> Tarif : Rp. {{ $result->tariff }} </b> </li>
                            </ul>

                            <center> <a href="/masseus/{{ $result->id }}" class="btn btn-success"> Lihat Detail </a> </center>  

                        </div>    
                    @endforeach
                @elseif(count($results))
                <div class="row col-md-offset-1 ">  
                    @foreach($results as $result)
                        <div class="col-md-5 col-md-5 col-sm-5 col-xs-10 jasa-hasil-cari">
                            <center> <img src="{{ asset('storage/photo/' . $result->photo) }}" alt="" class="img-responsive img-circle  img-masseus" width="70" height="50"> </center>

                            <ul class="list-masseus text-center">
                                <li> <b> {{ $result->name }} </b> </li> 
                                <li> <b class="number-phone-font"> Tarif : Rp. {{ $result->tariff }} </b> </li>
                            </ul>

                            <center> <a href="/masseus/{{ $result->id }}" class="btn btn-success"> Lihat Detail </a> </center>  

                        </div>    
                    @endforeach
                </div>

                {{ $results->links() }}

                @else
                     <div> 
                    
                        <h3 class="text-center" style="margin-top:150px;">
                           <p style="font-size:60px;"> :( <p> 
                             Oops.. Pencarian dengan Nama <b> {{$query}} </b> Tidak Ditemukan 
                        <h3>

                        <center> <a href="/home" class="btn btn-lg btn-success"> Back to Home </a> </center>
                     
                     </div>
                @endif

            </div>  
              

        </div>
</div>

@endsection
