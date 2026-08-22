<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>tambah data</h1>
    <form action="{{ route('divisi.update',$divisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="kode">Kode</label>
        <input type="text" name="kode" value="{{ $divisi->kode }}">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ $divisi->nama }}">

        <button type="submit">update</button>
    </form>
</body>
</html>