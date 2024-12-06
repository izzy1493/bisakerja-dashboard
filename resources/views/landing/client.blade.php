<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang Pekerjaan - Mitra Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
    <style>
        /* Transisi halus antar section */
        section {
            transition: transform 0.3s ease-in-out;
        }

        section:hover {
            transform: translateY(-5px);
        }

        /* Efek gambar saat hover */
        .hover-zoom:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-white font-sans leading-relaxed text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed top-0 left-0 w-full z-10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-semibold text-blue-600">JobConnect</a>
            <div class="space-x-6">
                <a href="#about" class="text-gray-700 hover:text-blue-600 transition duration-200">Tentang</a>
                <a href="#steps" class="text-gray-700 hover:text-blue-600 transition duration-200">Cara Kerja</a>
                <a href="#join" class="font-semibold text-blue-600 bg-white px-3 py-3 rounded-lg transition duration-200">Cari Kerja</a>
                <a href="#join" class="text-white bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200">Gabung Mitra</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-600 to-indigo-800 text-white py-24 md:py-40 px-6">
        <div class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center space-y-8 md:space-y-0">
            <div class="md:w-1/2 space-y-6">
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight sm:text-5xl">Pasang Pekerjaan dengan Mudah dan Cepat</h1>
                <p class="text-lg md:text-xl">Temukan mitra terbaik untuk pekerjaan Anda. Proses cepat, aman, dan terpercaya. Proyek Anda akan selesai dengan hasil terbaik.</p>
                <a href="#join" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg text-lg md:text-xl hover:bg-gray-100 transition duration-300">Bergabung Sebagai Mitra</a>
            </div>
            <div class="md:w-1/2 w-full">
                <img src="https://via.placeholder.com/600x400" alt="Gambar Hero" class="rounded-lg shadow-lg hover-zoom transition-transform duration-300">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6 md:px-0 bg-gray-100 text-center">
        <div class="max-w-7xl mx-auto space-y-12">
            <h2 class="text-3xl font-semibold text-gray-800">Kenapa Pasang Pekerjaan di Kami?</h2>
            <p class="text-lg text-gray-600">Kami menyediakan platform yang aman, transparan, dan efektif untuk memudahkan Anda menemukan mitra yang tepat. Bekerja dengan profesional terpercaya dan dapatkan hasil terbaik.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-blue-600 text-white rounded-full flex items-center justify-center">
                        <i class="fa fa-clock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Proses Cepat</h3>
                    <p class="text-gray-600">Pasang pekerjaan hanya dalam beberapa menit dan dapatkan solusi cepat dari mitra kami.</p>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-indigo-600 text-white rounded-full flex items-center justify-center">
                        <i class="fa fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Kami menjaga keamanan data Anda, memastikan bahwa setiap pekerjaan diselesaikan dengan aman.</p>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center">
                        <i class="fa fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Mitra Terbaik</h3>
                    <p class="text-gray-600">Kami hanya bekerja dengan mitra terbaik yang memiliki pengalaman dan keahlian di bidangnya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="steps" class="py-20 px-6 bg-white text-center">
        <div class="max-w-7xl mx-auto space-y-12">
            <h2 class="text-3xl font-semibold text-gray-800">Cara Kerja Kami</h2>
            <p class="text-lg text-gray-600">Proses kami mudah dan langsung. Ikuti tiga langkah simpel untuk memulai pekerjaan Anda.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-blue-600 text-white rounded-full flex items-center justify-center">
                        <span class="text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold">Daftarkan Pekerjaan</h3>
                    <p class="text-gray-600">Isi form pekerjaan Anda, beri deskripsi yang jelas agar mitra dapat memberikan penawaran terbaik.</p>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-indigo-600 text-white rounded-full flex items-center justify-center">
                        <span class="text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold">Pilih Mitra</h3>
                    <p class="text-gray-600">Pilih mitra dengan keahlian yang sesuai dan tawarkan proyek Anda kepada mereka.</p>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center">
                        <span class="text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold">Selesaikan Proyek</h3>
                    <p class="text-gray-600">Setelah proyek selesai, Anda dapat memberikan penilaian dan feedback untuk mitra kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Section -->
    <section id="join" class="bg-blue-600 text-white py-16 text-center">
        <div class="max-w-2xl mx-auto px-6 space-y-6">
            <h2 class="text-3xl font-semibold">Gabung Sebagai Mitra Kami</h2>
            <p class="text-lg">Kami membuka peluang bagi Anda untuk bergabung dengan platform kami dan mendapatkan proyek yang sesuai dengan keahlian Anda. Mulailah hari ini!</p>
            <a href="https://link-registrasi.com" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg text-xl hover:bg-gray-200 transition duration-300">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2024 JobConnect. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
