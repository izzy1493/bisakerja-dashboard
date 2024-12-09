<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Card</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Flowbite CDN -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>

    
</head>
<body>
    @yield('content')
=======
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang Pekerjaan - Mitra Kami</title>
</head>
<body class="bg-gray-100 font-sans leading-relaxed text-gray-900">

    <!-- Memanggil partials.navbar -->
    @include('partials.navbar')

    @yield('content')

    <!-- Memanggil partials.footer -->
    @include('partials.footer')

>>>>>>> Stashed changes
</body>
</html>
