<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang Pekerjaan - Mitra Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-semibold text-blue-600">JobConnect</a>
            <div class="space-x-6">
                <a href="#about" class="text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="#steps" class="text-gray-700 hover:text-blue-600">Cara Kerja</a>
                <a href="#join" class="text-white bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700">Gabung Mitra</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">Pasang Pekerjaan dengan Mudah</h1>
            <p class="text-lg mb-6">Temukan mitra terbaik untuk pekerjaan Anda. Proses cepat, mudah, dan terpercaya.</p>
            <a href="#join" class="bg-white text-blue-600 px-6 py-3 rounded-lg text-xl hover:bg-gray-200">Bergabung Sebagai Mitra</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800">Kenapa Pasang Pekerjaan di Kami?</h2>
            <p class="text-gray-600 text-lg mb-8">Platform kami memungkinkan Anda menemukan mitra yang tepat dengan keahlian yang dibutuhkan untuk menyelesaikan pekerjaan Anda. Kami memberikan proses yang cepat dan aman, mulai dari pengajuan hingga penyelesaian pekerjaan.</p>
            <div class="flex justify-center space-x-8">
                <div class="flex flex-col items-center">
                    <div class="h-16 w-16 rounded-full bg-blue-500 text-white flex items-center justify-center mb-4">
                        <i class="fa fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold">Proses Cepat</h3>
                    <p class="text-gray-600 text-sm">Buat pengajuan pekerjaan dalam beberapa menit dan dapatkan hasilnya dalam waktu singkat.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-16 w-16 rounded-full bg-indigo-600 text-white flex items-center justify-center mb-4">
                        <i class="fa fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold">Keamanan Terjamin</h3>
                    <p class="text-gray-600 text-sm">Setiap transaksi pekerjaan kami jamin aman dan terpercaya, sehingga Anda tidak perlu khawatir.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-16 w-16 rounded-full bg-green-500 text-white flex items-center justify-center mb-4">
                        <i class="fa fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold">Mitra Terbaik</h3>
                    <p class="text-gray-600 text-sm">Kami memiliki jaringan mitra terbaik yang siap membantu menyelesaikan pekerjaan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="steps" class="bg-gray-100 py-16 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Cara Kerja Kami</h2>
            <div class="space-y-8">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-x-8 md:space-y-0">
                    <div class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center mb-4 md:mb-0">
                        <span class="text-xl">1</span>
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Daftarkan Pekerjaan</h3>
                        <p class="text-gray-600">Isi form pekerjaan dengan detail yang jelas untuk mendapatkan penawaran terbaik dari mitra kami.</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-x-8 md:space-y-0">
                    <div class="w-16 h-16 rounded-full bg-indigo-600 text-white flex items-center justify-center mb-4 md:mb-0">
                        <span class="text-xl">2</span>
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Pilih Mitra</h3>
                        <p class="text-gray-600">Pilih mitra terbaik berdasarkan keahlian dan pengalaman untuk mengerjakan proyek Anda.</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-x-8 md:space-y-0">
                    <div class="w-16 h-16 rounded-full bg-green-600 text-white flex items-center justify-center mb-4 md:mb-0">
                        <span class="text-xl">3</span>
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Pekerjaan Selesai</h3>
                        <p class="text-gray-600">Setelah pekerjaan selesai, Anda dapat memberikan penilaian dan feedback kepada mitra kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Section -->
    <section id="join" class="bg-blue-600 text-white py-16 text-center">
        <div class="max-w-2xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Gabung Sebagai Mitra Kami</h2>
            <p class="text-lg mb-6">Bergabung dengan kami dan temukan peluang bisnis yang menguntungkan. Buka kesempatan bagi diri Anda untuk mendapatkan proyek yang sesuai dengan keahlian Anda!</p>
            <a href="https://link-registrasi.com" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-xl hover:bg-gray-200">Daftar Sekarang</a>
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
