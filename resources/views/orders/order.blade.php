@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">

            <div class="col-md-3 left-page">
                <div class="row">
                    <div class="col-md-12 info-user">
                        <center> <img src="{{ asset('img/user.png') }}" alt="" class="img-responsive img-circle img-user" width="100" height="50"> </center>

                        <ul class="list-info-user">
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }} </li>
                            <li> {{ Auth::user()->number_phone }} </li>
                        </ul>

                    </div>
                </div>
            </div>    

            <div class="col-md-9 right-page-settings-edit">
                <div class="row">
                    <h3 class="masseus-info text-center"> Pemesanan Layanan</h3>   
                </div>

                <div class="row col-md-offset-2">  
                    <div class="col-md-8 account_settings-edit">
                        <!-- ----- -->
                        
                    <form class="form-horizontal" method="POST" action="/order/masseus/{{ $masseus->id }}">
                    <div class="form-group{{ $errors->has('booking_address') ? ' has-error' : '' }}">
                        <label class="col-md-12">Alamat Pemesanan</label>
                        <div class="col-md-12">
                            <textarea name="booking_address" placeholder="Masukan alamat anda.." id="" rows="5" class="form-control"> </textarea>
                            @if ($errors->has('booking_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('booking_address') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('order_date') ? ' has-error' : '' }}">
                        <label class="col-md-12">Tanggal Pesan</label>
                        <div class="col-md-12">
                            <input type="date" name="order_date"  placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('order_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                        <label for="start_time" class="col-md-12">Waktu Mulai (Waktu anda mulai dipijat)</label>
                        <div class="col-md-12">
                            <input type="time"  placeholder="" class="form-control form-control-line" name="start_time" id="start_time" required>
                            @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                        <label class="col-md-12">Waktu Selesai (Waktu anda selesai dipijat)</label>
                        <div class="col-md-12">
                            <input type="time" placeholder="" name="end_time" class="form-control form-control-line" required>
                            @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('total_peyment') ? ' has-error' : '' }}">
                        <label class="col-md-12">Total Bayar</label>
                        <div class="col-md-12">
                        
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="total_peyment" value="{{ $masseus->tariff }}" readonly required>
                            </div>

                            @if ($errors->has('total_peyment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_peyment') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success btn-block" type="submit">Pesan</button>
                        </div>
                    </div>
                </form>

                        <!-- ------------- -->
                    </div>    
                        
                </div>
            </div>  
              

        </div>
</div>

@endsection
