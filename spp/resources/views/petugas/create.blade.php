<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storepetugas')}}" method="POST">
    @csrf

    <label for="">ID_Petugas</label>
    <input type="text" name="id_petugas"><br>
    <label for="">Username</label>
    <input type="text" name="username"><br>
    <label for="">Password</label>
    <input type="text" name="password"><br>
    <label for="">Nama Petugas</label>
    <input type="text" name="nama_petugas"><br>
    <label for="">Level</label>
    <!-- <input type="text" name="level"><br> -->
    <select name="level" >
     <option value="">Level</option>
     <option value="admin">admin</option>
     <option value="petugas">petugas</option>
    </select>
    <button type="submit">Simpan</button>
    </form>
</body>
</html>
