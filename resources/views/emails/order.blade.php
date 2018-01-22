<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemesanan</title>
</head>
<body>

    <h1> Berikut Info Pesanan Anda </h1>

        <p>Nama Pemesan : {{ $order->name }} </p>
        <p>Alamat : {{ $order->booking_address}} </p>
        <p>Tanggal Pesan : {{ $order->order_date }} </p>
        <p>Waktu : {{ $order->start_time }} Sampai Jam {{ $order->end_time }}  </p>
        <p>Total Pembayaran : {{ $order->total_peyment }} </p>

    <h2> Silahkan Lakukan Pembayaran Ke Rekening Bank Berikut : </h2>
    
        <p> 09877666232323 (Bank XYZ) A/N Fulana Bin Fulan </p>
        <p> Setelah Melakukan Pembayaran Silahkan Konfirmasi Ke Email Berikut : adminmastel@mastel.com </p>

        <p> Terimakasih atas kepercayaan anda menggunakan aplikasi kami. </p>

</body>
</html>