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
                        <a href="{{route('indexspp')}}">Kembali</a>
                        <form action="{{route('updatespp', $spp->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <a href="{{route('indexspp')}}" class="btn btn-success">Kembali</a><br>
                            {{-- <label for="id_spp">ID_spp</label>\
                                <input type="" name="id_spp" value="{{$spp->id_spp}}"><br> --}}
                                <label for="">Tahun</label>
                                <input type="date" name="tahun" value="{{$spp->tahun}}"><br>
                                <label for="">nominal</label>
                                <input type="integer" name="nominal"value="{{$spp->nominal}}"><br>
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
