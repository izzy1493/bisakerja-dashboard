<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penyedia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-black text-white h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 mx-6 mt-4 mb-4 rounded-lg flex items-center justify-between shadow-md flex-wrap">
        <!-- Logo Kiri -->
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-semibold">
                7
            </div>
            <a href="dashboard" class="text-xl font-semibold text-green-400 hover:text-green-300 transition duration-200">Beranda</a>
        </div>
    
        <!-- Menu Tengah -->
        <div class="flex space-x-6 mt-2 md:mt-0">
            <a href="{{ route('pasang-pekerjaan') }}" class="relative text-gray-300 hover:text-green-400 transition duration-200 {{ request()->is('pasang-pekerjaan') ? 'font-bold text-green-400' : '' }}">
                Pasang Pekerjaan
                @if(request()->is('pasang-pekerjaan'))
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-green-400 rounded"></span>
                @endif
            </a>
            <a href="{{ route('list-pekerjaan') }}" class="relative text-gray-300 hover:text-green-400 transition duration-200 {{ request()->is('list-pekerjaan') ? 'font-bold text-green-400' : '' }}">
                List Pekerjaan
                @if(request()->is('list-pekerjaan'))
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-green-400 rounded"></span>
                @endif
            </a>
            <a href="{{ route('list-lamaran') }}" class="relative text-gray-300 hover:text-green-400 transition duration-200 {{ request()->is('list-lamaran') ? 'font-bold text-green-400' : '' }}">
                List Lamaran
                @if(request()->is('list-lamaran'))
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-green-400 rounded"></span>
                @endif
            </a>
        </div>
    
        <!-- Tombol Logout dan Icon Notifikasi Kanan -->
        <div class="flex items-center space-x-4 mt-2 md:mt-0">
            <!-- Icon Notifikasi -->
            <div class="relative">
                <button class="text-gray-300 hover:text-green-400 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                </button>
            </div>
    
            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all duration-200">
                    Logout
                </button>
            </form>
        </div>
    </nav ```blade
    <!-- Konten -->
    <div class="flex-grow flex items-center justify-center">
        <div class="w-full p-4">
            @yield('content')
        </div>
    </div>

</body>
</html>