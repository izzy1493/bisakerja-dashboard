<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JobConnect')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-50 font-sans leading-relaxed text-gray-900">
    @include('partials.navbar')  <!-- Menyertakan navbar -->

    <!-- Konten utama halaman -->
    <main>
        @yield('content')  <!-- Tempat konten halaman dinamis -->
    </main>

    @include('partials.footer')  <!-- Menyertakan footer -->
</body>

</html>
