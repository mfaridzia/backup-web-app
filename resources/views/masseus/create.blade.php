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
                            <li> <span class="number-phone-font"> {{ Auth::user()->number_phone }} </span> </li>
                        </ul>

                    </div>
                </div>
            </div>    

            <div class="col-md-9 right-page-settings-edit">
                <div class="row">
                    <h3 class="masseus-info text-center" style="font-size:21px;"> Tambah Data Tukang Pijat </h3>   
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session()->has('notification'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('notification') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row col-md-offset-2">  
                    <div class="col-md-8 account_settings-edit">
                        <!-- ----- -->
                        
                    <form class="form-horizontal" method="POST" action="/masseus/tambah" enctype="multipart/form-data">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-12">Nama Tukang Pijat</label>
                        <div class="col-md-12">
                            <input type="text"  placeholder="" class="form-control form-control-line" name="name" id="name" required>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="col-md-12">Alamat Lengkap</label>
                        <div class="col-md-12">
                            <textarea name="address" placeholder="" id="" rows="5" class="form-control" required> </textarea>
                            @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('number_phone') ? ' has-error' : '' }}">
                        <label class="col-md-12">No Handphone</label>
                        <div class="col-md-12">
                            <input type="number" name="number_phone"  placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('number_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number_phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        <label for="age" class="col-md-12">Umur</label>
                        <div class="col-md-12">
                            <input type="number"  placeholder="" class="form-control form-control-line" name="age" id="age" required>
                            @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label class="col-md-12">Jenis Kelamin</label>
                        <div class="col-md-12">
                            <input type="radio" name="gender" value="Pria" required> Pria
                            <input type="radio" name="gender" value="Wanita" required> Wanita
                            @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>

                     <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                        <label for="photo" class="col-md-12">Foto Terbaru</label>
                        <div class="col-md-12">
                            <input type="file" class="form-control form-control-line" name="photo" id="photo" required>
                            @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tariff') ? ' has-error' : '' }}">
                        <label for="tariff" class="col-md-12">Tarif Tukang Pijat (Rp)</label>
                        <div class="col-md-12">
                            <input type="number"  placeholder="" class="form-control form-control-line" name="tariff" id="tariff" required>
                            @if ($errors->has('tariff'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tariff') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>

                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success btn-block" type="submit"> Tambah Data </button>
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
