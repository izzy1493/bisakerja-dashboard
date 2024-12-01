<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-blue-600 text-white py-4 shadow">
            <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
                <a href="#" class="text-2xl font-bold">BisaKerja Admin</a>
                <div>
                    <a href="#" class="mr-4 hover:underline">Daftar Pekerjaan</a>
                    <a href="#" class="hover:underline">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-6 px-4">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-blue-600 text-white py-4 mt-4 text-center">
            &copy; 2024 BisaKerja. All rights reserved.
        </footer>
    </div>
</body>
</html>
