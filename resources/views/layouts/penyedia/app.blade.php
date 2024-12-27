<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white p-4 mx-6 mt-4 mb-4 rounded-lg flex items-center justify-between shadow-md">
        <!-- Logo Kiri -->
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center font-semibold">
                7
            </div>
            <a href="dashboard" class="text-xl font-semibold text-gray-800">Beranda</a>
        </div>
        

        <!-- Menu Tengah -->
        <div class="flex space-x-6">
            <a href="{{ route('dashboard-page') }}" class="text-gray-600 {{ request()->is('management-admin') ? 'font-bold text-blue-600' : '' }}">Pasang Pekerjaan</a>
            <a href="{{ route('list-pekerjaan') }}" class="text-gray-600 {{ request()->is('list-pekerjaan') ? 'font-bold text-blue-600' : '' }}">List Pekerjaan</a>
            <a href="{{ route('list-lamaran') }}" class="text-gray-600 {{ request()->is('policy-management') ? 'font-bold text-blue-600' : '' }}">List Lamaran</a>
            
        </div>
        
        <!-- Tombol Logout dan Icon Notifikasi Kanan -->
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
    </nav>

    <!-- Konten -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>
</html>
