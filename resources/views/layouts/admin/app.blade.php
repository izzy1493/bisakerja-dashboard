<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- CDN untuk TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN untuk Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.7.1/dist/flowbite.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-600 via-blue-500 to-blue-400 p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo atau Link Dashboard -->
            <a href="{{ route('dashboard-page') }}" class="text-white text-2xl font-bold hover:text-gray-100 transition duration-300 transform hover:scale-105">
                Dashboard
            </a>
            
            <!-- Menu Links -->
            <div class="flex justify-center space-x-6">
                <a href="{{ route('admin.jobs') }}" class="text-white hover:text-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                    Job Moderation
                </a>
                <a href="{{ route('admin.users') }}" class="text-white hover:text-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                    Verifikasi Pengguna
                </a>
                <a href="{{ route('admin.reports') }}" class="text-white hover:text-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                    Laporan
                </a>
                <a href="{{ route('admin.payments') }}" class="text-white hover:text-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                    Validasi Pembayaran
                </a>
                <a href="{{ route('admin.operations') }}" class="text-white hover:text-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                    Pengelolaan Data
                </a>
            </div>
            <div class="flex items-center space-x-4">
            <!-- Icon Notifikasi -->
           
        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" class="flex items-center">
            @csrf
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all">
                Logout
            </button>
        </form>

        </div>
        </div>
        
    </nav>

    <!-- Konten utama -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>
