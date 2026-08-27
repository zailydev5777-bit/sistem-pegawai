<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit data pegawai</h1>

    <form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $pegawai->nama }}">
        <input type="text" name="jabatan" value="{{ $pegawai->jabatan }}">
        <select name="divisi_id" >
            @foreach ($divisi as $d)
                <option value="{{ $d->id }}" 
                    {{ old('divisi_id',$pegawai->divisi->id == $d->id ? 'selected':'') }}
                    >{{ $d->nama }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>

    </form>
</body>
</html>