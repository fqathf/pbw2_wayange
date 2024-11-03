<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Kategori</h2>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <button type="submit">Simpan</button>
</body>
</html>