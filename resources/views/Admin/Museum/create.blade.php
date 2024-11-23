<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Museum</title>
    <style>
        /* CSS untuk merapikan form */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        form {
            max-width: 500px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            margin: 12px 0 5px;
            color: #555;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            display: inline-block;
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* CSS untuk pratinjau gambar */
        .img-preview {
            width: 100%;
            max-width: 200px;
            margin-top: 10px;
            border-radius: 4px;
            display: none;
        }
    </style>
</head>
<body>
    <form action="{{ route('museum.store') }}" method="POST" enctype="multipart/form-data">
        <h2>Tambah Museum</h2>
        @csrf
        <label for="nama_museum">Nama Museum</label>
        <input type="text" name="nama_museum" id="nama_museum">
        
        <label for="daerah_museum">Daerah Museum</label>
        <input type="text" name="daerah_museum" id="daerah_museum">
    
        <label for="judul_museum">Judul Museum</label>
        <input type="text" name="judul_museum" id="judul_museum">
    
        <label for="isi_museum">Isi Museum</label>
        <textarea name="isi_museum" id="isi_museum"></textarea>
    
        <label for="gambar_museum">Gambar Museum</label>
        <input type="file" name="gambar_museum" id="gambar_museum" onchange="previewImage()">
        
        <!-- Elemen untuk pratinjau gambar -->
        <img id="imgPreview" class="img-preview" src="#" alt="Pratinjau Gambar">
        <button type="submit">Tambah</button>
    </form>    

    <script>
        function previewImage() {
            const input = document.getElementById("gambar");
            const imgPreview = document.getElementById("imgPreview");

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.style.display = "block";
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imgPreview.style.display = "none";
            }
        }
    </script>
</body>
</html>
