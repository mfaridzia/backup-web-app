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

            <div class="col-md-8">
                <div class="row col-md-offset-0" style="margin-top:20px;">  
                   <h1 class="text-center"> Daftar Pesanan Customer </h1>

                    <div class="table-responsive">
                   <table class="table table-responsive table-striped">
                        <tr>
                            <th> Nama </th>
                            <th> No Telephone </th>
                            <th> Alamat </th>
                            <th> Tanggal Order </th>
                            <th> Jam Order </th>
                            <th> Total Bayar </th>
                            <th> Status </th>
                        </tr>
                        <tr>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                        </tr>
                        <tr>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                            <td> Nama Customer </td>
                        </tr>
                        
                   </table>
                   </div>

                </div>

            </div>  
              

        </div>
</div>

@endsection
