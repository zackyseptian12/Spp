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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        <form action="{{route('updatepembayaran', $pembayaran->id)}}" method="POST">
                            @csrf 
                            @method('PUT')
                            {{-- <label for="">ID Pembayaran</label>
                            <input type="text" name="id_pembayaran" value="{{$pembayaran->id_pembayaran}}"><br> --}}
                            <label for="">ID Petugas</label>
                            <input type="text" name="id_petugas" value="{{$pembayaran->id_petugas}}"><br>
                            <label for="">NISN</label>
                            <input type="text" name="nisn" value="{{$pembayaran->nisn}}"><br>
                            <label for="">Tanggal Bayar</label>
                            <input type="date" name="tgl_bayar" value="{{$pembayaran->tgl_bayar}}"><br>
                            <label for="">Bulan Bayar</label>
                                <select name="bulan_bayar">
                                    <option >- pilih bulan -</option>
                                    <option value="January">January</option>
                                    <option value="Febuary">Febuary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select><br>
                            <label for="">Tahun</label>
                                <select name="tahun_bayar">
                                    <option>- pilih tahun-</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                </select><br>
                                <label for="">ID Spp</label>
                                <input type="text" name="id_spp" value="{{$pembayaran->id_spp}}"><br>
                                <label for="">Jumlah Bayar</label>
                                <input type="text" name="jumlah_bayar" value="{{$pembayaran->jumlah_bayar}}"><br>
                                <button type="submit">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>



@endsection
