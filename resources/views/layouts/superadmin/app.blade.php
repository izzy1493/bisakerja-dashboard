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
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="text-white text-lg font-semibold">Beranda</a>
            <div class="flex space-x-4">
                <a href="{{ route('admin.management') }}" class="text-white">Management Admin</a>
                <a href="{{ route('activity.monitoring') }}" class="text-white">Monitoring Aktivitas</a>
                <a href="{{ route('policy.management') }}" class="text-white">Pengelola Kebijakan</a>
                <a href="{{ route('financial.monitoring') }}" class="text-white">Monitoring Keuangan</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>
</html>
