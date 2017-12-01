@extends('layouts.app')

@section('content')

<div class="container-fluid fix">
        <div class="row">

            <div class="col-md-3 left-page">
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

            <div class="col-md-9 right-page-single-page">
                <div class="row">
                    <h3 class="masseus-info text-center">Info Detail Tukang Pijit </h3>   
                </div>

                <div class="row col-md-offset-0" style="margin-bottom:30px;">  
                    <div class="col-md-8 col-md-offset-2" style="margin-top:25px; background:#fff; padding:30px; border-radius:5px;">
                        <center> <img src="{{ asset('storage/photo/' . $masseus->photo) }}" alt="" style="margin-bottom:20px;"> </center> 
                        
                         <center> <table border="0" cellpadding="10" class="table-responsive detail-massage">
                            <tr>
                                <td> Nama </td>
                                <td> : </td>
                                <td> {{ $masseus->name }} </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td> : </td>
                                <td> {{ $masseus->address }} </td>
                            </tr>
                            <tr>
                                <td> Umur </td>
                                <td> : </td>
                                <td> {{ $masseus->age }} Tahun </td>
                            </tr>
                            <tr>
                                <td> Jenis Kelamin </td>
                                <td> : </td>
                                <td> {{ $masseus->gender }} </td>
                            </tr>
                            <tr>
                                <td> Tarif </td>
                                <td> : </td>
                                <td> Rp. {{ $masseus->tariff }} </td>
                            </tr>
                        </table> </center>

                       <center>
                           <a href="/order/masseus/{{ $masseus->id }}" class="btn btn-success"> Pesan Sekarang </a> 
                           <a href="/testimoni" class="btn btn-success"> Lihat Testimoni </a>
                       </center>
                    </div>
                </div>

            </div>  
              

        </div>
</div>

@endsection
