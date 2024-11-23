<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Museum</title>
    <style>
        /* CSS untuk merapikan tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
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

        /* CSS untuk gambar */
        .img-preview {
            max-width: 200px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h3>Daftar Museum</h3>
    <a href="{{ route('museum.create') }}" type="button">Tambah Museum</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Daerah</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listMuseum as $museum)
                <tr>
                    <td>{{ $museum->nama_museum }}</td>
                    <td>{{ $museum->daerah_museum }}</td>
                    <td>{{ $museum->judul_museum }}</td>
                    <td>{{ $museum->isi_museum }}</td>
                    <td>
                        @if ($museum->gambar_museum)
                            <img src="{{ asset('storage/' . $museum->gambar_museum) }}" alt="Gambar Museum" class="img-preview">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('museum.edit', $museum->id) }}">Edit</a>
                        <form action="{{ route('museum.destroy', $museum->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
