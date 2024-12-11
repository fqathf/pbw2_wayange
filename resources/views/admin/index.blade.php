<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-wayang.svg') }}" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
<nav
      id="navbar"
      class="bg-white sm:bg-white border-gray-200 w-[100%] fixed z-40"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <a href="{{ route('landing') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img
            src="{{ asset('assets/img/logo-wayang.svg') }}"
            class="h-16"
            alt="Wayange Logo"
          />
          <span
            class="self-center text-2xl font-semibold whitespace-nowrap font-[playfair] text-yellow-900"
            ><span class="text-3xl">W</span>AYANGE</span
          >
        </a>
        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            {{ Auth::user()->username }}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
            <li>
                <a href="{{ route('admin.logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="pt-20"></div>
    <div class="mx-20 mt-10 rounded-lg flex flex-col bg-[#E5D4C8] p-3">
        <p>Data yang telah ditambahkan</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-3  justify-between">
            <div class="bg-white p-8 rounded-lg">
                <div class="gap-3 flex flex-col">
                    <h1 class="text-5xl font-bold">{{ $wayangCount }}</h1>
                    <p class="text-lg">Wayang</p>
                </div>
                <img src="" alt="">
            </div>
            <div class="bg-white p-8 rounded-lg">
                <div class="gap-3 flex flex-col">
                    <h1 class="text-5xl font-bold">{{ $museumCount }}</h1>
                    <p class="text-lg">Museum</p>
                </div>
                <img src="" alt="">
            </div>
            <div class="bg-white p-8 rounded-lg">
                <div class="gap-3 flex flex-col">
                    <h1 class="text-5xl font-bold">{{ $beritaCount }}</h1>
                    <p class="text-lg">Berita</p>
                </div>
                <img src="" alt="">
            </div>
        </div>
    </div>
    <div class="border flex flex-col mx-20 gap-4 mt-3 p-3">
        <p>Quick Action</p>
        <div class="grid grid-cols-4 gap-4">
            <a href="{{ route('admin.wayang.index') }}" class="bg-[#ffefd8] flex flex-row rounded-lg p-3">
                <img src="" alt="">
                <p>Tambah Wayang</p>
            </a>
            <a href="{{ route('admin.museum.index') }}" class="bg-[#ffefd8] flex flex-row rounded-lg p-3">
                <img src="" alt="">
                <p>Tambah Museum</p>
            </a>
            <a href="{{ route('admin.berita.index') }}" class="bg-[#ffefd8] flex flex-row rounded-lg p-3">
                <img src="" alt="">
                <p>Tambah Berita</p>
            </a>
            <a href="{{ route('admin.register') }}" class="bg-[#ffefd8] flex flex-row rounded-lg p-3">
                <img src="" alt="">
                <p>Tambah Member</p>
            </a>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>