@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">

            <div class="col-md-4 left-page">
                <div class="row">
                    <div class="col-md-12 info-user">
                        <center> <img src="{{ asset('storage/photo/' . Auth::user()->photo) }}" alt="" class="img-responsive img-circle img-user" width="100" height="50"> </center>

                        <ul class="list-info-user">
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }}</li>
                            <li> {{ Auth::user()->number_phone }} </li>
                        </ul>

                    </div>
                </div>
            </div>    

            <div class="col-md-8">
                <div class="row">
                    <h3 class="masseus-info text-center"> Form Pemesanan </h3>   
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
       
                        <form action="#" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row">  
                                <div class="col-md-10">
                                    Alamat Pemesanan
                                    <textarea class="form-control" name="booking_address" id="" rows="5" placeholder="Masukan alamat anda.."></textarea>
                                </div>
                            </div>
                            <div class="row">  
                                <div class="col-md-10">
                                    Tanggal Pesan
                                    <input class="form-control" type="date" name="order_date" placeholder="Tanggal Order">
                                </div>
                            </div>
                             <div class="row">  
                                <div class="col-md-10">
                                    Waktu Mulai
                                    <input class="form-control" type="time" name="start_time">
                                </div>
                            </div>
                             <div class="row">  
                                <div class="col-md-10">
                                    Waktu Selesai
                                    <input class="form-control" type="time" name="end_time">
                                </div>
                            </div>
                            <div class="row">  
                                <div class="col-md-10">
                                   Total Pembayaran <br/>
                                  <div class="input-group">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="text" class="form-control" name="total_peyment" value="{{ $masseus->tariff }}" readonly>
                                </div>
                                </div>
                            </div>
                    <br/>
                             <div class="row">  
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary btn-block"> Pesan </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>  
              

        </div>
</div>

@endsection
