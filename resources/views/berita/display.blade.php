<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Wayang</title>
    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-wayang.svg') }}" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
  @include('components.navbar')
    <!-- Jumbotron start -->
    <section class="bg-[url('{{ asset('assets/img/bg-hero-md.svg') }}')] bg-cover bg-center overflow-hidden">
      <div class="flex flex-col-reverse sm:flex-row">
        <div class="h-screen w-screen flex justify-center items-center flex-col">
          <h1 class="text-9xl text-center text-[#653312] font-bold tracking-wide font-[playfair]">List<br>Berita</h1>
          <form class="mt-4 flex flex-col gap-3 md:flex-row z-30" action="{{ route('berita.search') }}" method="GET">
              @csrf  
              <input class="rounded-full py-4 px-6 border-0 shadow font-[manrope] font-medium" type="text" name="search" id="keyword" size="40px" placeholder="Cari..." autocomplete="off" value="{{ request('search') }}" >
              <button type="submit" name="cari" class="py-2 px-4 bg-[#653312] rounded-full text-white hover:text-[#653312] font-[manrope] font-bold border hover:bg-white transition-colors" id="tombolcari">Search</button>
          </form>
        </div> 
        <!--wayang start-->
        <div class="flex justify-between sm:absolute w-[100%]">
          <!-- wayang kiri -->
          <div data-aos="fade-right">
            <img
              class="w-[300px] sm:w-[200px] lg:w-[300px] pt-10 sm:pt-[25rem] lg:pt-60"
              src="{{ asset('assets/img/wayang1.svg') }}"
              alt="Hero"
            />
          </div>
          <!-- wayang kanan -->
          <div data-aos="fade-left">
            <img
              class="w-[325px] sm:w-[225px] lg:w-[325px] pt-10 sm:pt-[25rem] lg:pt-60"
              src="{{ asset('assets/img/wayang2.svg') }}"
              alt=""
            />
          </div>
        </div>
        <!--wayang end-->
        <!-- Teks Tengah start -->
        
      </div>
      <!-- awan bawah -->
      <div class="w-[200%] sm:w-[100%] hidden sm:block" data-aos="fade-up" data-aos-offset="-1000"
      data-aos-anchor-placement="top-bottom">
      <img class="z-30 absolute -bottom-16 md:-bottom-32 w-full" src="{{ asset('assets/img/awanbawah.svg') }}" alt="">
      </div>
      <!-- awan bawah end -->
    </section>
    <!-- jumbotron end -->
    <!-- items start  -->
    <section class="min-h-screen max-w-screen pt-40 z-40">
        <div id="tableMuseum" class="flex flex-col justify-center gap-6 mx-40">
        @forelse ($listBerita as $berita)
          <!-- Nanti di href kasih route buat berita.show route('berita.show', ['id' => $berita->id]) -->
            <a
                href="{{ route('berita.show', $berita->id) }}"
                class="flex flex-col border-y border-black py-3"
            >   
                <h1>{{ $berita->judul_berita }}</h1>
            </a>
        @empty
            <p class="text-center text-lg">No data found</p>
        @endforelse
        </div>
    </section>
    <!-- items end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('script/navFunc.js') }}"></script>
    <script src="{{ asset('Ajax.js') }}"></script>
</body>
</html>
