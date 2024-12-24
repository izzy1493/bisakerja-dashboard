<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white p-6 mx-6 mt-4 mb-6 rounded-lg flex items-center justify-between shadow-lg max-w-full">
        <!-- Logo Kiri -->
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold text-xl">
                L
            </div>
            <a href="dashboard-page" class="text-xl font-semibold text-gray-800">Beranda</a>
        </div>
        

        <!-- Menu Tengah -->
        <div class="flex space-x-12">
            <a href="{{ route('admin.management') }}" class="text-gray-600 hover:text-blue-600 transition-all {{ request()->is('management-admin') ? 'font-bold text-blue-600' : '' }}">Management Admin</a>
            <a href="{{ route('activity.monitoring') }}" class="text-gray-600 hover:text-blue-600 transition-all {{ request()->is('monitoring-aktivitas') ? 'font-bold text-blue-600' : '' }}">Monitoring Aktivitas</a>
            <a href="{{ route('policy.management') }}" class="text-gray-600 hover:text-blue-600 transition-all {{ request()->is('policy-management') ? 'font-bold text-blue-600' : '' }}">Pengelola Kebijakan</a>
            <a href="{{ route('financial.monitoring') }}" class="text-gray-600 hover:text-blue-600 transition-all {{ request()->is('financial-monitoring') ? 'font-bold text-blue-600' : '' }}">Monitoring Keuangan</a>
        </div>
        
        <!-- Tombol Logout dan Icon Notifikasi Kanan -->
        <div class="flex items-center space-x-6">
            <!-- Icon Notifikasi -->

            <button class="relative text-gray-600 hover:text-blue-500 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A9.961 9.961 0 0020 12a9.96 9.96 0 00-1.405-3.595L20 7h-5m-6 0H4l1.405 1.405A9.961 9.961 0 004 12a9.96 9.96 0 001.405 3.595L4 17h5m2 0h4m-4-6h4"></path>
                </svg>
                <span class="absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">3</span>
           
        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" class="flex items-center">
            @csrf
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all">
                Logout
            </button>
        </form>

            <!-- Dropdown User -->
            <div class="relative">
                <button class="flex items-center text-gray-600 hover:text-blue-500 transition-all">
                    <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300" alt="User Avatar">
                    <span class="ml-2 text-lg">John Doe</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute right-0 w-48 mt-2 bg-white shadow-lg rounded-md py-2 z-10 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mx-auto mt-8 px-6">
        @yield('content')
    </div>

</body>
</html>
    