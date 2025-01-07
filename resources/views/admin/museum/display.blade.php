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
        <h1>List Berita</h1>
        <a href="{{ route('admin.berita.create') }}">Tambah Berita</a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Daerah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
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
                    @foreach ($listMuseum as $museum)
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $museum->nama_museum }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $museum->daerah_museum }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $museum->judul_museum }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($museum->isi_museum, 50) }}
                        </td>
                        <td class="px-6 py-4 max-w-20">
                            @if ($museum->gambar_museum)
                                <img src="{{ asset('storage/' . $museum->gambar_museum) }}" alt="Gambar Berita">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.museum.edit', $museum->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.museum.destroy', $museum->id) }}" method="POST" style="display:inline;">
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
