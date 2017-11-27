@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">

            <div class="col-md-4 left-page">
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

            <div class="col-md-8 right-page-settings">
                <div class="row">
                    <h3 class="masseus-info text-center"> Account Settings </h3>   
                </div>

                <div class="row col-md-offset-2">  
                    <div class="col-md-8 account_settings">
                         <center> <img src="{{ asset('img/user.png') }}" alt="" class="img-responsive img-circle  img-masseus" width="70" height="50"> </center>

                         <ul class="list-info-user user-2">
                            <li> {{ $user->name }} </li> 
                            <li> {{ $user->email }} </li>
                            <li> {{ $user->address }} </li> 
                         </ul>

                        <center> 
                            <button class="btn btn-primary text-center"> Update Data </button> 
                            <button class="btn btn-primary text-center"> Change Password </button> 
                        </center>

                    </div>    
                        
                </div>
            </div>  
              

        </div>
</div>

@endsection
