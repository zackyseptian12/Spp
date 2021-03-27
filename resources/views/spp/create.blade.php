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
    <a href="{{route('indexspp')}}">Kembali</a> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Spp') }}</div> 
                    <div class="card-body">
                        <form action="{{route('storespp')}}" method="POST">
                           
                            @csrf
                            {{-- <label for="id_spp">ID_spp</label>\
                            <input type="" name="id_spp"><br> --}}
                            <label for="">Tahun</label>
                            <input type="date" name="tahun"><br>
                            <label for="">nominal</label>
                            <input type="integer" name="nominal"><br>
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
