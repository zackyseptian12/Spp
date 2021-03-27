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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Siswa') }}</div>
    
                    <div class="card-body">
                        <form action="{{route('storesiswa')}}" method="POST">
                            @csrf
                        
                            <a href="{{route('indexsiswa')}}">Kembali</a><br>
                                <label for="">nisn</label>
                            <input type="text" name="nisn"><br>
                            <label for="">nis</label>
                            <input type="text" name="nis"><br>
                            <label for="">nama</label>
                            <input type="text" name="nama"><br>
                            <label for="">id_kelas</label>
                            <!-- <input type="text" name="id_kelas"><br> -->
                            <select name="id_kelas">
                            <option value="">Kelas</option>
                            @foreach ($kelas as $id => $kelas)
                            <option value="{{$id}}">{{$kelas}}</option>
                            @endforeach
                            </select><br>
                            <label for="">alamat</label>
                            <input type="text" name="alamat"><br>
                            <label for="">no_hp</label>
                            <input type="text" name="no_hp"><br>
                            <label for="">id_spp</label>
                            {{-- <input type="text" name="id_spp"><br> --}}
                                <select name="id_spp" >
                                    <option value="">-- Spp --</option>
                                    @foreach ($spp as $id => $spp)
                                        <option value="{{$id}}">{{$spp}}</option>
                                    @endforeach
                                </select><br>
                            <button type="submit">simpan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


@endsection

