<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis Wayang</title>
    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-wayang.svg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('components.layout.other')
    <div class="min-h-screen w-full pt-20 flex justify-center items-center">
        <div class="border max-w-sm flex flex-col justify-center items-center text-center py-6 my-6 rounded-lg">
            <h1 class="font-bold text-[32px] font-[playfair]">Hasil Kuis</h1>
            <div class="w-[300px] h-[400px] rounded-lg bg-cover bg-center" 
                style="background-image: url('{{ asset('admin/GambarWayang/' . $characterImage) }}')">
            </div>
            <p class="text-[64px] font-bold font-[playfair]">{{ $character }}</p>
            <p class="font-manrope">Wayang yang sesuai dengan kepribadianmu adalah {{ $character }}. Mulai dari cara kamu mempelajari sesuatu, memikirkan sesuatu, sesuai dengan karakteristik {{ $character }}.</p>
            <br>
            <div>
                <a href="{{ route('quiz.list') }}" class="rounded-lg font-[manrope] font-bold py-2 px-3 bg-[#653312] text-white hover:opacity-90 transition-opacity">Ulangi</a>
                <a href="{{ $characterLink }}" class="rounded-lg font-[manrope] font-bold py-2 px-3 text-[#653312] border border-[#653312] hover:opacity-90 transition-opacity">Pelajari Wayang</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('script/navFunc.js') }}"></script>
</body>
</html>
