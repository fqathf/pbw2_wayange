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
        <div
          data-aos="zoom-in"
          class="mx-auto max-w-screen-xl pt-32 sm:pt-32 z-10 sm:flex sm:h-screen sm:items-start"
        >
          <div
            class="mx-auto max-w-[36rem] text-center flex flex-col justify-center items-center"
          >
            <h1
              class="text-2xl px-6 text-[#653312] font-bold tracking-wide md:min-w-[745px] md:text-5xl sm:tracking-wide sm:leading-[91px] font-[playfair]"
            >
              Temukan Museum <br> Wayang Disini
            </h1>

            <p
              class="mt-4 px-6 text-[#785E4D] md:min-w-[600px] sm:text-lg md:text-xl/relaxed font-medium leading-[30px] font-[manrope]"
            >
                Masukkan nama museum yang ingin kamu cari
            </p>

            <form class="mt-4 flex flex-col gap-3 md:flex-row" action="{{ route('museum.search') }}" method="GET">
                <input class="rounded-full py-4 px-6 border-0 shadow font-[manrope] font-medium" type="text" name="keyword" id="keyword" size="40px" placeholder="Masukan Nama Museum" autocomplete="off">
                <button type="submit" name="cari" class="py-2 px-4 bg-[#653312] rounded-full text-white hover:text-[#653312] font-[manrope] font-bold border hover:bg-white transition-colors" id="tombolcari">Search</button>
            </form>

          </div>
        </div>
        <!-- Teks Tengah end -->
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
    <section class="min-h-screen max-w-screen pt-40">
        <div id="tableMuseum" class="flex flex-row flex-wrap justify-center gap-6">
        @forelse ($museums as $museum)
            <a
                href="{{ route('museum.show', $museum->id) }}"
                class="rounded flex items-end p-3 mb-3 bg-cover bg-[url('{{ asset('admin/GambarMuseum/' . $museum->gambar_museum) }}')] w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
            >   
                <div class="bg-white flex flex-col opacity-70 py-3 px-6">
                  <p class="inline-flex justify-start items-center gap-2 text-zinc-600 text-sm font-medium font-[poppins]">{{ $museum->id }} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="2" viewBox="0 0 24 2" fill="none">
                    <path d="M0.772461 0.821289H23.9391" stroke="#616161" stroke-width="0.858025"/>
                  </svg> {{ $museum->daerah_museum }}</p>
                  <p class="text-2xl font-semibold font-[poppins] leading-7">{{ $museum->nama_museum }}</p>
                </div>
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
