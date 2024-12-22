<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Navbar -->
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-gray-800 text-white p-6">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <ul>
                <li><a href="{{ route('admin.jobs.index') }}" class="block py-2 px-4 text-lg">Moderasi Pekerjaan</a></li>
                <li><a href="{{ route('admin.verifications.index') }}" class="block py-2 px-4 text-lg">Verifikasi Pengguna</a></li>
                <li><a href="{{ route('admin.reports.index') }}" class="block py-2 px-4 text-lg">Penanganan Laporan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="container mx-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
