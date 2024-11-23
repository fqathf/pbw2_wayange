<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Berita</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        /* Main container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styling */
        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 36px;
            margin-bottom: 30px;
        }

        /* Success message */
        p.success {
            color: green;
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Table headers */
        th {
            background-color: #2c3e50;
            color: white;
            text-align: left;
            padding: 12px 15px;
            font-size: 16px;
        }

        /* Table row styling */
        td {
            background-color: #ecf0f1;
            text-align: left;
            padding: 10px 15px;
            vertical-align: middle;
            font-size: 14px;
        }

        /* Table row hover effect */
        tr:hover {
            background-color: #dfe6e9;
        }

        /* Action buttons styling */
        a, button {
            padding: 8px 15px;
            margin: 5px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }

        /* Edit button */
        a {
            background-color: #3498db;
            color: white;
            border-radius: 5px;
        }

        /* Delete button */
        button {
            background-color: #e74c3c;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Button hover effects */
        a:hover {
            background-color: #2980b9;
        }

        button:hover {
            background-color: #c0392b;
        }

        /* Image styling */
        img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List Berita</h1>
        <a href="{{ route('berita.create') }}">Tambah Berita</a>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listBerita as $berita)
                    <tr>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ Str::limit($berita->isi_berita, 50) }}</td>
                        <td>{{ $berita->tanggal_berita }}</td>
                        <td>{{ $berita->penulis_berita }}</td>
                        <td>
                            @if ($berita->gambar_berita)
                                <img src="{{ asset('storage/' . $berita->gambar_berita) }}" alt="Gambar Berita">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('berita.edit', $berita->id) }}">Edit</a>
                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
