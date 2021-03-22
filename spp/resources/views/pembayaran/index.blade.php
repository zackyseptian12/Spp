@extends('layouts.app')
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
    <a href="">Tambah Pembayaran</a>

    <table border="1">
          <tr>
               <td>ID_pembayarn</td>
               <td>ID_Petugas</td>
               <td>nisn</td>
               <td>Tanggal Bayar</td>
               <td>Bulan Bayar</td>
               <td>Tahun Bayar</td>
               <td>ID_Spp</td>
               <td>Jumlah Bayar</td>
               <td>Action</td>
          </tr>
        @foreach ($pembayaran as $pembayaran)
        <tr>
             <td>{{$pembayaran->id_pembayaran}}</td>
             <td>{{$pembayaran->id_petugas}}</td>
             <td>{{$pembayaran->nisn}}</td>
             <td>{{$pembayaran->tgl_bayar}}</td>
             <td>{{$pembayaran->bulan_bayar}}</td>
             <td>{{$pembayaran->tahun_bayar}}</td>
             <td>{{$pembayaran->id_spp}}</td>
             <td>{{$pembayaran->jumlah_bayar}}</td>
             <td>
                 <form action="">
                 
                 </form>
             </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection