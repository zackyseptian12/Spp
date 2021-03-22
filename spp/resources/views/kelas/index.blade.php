@extends('layouts.app')
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
    <a href="{{route('createkelas')}}"> Tambah kelas</a>

    <table border="1">
        <tr>
            <td>ID kelas</td>
            <td>nama kelas</td>
            <td>Major</td>
            <td>Action</td>
        </tr>
        @foreach ($kelas as $kelas)
            <tr>
                <td>{{$kelas->id_kelas}}</td>
                <td>{{$kelas->nama_kelas}}</td>
                <td>{{$kelas->major}}</td>
                <td>
                    <form action="{{route('deletkelas', $kelas->id)}}" method="POST">
                        <a href="{{route('editkelas',$kelas->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')

                       <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
