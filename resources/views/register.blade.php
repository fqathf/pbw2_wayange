<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayange Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-br from-beige-200 to-beige-100 min-h-screen flex flex-col justify-between">


    <header class="flex items-center justify-between py-4 px-8 bg-white">
        <div class="flex items-center flex space-x-10">
            <div>
                <img src="../assets/img/logo-wayang.svg">
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="justify-center items-center ml-2">
                <h1 class="text-3xl font-bold text-[#653312] font-['Playfair_Display_SC',_serif]">
                    WAYANGE
                </h1>
            </div>
        </div>
        <h1 class="text-2xl text-[#653312] font-['Montserrat']">
            <nav class="flex space-x-10 text-[#653312]">
                <a href="#" class="hover:text-brown-800">Beranda</a>
                <a href="#" class="hover:text-brown-800">Tentang</a>
                <a href="#" class="hover:text-brown-800">Karakter</a>
                <a href="#" class="hover:text-brown-800">Museum</a>
                <a href="#" class="hover:text-brown-800">Berita</a>
            </nav>
        </h1>
        <div class="flex items-center space-x-4">
            <button
                class="flex items-center justify-center bg-white text-[#6c3d1f] rounded-full h-20 w-20 hover:bg-gray-200 transition duration-300">
                <img src="../assets/img/search.svg" class="h-6 w-6" />
            </button>

            <body class="flex it-center justify-center h-screen bg-[#653312]">
                <p class="text-1xl text-[#FAFAFA] font-['Moanrope']">
                    <button
                        class="bg-[#6c3d1f] text-white font-semibold py-4 px-6 rounded-full hover:bg-[#5a331a] transition duration-300">Ikuti
                        Kuis Kepribadian</button>
                </p>
            </body>
        </div>
    </header>

    <div class="flex flex-col items-center justify-center flex-grow px-4 py-8">
        <img src="../assets/img/wayang1.svg" class="bg-contain bg-no-repeat bg-left absolute left-0">
        <img src="../assets/img/wayang2.svg"class="bg-contain bg-no-repeat bg-right absolute right-0">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-12 mx-auto">
            <h1 class="text-3xl font-bold text-[#141111] font-[Space Grotesk] mb-2">
                Sign In
            </h1>
            <p class="text-[#695959] mb-6">Enter Your e-mail address and password to join us.</p>
            <form action="{{ route('admin.register') }}" method="POST">
                @csrf
                <div class=" bg-contain bg-no-repeat bg-right absolute right-0">
                    <button class="bg-[(../assets/img/search.svg)]"></button>
                </div>
                <div class="mb-2">
                    <label class="font-bold block text-[#141111]">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="e.g name@gmail.com"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700"
                        required value="{{ old('email') }}" />
                </div>
                <div class="mb-2">
                    <label class="font-bold block text-[#141111]">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700"
                        required" />
                </div>
                <div class="mb-2">
                    <label class="font-bold block text-[#141111]">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700"
                        required />
                </div>
                <div class="mb-2">
                    <label class="font-bold block text-[#141111]">Role</label>
                    <select name="role" id="role"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-brown-700">
                        <option value="">Choose Role</option>
                        @foreach ($role as $r)
                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <a href="#" class="text-[#653312]">Forgot Password?</a>

                </div>
                <script src="https://cdn.tailwindcss.com"></script>

                <div class="flex items-center justify-center h-fill">
                    <button
                        class="bg-[#6c3d1f] w-full text-white font-semibold py-4 px-8 rounded-2xl hover:bg-[#5a331a] transition duration-300">Sign
                        In</button>
                </div>
                <p class="text-center text-sm text[#695959] mt-4">
                    By Signing up, you'll join our exclusive waiting list to be among the first to try prepintel and
                    provide valuabe feedback before we launch before we launch publicly</a>
                </p>
            </form>
        </div>
    </div>

    <footer class="bg-white  border-gray-200 flex items-center justify-between px-8 py-4">
        <div class="flex items-center space-x-4 ">
            <img src="../assets/img/logo-wayang.svg" class="h-8">
            <h1 class="text-3xl font-bold text-[#653312] font-['Playfair_Display_SC',_serif]">
                WAYANGE
            </h1>
            <span class="text-[#5C5C5C]">© 2023 Soller, Inc. All rights reserved.</span>
        </div>
        <div class="flex space-x-8">
            <a href="#" class="text-[#0F172A]">Terms</a>
            <a href="#" class="text-[#0F172A]">Privacy</a>
            <a href="#" class="text-[#0F172A]">Support</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
