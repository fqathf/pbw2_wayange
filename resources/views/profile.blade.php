<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayange Login</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link
      rel="shortcut icon"
      href="assets/img/logo-wayang.svg"
      type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-br from-beige-200 to-beige-100 min-h-screen font-inter">

    
@include('components.navbar')

    <div class="pt-20"></div>
    <section class="mt-10 mx-20 border rounded-lg ">
        <div class="h-32 bg-[#ffefd8]">

        </div> 
        <div class="mx-8">
            <div>
                <img class="bg-black h-20 w-20 rounded-full -mt-10" src="" alt="">
                <h1 class="text-2xl font-bold mt-5">{{Auth::user()->username}}</h1>
                <p></p>
            </div>
            <div>
                <button>Edit Profil</button>
            </div>
        </div>
    </section>

    <section class="min-h-screen max-w-screen pt-20">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">History Kunjungan Wayang</h1>
        
        @if($historyWayang->isEmpty())
            <p class="text-center text-gray-500">Belum ada history yang tersimpan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($historyWayang as $history)
                    <div class="rounded overflow-hidden shadow-lg bg-white">
                        <img 
                            class="w-full h-40 object-cover"
                            src="{{ asset('storage/' . $history->wayang->gambar_wayang) }}" 
                            alt="{{ $history->wayang->nama_wayang }}"
                        >
                        <div class="px-6 py-4">
                            <h2 class="font-bold text-xl mb-2">{{ $history->wayang->nama_wayang }}</h2>
                            <p class="text-gray-700 text-sm">Kategori: {{ $history->wayang->kategori->nama_kategori }}</p>
                            <p class="text-gray-500 text-xs mt-2">Dikunjungi pada: {{ $history->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

    <section>
        <div>
            <h1>Histori</h1>
            <p>Lorem</p>
        </div>
        <div>
            banyak histori
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>