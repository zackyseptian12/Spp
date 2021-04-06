@extends('layouts.admin')

@section('content')

    @if(Session::get('error'))
        <div class="alert alert-success">
            {{ session()->get('error')}}
        </div>
    @endif

        {{-- @if (Session::get('Ok'))
    <div class="alert alert-danger">
    <p>{{ session()->get('Ok')}}</p>
    </div>
    @endif --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Pembayaran') }}</div>
    
                    <div class="card-body">
                        <form action="{{route('storepembayaran')}}" method="POST">
                            @csrf 
                            <a href="{{route('indexpembayaran')}}" class="btn btn-primary my-3">Kembali</a><br>
                            {{-- <label for="">ID Pembayaran</label>
                            <input type="text" name="id_pembayaran"><br> --}}
                            {{-- <label for="">Petugas</label>
                            {{-- <input type="text" name="id_petugas"><br> --}}
                            {{-- <select name="id_petugas" id=""> --}}
                                {{-- <option value="">-- Petugas --</option>
                                @foreach ($petugas as $id => $petugas)
                                    <option value="{{$id}}">{{$petugas}}</option>
                                @endforeach --}}
                                {{-- <input type="text" name="id_petugas"value="{{auth()->user()->name}}" readonly ><br> --}}
                            {{-- </select><br> --}}
                            {{-- <strong>Terakhir Pembayaran:</strong><br>
                                {{-- <label for="">Terakhir pembayaran</label> --}}
                                
                               
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Terakhir Bayar</label>
                                    <input type="email" class="form-control" id="bulan" placeholder="" readonly>
                                </div>
                                {{-- <label for="exampleDataList" class="form-label">NISN</label>
                                    <input class="form-control" name="nisn" list="datalistOptions" id="nisn" placeholder="Type to search...">
                                        <datalist id="datalistOptions">
                                            @foreach ($siswa as $id=> $siswa)
                                        <option value="{{$siswa->nisn}}">{{$siswa->nisn.'-'.$siswa->nama.'-'.$siswa->nominal}}</option>
                                    @endforeach
                                        </datalist><br> --}}
                            <label for="">NISN</label>
                                <select name="nisn" id="nisn" onchange="getData()" class="js-example-basic-single" >
                                    <option value="">-- PILIH NISN --</option>
                                    @foreach ($siswa as $id=> $siswa)
                                        <option value="{{$siswa->nisn}}" data-nominal="{{$siswa->nominal}}">{{$siswa->nisn.'-'.$siswa->nama.'-'.$siswa->nominal}}</option>
                                    @endforeach
                                </select> <br>
                                <label for="">Nominal</label>
                                <input type="text" name="nominal" id="nominal" readonly>
                            {{-- <input type="text" name="nisn"><br> --}}
                            {{-- <label for="">Tanggal Bayar</label>
                            <input type="date" name="tgl_bayar"><br> --}}
                            <label for="">Bulan Bayar</label>
                                <select name="bulan_bayar">
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
                            {{-- <label for="">Tahun</label>
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
                                </select><br> --}}
                                {{-- <label for="">ID Spp</label> --}}
                                {{-- <input type="text" name="id_spp"><br> --}}
                                {{-- <select name="id_spp" id="">
                                    <option value="">-- Spp --</option>
                                    @foreach ($spp as $id => $spp)
                                   
                                        <option value="{{$spp->id}}"> {{'Tahun '.$spp->tahun.' - '.'RP.'.$spp->nominal}}</option>
                                    @endforeach
                                </select><br> --}}
                                <label for="">Jumlah Bayar</label>
                               
                                <input type="text" name="jumlah_bayar" ><br>     
                                      
                                <button type="submit" class="btn btn-success my-3">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script> --}}

<script>
    jQuery(document).ready(function(){
    jQuery('select').change(function(){
    let nominal = jQuery(this).find(':selected').data('nominal');
    
    if(!isNaN(nominal)){
    jQuery('#nominal').val(nominal)
    }
    })
    });
    </script>
@endsection
