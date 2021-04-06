@extends('layouts.admin')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('indexpembayaran')}}" class="btn btn-primary">Kembali</a>
    <div class="card col-md-6 mt-10 mx-auto">
    <div class="card-header">
        <img src="{{asset('/images/wg.png')}}" alt="" width="60px" height="60px" class="float-left">
        <div class="card-text">
          <h3>Kwitansi Pembayaran</h3>
        </div>
    </div>
    <div class="card-body">
        <b>ID Pembayaran :</b>{{ $pembayaran->id }} <br>
        <b>NISN : </b>{{ $pembayaran->nisn }} <br>
        <b>Nama Siswa : </b>{{ $pembayaran->nama }} <br>
        <b>Tanggal Bayar : </b>{{ $pembayaran->tgl_bayar }} <br>
        <b>Bulan Dibayar : </b>{{ $pembayaran->bulan_bayar }} <br>
        <b>Tahun Dibayar : </b>{{ $pembayaran->tahun_bayar }} <br>
        <b>Nominal : </b>{{ $pembayaran->nominal }} <br>
        <b>Jumlah Bayar : </b>{{ $pembayaran->jumlah_bayar}} <br>
        
    </div>
    </div>
</body>
</html>
@endsection