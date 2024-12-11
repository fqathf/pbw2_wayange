<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
@include('components.sidebar')
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
