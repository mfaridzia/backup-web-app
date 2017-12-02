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

            <div class="col-md-9 right-page-settings">
                <div class="row">
                    <h3 class="masseus-info text-center" style="font-size:21px;"> Data Pemesanan Pelanggan </h3>   
                </div>



                <div class="row col-md-offset-0"> 
                @if(count($orders) < 6)
                    <div class="col-md-12 right-page-home-result" style="margin-top:30px;">
                @else
                    <div class="col-md-12 right-page-home-result-order" style="margin-top:30px;">
                @endif
                  <div class="table-responsive" style="background:#fff;">
                   <table class="table table-responsive table-hover">
                        <tr>
                            <th style="background:#fff; text-align:center; color:#000;"> No </th>
                            <th style="background:#fff; text-align:center; color:#000;"> Nama </th>
                            <th style="background:#fff; text-align:center; color:#000;"> No Telp </th>
                            <th style="background:#fff; text-align:center; color:#000;"> Alamat </th>
                            <th style="background:#fff; text-align:center; color:#000;"> Tgl Order </th>
                            <th style="background:#fff; text-align:center; color:#000;"> Jam Order </th>
                            <th style="background:#fff; text-align:center; color:#000;"> Total Bayar </th>
                        </tr>

                        <!-- menampilkan relasi one to many (users ke orders) -->
                        @foreach($users as $user)
                            @foreach($user->orders as $order)
                            <tr>
                                <td> {{ $order->id }} </td> 
                                <td> {{ $order->name }} </td>
                                <td> {{ $user->number_phone }} </td>
                                <td> {{ $order->booking_address }} </td>
                                <td> {{ $order->order_date }} </td>
                                <td> 
                                    {{ \Carbon\Carbon::parse($order->start_time)->format('g:i A') . " - " . 
                                    \Carbon\Carbon::parse($order->end_time)->format('g:i A') }}
                                </td>
                                <td> Rp. {{ $order->total_peyment }} </td>
                            </tr>
                            @endforeach
                        @endforeach
                    
                   </table>
                   </div>
                   
                    <div style="margin-left:-116px;"> {{ $users->links() }} </div>

                    </div>    
                        
                </div>
            </div>  
              

        </div>
</div>

@endsection
