<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JobConnect')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body class="bg-gray-50 font-sans leading-relaxed text-gray-900">
    
    @include('partials.navbar')  <!-- Menyertakan navbar -->

    <!-- Konten utama halaman -->
    <main>
        @yield('content')  <!-- Tempat konten halaman dinamis -->
    </main>

    @include('partials.footer')  <!-- Menyertakan footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const avatarButton = document.getElementById('avatarButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Toggle dropdown menu saat avatar diklik
        avatarButton.addEventListener('click', function () {
            dropdownMenu.classList.toggle('hidden');
        });

        // Tutup dropdown saat klik di luar menu
        document.addEventListener('click', function (event) {
            if (!avatarButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    });
</script>



</body>

</html>
