<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('updatespp', $spp->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="id_spp">ID_spp</label>\
        <input type="" name="id_spp" value="{{$spp->id_spp}}"><br>
        <label for="">Tahun</label>
        <input type="year" name="tahun" value="{{$spp->tahun}}"><br>
        <label for="">nominal</label>
        <input type="integer" name="nominal"value="{{$spp->nominal}}"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>