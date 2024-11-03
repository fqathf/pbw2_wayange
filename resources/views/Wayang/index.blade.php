<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Wayang</title>
    <style>
        /* CSS untuk merapikan tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h3 {
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
        }

        a:hover {
            background-color: #45a049;
        }

        button {
            background-color: #f44336;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h3>Daftar Wayang</h3>
    <a href="{{ route('wayang.create') }}" type="button">Tambah Wayang</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listWayang as $w)
            <tr>
                <td>{{ $w->nama_wayang }}</td>
                <td>{{ $w->judul_wayang }}</td>
                <td>{{ $w->isi_wayang }}</td>
                <td><img src="{{ asset('storage/' . $w->gambar_wayang) }}" alt="Gambar Wayang" width="300px"></td>
                <td>{{ $w->kategori->nama_kategori}}</td>
                <td>
                    <a href="{{ route('wayang.edit', $w->id) }}">Edit</a>
                    <form action="{{ route('wayang.destroy', $w->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
