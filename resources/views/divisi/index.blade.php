<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data divisi</h2>
    <a href="{{ route('divisi.create') }}">Tambah divisi</a>
    <table>
        <thead>
            <tr>
                <td>kode</td>
                <td>nama</td>
                <td>aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($divisi as $d )
                <tr>
                    <td>{{ $d->kode }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>
                        <a href="{{ route('divisi.edit',$d->id) }}">Edit</a>
                        <form action="{{ route('divisi.delete',$d->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('yaki9n hapu data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="/logout" method="POST">

    @csrf

    <button type="submit">
        Logout
    </button>

</form>
</body>
</html>