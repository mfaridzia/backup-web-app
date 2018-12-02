@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">

            <div class="col-md-3 left-page">
                <div class="row">
                    <div class="col-md-12 info-user">
                        <center> <img src="{{ asset('storage/public/photo/' . Auth::user()->photo) }}" alt="" class="img-responsive img-circle img-user" width="100" height="50"> </center>

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
                    <h3 class="masseus-info text-center"> Update Data </h3>   
                </div>

                <div class="row col-md-offset-2">  
                    <div class="col-md-8 account_settings-edit">
                        <!-- ----- -->
                        
                    <form class="form-horizontal" method="POST" action="/user/{{ $user->id }}">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-12">Nama</label>
                        <div class="col-md-12">
                            <input type="text" name="name"value="{{ $user->name }}"  placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" value="{{ $user->email }}" placeholder="" class="form-control form-control-line" name="email" id="email" required>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea name="address" id="" rows="5" class="form-control"> {{ $user->address }}</textarea>
                            @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        <label class="col-md-12">Umur</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ $user->age }}" placeholder="" name="age" class="form-control form-control-line" required>
                            @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('number_phone') ? ' has-error' : '' }}">
                        <label class="col-md-12">No Handphone</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ $user->number_phone }}" placeholder="" name="number_phone" class="form-control form-control-line" required>
                            @if ($errors->has('number_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number_phone') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success btn-block" type="submit">Update</button>
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
