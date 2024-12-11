<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Berita</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea,
        input[type="file"],
        input[type="date"] {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .back-btn {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
            font-size: 16px;
        }

        .back-btn:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Berita</h1>
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="judul_berita">Judul Berita</label>
            <input type="text" id="judul_berita" name="judul_berita" value="{{ old('judul_berita') }}" required>

            <label for="isi_berita">Isi Berita</label>
            <textarea id="isi_berita" name="isi_berita" required>{{ old('isi_berita') }}</textarea>

            <label for="tanggal_berita">Tanggal Berita</label>
            <input type="date" id="tanggal_berita" name="tanggal_berita" value="{{ old('tanggal_berita') }}" required>

            <label for="penulis_berita">Penulis Berita</label>
            <input type="text" id="penulis_berita" name="penulis_berita" value="{{ old('penulis_berita') }}" required>

            <label for="gambar_berita">Gambar Berita</label>
            <input type="file" id="gambar_berita" name="gambar_berita" accept="image/*" required>

            <button type="submit">Simpan Berita</button>
        </form>

        <a href="{{ route('berita.index') }}" class="back-btn">Kembali ke List Berita</a>
    </div>
</body>
</html>
