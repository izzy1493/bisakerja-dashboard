<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
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
</body>
</html>
