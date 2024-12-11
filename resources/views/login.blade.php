<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayange Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-br from-beige-200 to-beige-100 min-h-screen flex flex-col justify-between">

    
@include('components.navbar')

    <div class="flex flex-col items-center bg-[url('../assets/img/bg-hero-md.svg')] justify-center flex-grow px-4 py-8">
        <img src="../assets/img/wayang1.svg" class="bg-contain bg-no-repeat bg-left absolute left-0">
        <img src="../assets/img/wayang2.svg" class="bg-contain bg-no-repeat bg-right absolute right-0">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-12 mx-auto">
            <h1 
                class="text-3xl font-bold text-left text-[#141111] font-[Space Grotesk] mb-6">Login
            </h1>
            <p class="text-left block text-[#695959] mb-6">Enter Your e-mail address and password to join us.</p>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="font-bold block text-[#141111]">E-mail</label>
                    <input type="email" name="email" id="email" required placeholder="e.g name@gmail.com" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700" />
                </div>
                <div class="mb-4">
                    <label class="font-bold block text-[#141111]">Password</label>
                    <input type="password" name="password" id="password" required placeholder="••••••••" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700" />
                </div>
                <div class="mb-4">
                    <a href="#" class="text-[#653312]">Forgot Password?</a>
                </div>
                <script src="https://cdn.tailwindcss.com"></script>

                <div class="flex items-center justify-center h-fill">
                    <button class="bg-[#6c3d1f] w-full text-white font-semibold py-4 px-8 rounded-2xl hover:bg-[#5a331a] transition duration-300">Login Sekarang</button>
                </div>
                <p class="text-center text-sm text[#695959] mt-4">
                    Belum Punya Akun? <a href="#" class="font-bold text-[#695959] hover:underline">Daftar Sekarang</a>
                </p>
            </form>
        </div>
    </div>

    <div class="relative bg-white">
    <footer class="bg-white py-6 border-t border-gray-200 flex items-center justify-between px-8">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-4">
                    <img src="../assets/img/logo-wayang.svg" class="h-8">
                    <h1
                        class="text-3xl font-bold text-[#653312] font-['Playfair_Display_SC',_serif]">
                        WAYANGE
                    </h1>
                </div>
                <span class="text-[#5C5C5C]">© 2023 Soller, Inc. All rights reserved.</span>
                <div class="flex space-x-8">
                    <a href="#" class="text-[#0F172A] hover:underline">Terms</a>
                    <a href="#" class="text-[#0F172A] hover:underline">Privacy</a>
                    <a href="#" class="text-[#0F172A] hover:underline">Support</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="absolute left-0 right-0 bottom-0 z-0">
        <img src="../assets/img/awanbawah.svg" alt="Awan" class="w-full object-cover">
    </div> -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>