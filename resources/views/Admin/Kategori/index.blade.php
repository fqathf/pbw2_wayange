<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kategori</title>
</head>

<body>
    <div>
        <h3>Daftar Kategori</h3>

        <a href="{{ route('admin.kategori.create') }}">Tambah Kategori</a>

        <form action="{{ route('admin.kategori.search') }}" method="GET">
            <input type="text" name="search" placeholder="Cari Kategori..." value="{{ request('search') }}">
            <button type="submit">Cari</button>
        </form>

        <h4>Daftar Kategori</h4>
        <ul>
            @foreach ($listKategori as $kategori)
                <li>
                    {{ $kategori->nama_kategori }}
                    <div>
                        <a href="{{ route('admin.kategori.edit', $kategori->id_k) }}">Edit</a>
                        <form action="{{ route('admin.kategori.destroy', $kategori->id_k) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
