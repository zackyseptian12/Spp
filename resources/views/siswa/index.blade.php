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
 
    <a href="{{route('createsiswa')}}" >Tambah Siswa</a>

    <table border="1" align="center">
        
        <tr>
            <td>NISN</td>
            <td>NIS</td>
            <td>nama</td>
            <td>Id_kelas</td>
            <td>alamat</td>
            <td>no_hp</td>
            <td>id_spp</td>
            <td>Action</td>
        </tr>
        @foreach ($siswa as $siswa)
            <tr>
                <td>{{$siswa->nisn}}</td>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->id_kelas}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>{{$siswa->no_hp}}</td>
                <td>{{$siswa->id_spp}}</td>
                <td>
                    <form action="{{route('deletesiswa', $siswa->id)}}" method="POST">
                        <a href="{{route('editsiswa',$siswa->id)}}">Edit</a>
                        @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </div>
    </table>
</body>
</html>
@endsection
