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
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        <a href="{{route('indexsiswa')}}" class="btn btn-success">Kembali</a><br>
                        <form action="{{route('updatesiswa', $siswa->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="id_spp">NISN</label>\
                            <input type="text" name="nisn" value="{{$siswa->nisn}}"><br>
                            <label for="">nis</label>
                            <input type="text" name="nis" value="{{$siswa->nis}}"><br>
                            <label for="">nama</label>
                            <input type="text" name="nama"value="{{$siswa->nama}}"><br>
                            <label for="">id_kelas</label>
                            <select name="id_kelas" id="">
                                 <option value="">Kelas</option>
                                 @foreach ($kelas as $id => $data)
                                 <option value="{{$id}}" @if ($id == $siswa->id_kelas) selected @endif>{{$data}}</option>
                                 @endforeach
                            </select><br>
                            {{-- <input type="text" name="id_kelas"value="{{$siswa->id_kelas}}"><br> --}}
                            <label for="">alamat</label>
                            <input type="text" name="alamat"value="{{$siswa->alamat}}"><br>
                            <label for="">no_hp</label>
                            <input type="text" name="no_hp"value="{{$siswa->no_hp}}"><br>
                            <label for="">id_spp</label>
                            <select name="id_spp" id="">
                                <option value="">ID SPP</option>
                                @foreach ($spp as $id => $data)
                                <option value="{{$id}}" @if ($id == $siswa->id_spp) selected @endif>{{$data}}</option>
                            @endforeach
                            </select><br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>



@endsection
