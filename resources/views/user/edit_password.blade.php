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

            <div class="col-md-9 right-page-home-result">
                <div class="row">
                    <h3 class="masseus-info text-center"> Ganti Password</h3>   
                </div>

                <!-- Alert ketika berhasil dan gagal update password -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session()->has('notification'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('notification') }}
                            </div>
                        @elseif (session()->has('notification-error'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('notification-error') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row col-md-offset-2">  
                    <div class="col-md-8 account_settings-edit">
                        <!-- ----- -->
                        
                <form class="form-horizontal" method="POST" action="/user/ganti-password/{{ $user->id }}">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                        <label class="col-md-12">Password Lama</label>
                        <div class="col-md-12">
                            <input type="password" name="old_password" placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('old_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-12">Password Baru</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password" required>
                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                     <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-12">Konfirmasi Password Baru</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                             @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success btn-block" type="submit">Ubah Password</button>
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
