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
    <a href="{{route('tambahspp')}}">Tambah Spp</a>

    <table border="1" align="center">
        <tr>
            <td>ID SPP</td>
            <td>Tahun</td>
            <td>Nominal</td>
            <td>Action</td>
        </tr>
        @foreach ($spp as $spp)
        <tr>
          <td>{{$spp->id}}</td>
          <td>{{$spp->tahun}}</td>
          <td>{{$spp->nominal}}</td>
          <td>
            <form action="{{route('deletspp',$spp->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delet</button>
                <a href="{{route('editspp', $spp->id)}}">Edit</a></td></form>

        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
