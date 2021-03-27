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
                    <div class="card-header">{{ __('Tambah Kelas') }}</div>
    
                    <div class="card-body">
                        <form action="{{route('storekelas')}}" method="POST">
                            @csrf
                        {{-- <label for="">ID_kelas</label>
                        <input type="text" name="id_kelas"><br> --}}
                        <a href="{{route('indexkelas')}}">Kembali</a><br>
                        <label for="">Nama Kelas</label>
                        <input type="text" name="nama_kelas"><br>
                        <label for="">Major</label>
                        <input type="text" name="major"><br>
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
