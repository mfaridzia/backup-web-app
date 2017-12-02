<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemesanan {{ $order->name }} </title>
</head>
<body>

    <h1> Berikut Data Pesanan Anda </h1>

        <p>Nama Pemesan : {{ $order->name }} </p>
        <p>Alamat : {{ $order->order_date }} </p>
        <p>Tanggal Pesan : {{ $order->booking_address }} </p>
        <p>Waktu Mulai : {{ $order->start_time }} </p>
        <p>Waktu Selesai : {{ $order->end_time }} </p>
        <p>Total Bayar : {{ $order->total_peyment }} </p>

</body>
</html>