@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('createpembayaran')}}">Tambah Pembayaran</a>

    <table border="1" align="center">
          <tr>
               <td>ID_pembayarn</td>
               <td>Petugas</td>
               <td>nisn</td>
               <td>Tanggal Bayar</td>
               <td>Bulan Bayar</td>
               <td>Tahun Bayar</td>
               <td>Jumlah Spp</td>
               <td>Jumlah Bayar</td>
               
          </tr>
        @foreach ($pembayaran_view as $p => $pembayaran)
        <tr>
             <td>{{$pembayaran->id}}</td>
             <td>{{$pembayaran->nama_petugas}}</td>
             <td>{{$pembayaran->nisn}}</td>
             <td>{{$pembayaran->tgl_bayar}}</td>
             <td>{{$pembayaran->bulan_bayar}}</td>
             <td>{{$pembayaran->tahun_bayar}}</td>
             <td>{{$pembayaran->nominal}}</td>
             <td>{{$pembayaran->jumlah_bayar}}</td>
             
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection