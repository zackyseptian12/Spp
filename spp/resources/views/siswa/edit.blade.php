<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updatesiswa', $siswa->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="id_spp">NISN</label>\
        <input type="text" name="nisn" value="{{$siswa->nisn}}"><br>
        <label for="">nis</label>
        <input type="text" name="nis" value="{{$siswa->nis}}"><br>
        <label for="">nama</label>
        <input type="text" name="nama"value="{{$siswa->nama}}"><br>
        <label for="">nama</label>
        <input type="text" name="id_kelas"value="{{$siswa->id_kelas}}"><br>
        <label for="">alamat</label>
        <input type="text" name="alamat"value="{{$siswa->alamat}}"><br>
        <label for="">no_hp</label>
        <input type="text" name="no_hp"value="{{$siswa->no_hp}}"><br>
        <label for="">id_spp</label>
        <input type="text" name="nama"value="{{$siswa->id_spp}}"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>