<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobBoard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CSS (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-semibold">JobBoard</a>
            <div class="flex space-x-4">
                <a href="/" class="px-4 py-2 hover:bg-blue-700 rounded-md">Home</a>
                <a href="#" class="px-4 py-2 hover:bg-blue-700 rounded-md">Post Job</a>
                <a href="#" class="px-4 py-2 hover:bg-blue-700 rounded-md">My Jobs</a>
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
<aside class="bg-gray-800 text-white w-72 min-h-screen p-6">
    <h2 class="text-xl font-semibold mb-6">Filter Pekerjaan</h2>
    <ul>
        <li>
            <a href="{{ url('/jobs?category=Design') }}" class="block py-2 hover:bg-gray-700 rounded-lg">Design</a>
        </li>
        <li>
            <a href="{{ url('/jobs?category=Writing') }}" class="block py-2 hover:bg-gray-700 rounded-lg">Writing</a>
        </li>
        <li>
            <a href="{{ url('/jobs?category=Development') }}" class="block py-2 hover:bg-gray-700 rounded-lg">Development</a>
        </li>
        <li>
            <a href="{{ url('/jobs?category=Marketing') }}" class="block py-2 hover:bg-gray-700 rounded-lg">Marketing</a>
        </li>
        <li>
            <a href="{{ url('/jobs?category=Translation') }}" class="block py-2 hover:bg-gray-700 rounded-lg">Translation</a>
        </li>
    </ul>
</aside>


        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            @yield('content') <!-- Content area where child views will be inserted -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 JobBoard. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
