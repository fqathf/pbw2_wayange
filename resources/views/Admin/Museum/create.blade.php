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

        #map {
            height: 300px;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<form action="{{ route('admin.museum.store') }}" method="POST" enctype="multipart/form-data">
    <h2>Tambah Museum</h2>
    @csrf
    <label for="nama_museum">Nama Museum</label>
    <input type="text" name="nama_museum" id="nama_museum">

    <label for="daerah_museum">Daerah Museum</label>
    <input type="text" name="daerah_museum" id="daerah_museum" placeholder="Cari lokasi museum di peta" onFocus="geolocate()">

    <label for="judul_museum">Judul Museum</label>
    <input type="text" name="judul_museum" id="judul_museum">

    <label for="isi_museum">Isi Museum</label>
    <textarea name="isi_museum" id="isi_museum"></textarea>

    <label for="gambar_museum">Gambar Museum</label>
    <input type="file" name="gambar_museum" id="gambar_museum" onchange="previewImage()">

    <!-- Elemen untuk pratinjau gambar -->
    <img id="imgPreview" class="img-preview" src="#" alt="Pratinjau Gambar">

    <!-- Peta -->
    <div id="map"></div>

    <button type="submit">Tambah</button>
</form>

<script>
    let map;
    let marker;
    let autocomplete;

    function initMap() {
        // Membuat peta di lokasi default
        map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: -6.200000, lng: 106.816666}, // Jakarta
            zoom: 13
        });

        // Autocomplete untuk input daerah museum
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById("daerah_museum"),
            { types: ['geocode'] } // hanya lokasi (geocode) yang disarankan
        );
        autocomplete.addListener("place_changed", onPlaceChanged);
    }

    function onPlaceChanged() {
        const place = autocomplete.getPlace();
        if (!place.geometry) {
            return;
        }

        // Menandai lokasi yang dipilih pada peta
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }

        if (marker) {
            marker.setMap(null);
        }

        marker = new google.maps.Marker({
            position: place.geometry.location,
            map: map
        });

        // Menyimpan alamat daerah museum
        document.getElementById("daerah_museum").value = place.formatted_address;
    }

    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(geolocation);
                map.setZoom(15);
            });
        }
    }

    function previewImage() {
        const input = document.getElementById("gambar_museum");
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

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=(masukin key gmaps api)&libraries=places&callback=initMap" async defer></script>
</body>
</html>
