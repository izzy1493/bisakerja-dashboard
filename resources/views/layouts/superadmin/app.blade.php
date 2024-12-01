<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
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
                L
            </div>
            <a href="{{ route('superadmin.dashboard') }}" class="text-xl font-semibold text-gray-800">Beranda</a>
        </div>

        <!-- Menu Tengah -->
        <div class="flex space-x-6">
            <a href="{{ route('admin.management') }}" class="text-gray-600 {{ request()->is('management-admin') ? 'font-bold text-blue-600' : '' }}">Management Admin</a>
            <a href="{{ route('activity.monitoring') }}" class="text-gray-600 {{ request()->is('monitoring-aktivitas') ? 'font-bold text-blue-600' : '' }}">Monitoring Aktivitas</a>
            <a href="{{ route('policy.management') }}" class="text-gray-600 {{ request()->is('policy-management') ? 'font-bold text-blue-600' : '' }}">Pengelola Kebijakan</a>
            <a href="{{ route('financial.monitoring') }}" class="text-gray-600 {{ request()->is('financial-monitoring') ? 'font-bold text-blue-600' : '' }}">Monitoring Keuangan</a>
        </div>

        <!-- Tombol Logout dan Icon Notifikasi Kanan -->
        <div class="flex items-center space-x-4">
            <!-- Icon Notifikasi -->
            <button class="text-gray-600 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A9.961 9.961 0 0020 12a9.96 9.96 0 00-1.405-3.595L20 7h-5m-6 0H4l1.405 1.405A9.961 9.961 0 004 12a9.96 9.96 0 001.405 3.595L4 17h5m2 0h4m-4-6h4"></path>
                </svg>
            </button>

            <!-- Tombol Logout -->
            <button class="text-gray-600 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3m10-4H3"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>
</html>
