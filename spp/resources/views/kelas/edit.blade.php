<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updatekelas', $kelas->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">ID_Kelas</label>
    <input type="text" name="id_kelas" value="{{$kelas->id_kelas}}"><br>
    <label for="">Nama_kelas</label>
    <input type="text" name="nama_kelas" value="{{$kelas->nama_kelas}}"><br>
    <label for="">Major</label>
    <input type="text" name="major" value="{{$kelas->major}}"><br>
    <button type="submit"> Simpan</button>
    
    </form>

</body>
</html>