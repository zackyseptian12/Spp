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
    <a href="{{route('createpetugas')}}" class="">Tambah Petugas</a>

    <table border="1">
        <div class="container">
        <tr>
             <td>ID_petugas</td>
             <td>Username</td>
             <td>Password</td>
             <td>Nama Petugas</td>
             <td>Level</td>
             <td>Action</td>
        </tr>
        @foreach($petugas as $petugas)
         <tr>
             <td>{{$petugas->id_petugas}}</td>
             <td>{{$petugas->username}}</td>
             <td>{{$petugas->password}}</td>
             <td>{{$petugas->nama_petugas}}</td>
             <td>{{$petugas->level}}</td>
             <td>
                <form action="{{route('deletepetugas', $petugas->id)}}" method="POST">
                <a href="">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
                </form>
             </td>
         </tr>
        @endforeach
        </div>
    </table>
</body>
</html>
@endsection
