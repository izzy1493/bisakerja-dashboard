<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder</title>
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk Ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
   <!-- Navbar -->
<nav class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 fixed w-full top-0 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-3xl font-extrabold text-white hover:text-gray-100 transition duration-300">
            JobFinder
        </a>

        <!-- Navbar Links untuk Desktop -->
        <div class="hidden lg:flex items-center space-x-8">
            <!-- Tautan Kategori -->
            <a href="{{ url('/jobs?category=Design') }}" class="text-white hover:text-gray-200 transition duration-300 hover:underline">Design</a>
            <a href="{{ url('/jobs?category=Writing') }}" class="text-white hover:text-gray-200 transition duration-300 hover:underline">Writing</a>
            <a href="{{ url('/jobs?category=Development') }}" class="text-white hover:text-gray-200 transition duration-300 hover:underline">Development</a>
            <a href="{{ url('/jobs?category=Marketing') }}" class="text-white hover:text-gray-200 transition duration-300 hover:underline">Marketing</a>
            <a href="{{ url('/jobs?category=Translation') }}" class="text-white hover:text-gray-200 transition duration-300 hover:underline">Translation</a>

            <!-- Dropdown untuk Opsi Lain -->
            <div class="relative">
                <button class="text-white hover:text-gray-200 transition duration-300 focus:outline-none">
                    <i class="fas fa-ellipsis-h"></i> <!-- Ikon tiga titik -->
                </button>
                <div class="absolute hidden mt-2 bg-white text-gray-700 shadow-xl rounded-lg w-48 group-hover:block transition-opacity duration-300">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tentang Kami</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
                </div>
            </div>
        </div>

        <!-- Ikon Hamburger untuk Mobile (disembunyikan pada layar besar) -->
        <div class="lg:hidden flex items-center">
            <button id="burger-menu" class="text-white">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Menu Mobile (disembunyikan secara default) -->
<div id="mobile-menu" class="lg:hidden hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-75 z-50">
    <div class="flex flex-col items-center justify-center space-y-6 mt-24">
        <a href="{{ url('/jobs?category=Design') }}" class="text-white text-xl hover:text-gray-200 transition duration-300 hover:underline">Design</a>
        <a href="{{ url('/jobs?category=Writing') }}" class="text-white text-xl hover:text-gray-200 transition duration-300 hover:underline">Writing</a>
        <a href="{{ url('/jobs?category=Development') }}" class="text-white text-xl hover:text-gray-200 transition duration-300 hover:underline">Development</a>
        <a href="{{ url('/jobs?category=Marketing') }}" class="text-white text-xl hover:text-gray-200 transition duration-300 hover:underline">Marketing</a>
        <a href="{{ url('/jobs?category=Translation') }}" class="text-white text-xl hover:text-gray-200 transition duration-300 hover:underline">Translation</a>
        <button id="close-menu" class="text-white mt-6">
            <i class="fas fa-times text-3xl"></i>
        </button>
    </div>
</div>

<!-- Script untuk Mengubah Status Menu -->
<script>
    // Toggle menu mobile ketika tombol burger diklik
    document.getElementById('burger-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Menutup menu mobile ketika tombol X diklik
    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
</script>


                <!-- Ikon Pencarian -->
                <div class="relative">
                    <input type="text" class="hidden md:block px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Cari pekerjaan..." />
                    <button class="md:hidden text-white">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="pt-24">
        @yield('content') <!-- Konten halaman lain akan dimuat di sini -->
    </main>

</body>
</html>
