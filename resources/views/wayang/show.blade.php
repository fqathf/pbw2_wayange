<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-wayang.svg') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Wayang {{ $wayang->nama_wayang }}</title>
</head>

<body>
    <!-- navbar start -->
    @include('components.navbar')

    <!-- Jumbotron start -->
    <section class="w-full m-0 p-0 h-full">
        <div class="w-full h-96">
            <div class="absolute w-full h-96 bg-[url('{{ asset('admin/GambarWayang/' . $wayang->gambar_wayang) }}')] brightness-50 bg-cover bg-center"></div>
            <div class="flex flex-row justify-between">
                <div class="flex justify-start p-4 h-96 relative items-center">
                    <div class="absolute bottom-0 pl-4 w-[300px] sm:w-[500px]">
                        <p class="text-[#ffffff] text-[40px] sm:text-[64px] font-bold leading-[96px] tracking-[-2px]">
                            {{ $wayang->nama_wayang }}
                        </p>
                        <p class="text-[#ffffff] text-[20px] sm:text-[32px] font-normal leading-[48px] tracking-[-1px]">
                            {{ $wayang->kategori->nama_kategori }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jumbotron end -->

    <!-- Information start -->
    <section class="mt-[23px] lg:mt-40 xl:mt-[23px] pb-10">
        <div class="m-10 flex items-center flex-col">
            <div>
                <div class="w-full max-w-[1257px]">
                    <p class="text-[#000000] text-[24px] md:text-[48px] font-bold tracking-[-1px]">
                        {{ $wayang->judul_wayang }}
                    </p>
                </div>
            </div>
            <div class="mt-5 max-w-screen-sm">
                <p class="text-[#4d4d4d] text-[20px] leading-[30px]">
                    {{ $wayang->isi_wayang }}
                </p>
            </div>
        </div>
    </section>
    <!-- Information end -->

    <!-- Footer start -->
    <footer>
        <div class="h-auto mt-[10rem] pb-10 sm:pb-0 sm:mt-10">
            <div class="flex justify-between md:flex-row flex-col">
                <div class="px-[62px] py-4 flex flex-row justify-center">
                    <div>
                        <img src="{{ asset('assets/img/logo-wayang.svg') }}" class="h-[60px] md:h-[50px]" alt="">
                    </div>
                    <div class="ml-2">
                        <h1 class="text-[#653312] text-[24px] font-bold">Wayange</h1>
                    </div>
                    <div class="px-4">
                        <p class="text-[#5c5c5c] text-[16px] font-normal leading-[22px]">
                            @ 2023 MabaOP, Inc. All rights reserved
                        </p>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="flex flex-row gap-10 px-[62px] text-lg">
                        <p>Terms</p>
                        <p>Privacy</p>
                        <p>Support</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000 });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="{{ asset('script/navFunc.js') }}"></script>
</body>

</html>
