<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    @include('components.sidebar')
    <h3>Daftar Wayang</h3>
    <a href="{{ route('admin.wayang.create') }}" type="button">Tambah Wayang</a>

    <form action="{{ route('admin.wayang.search') }}" method="GET" style="margin-bottom: 15px;">
        <input type="text" name="search" placeholder="Cari Wayang..." value="{{ request('search') }}"
            style="padding: 8px; font-size: 16px; width: 200px;">
        <button type="submit"
            style="padding: 8px 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Cari
        </button>
    </form>

    <form id="filterForm" action="{{ route('admin.wayang.filter') }}" method="GET">
        <select name="kategori" id="kategoriSelect" onchange="document.getElementById('filterForm').submit()">
            <option value="0" {{ request('kategori') == 0 ? 'selected' : '' }}>Pilih Kategori</option>
            @foreach ($listKategori as $kategori)
                <option value="{{ $kategori->id_k }}" {{ request('kategori') == $kategori->id_k ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
    </form>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listWayang as $w)
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $w->nama_wayang }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $w->judul_wayang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($w->isi_wayang, 50) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $w->kategori->nama_kategori }}
                        </td>
                        <td class="px-6 py-4 max-w-20">
                            @if ($w->gambar_wayang)
                                <img src="{{ asset('storage/' . $w->gambar_wayang) }}" alt="Gambar Wayang">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.wayang.edit', $w->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.wayang.destroy', $w->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
