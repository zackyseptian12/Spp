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
    {{-- <div class="card"> --}}
        {{-- <div class="card-body">
        <form action="{{url('/history/siswa/')}}" method="POST">
        @csrf
        
        <div class="form-group">
        <label for="nisn">NISN</label>
        <input type="text" name="nisn" class="form-control" placeholder="Masukan nisn" required>
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="{{url('/history')}}" class="btn btn-light">Reset</a>
        {{-- <a href="{{route('export_excel')}}" class="btn btn-success">Download Excel</a> --}}
        {{-- </div>
        </form>
        </div>
        </div> --}} --}}
    {{-- <a href="{{route('createpembayaran')}}">Tambah Pembayaran</a> --}}

    {{-- <a href="/history/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}
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
        @foreach ($data as $p => $pembayaran)
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