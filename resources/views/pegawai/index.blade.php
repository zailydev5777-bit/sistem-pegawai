<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data pegawai</h1>
    <a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>
    <table>
        <tr>
            <th>nama</th>
            <th>jabatan</th>
            <th>divisi</th>
            <th>aksi</th>
        </tr>

        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->divisi->nama }}</td>
                <td>
                    <a href="{{ route('pegawai.edit',$p->id) }}">Edit</a>
                    <form action="{{ route('pegawai.delete',$p->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>



</body>
</html>