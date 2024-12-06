<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder</title>
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Hero Section -->
    <section class="flex items-center justify-between py-24 px-6 bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center">
            <!-- Teks Kiri -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Temukan Pekerjaan Impian Anda</h1>
                <p class="text-lg mb-6">Bergabunglah dengan ribuan orang yang telah menemukan pekerjaan yang sesuai dengan keterampilan dan minat mereka. Mulai perjalanan karier Anda dengan langkah yang tepat!</p>
                <a href="register.html" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-3 rounded-full text-xl font-semibold transition duration-300">Daftar Sekarang</a>
            </div>

            <!-- Gambar Kanan -->
            <div class="w-full md:w-1/2 mt-8 md:mt-0">
                <img src="https://via.placeholder.com/600x400" alt="Pekerjaan" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Daftar Pekerjaan -->
    <section id="job-list" class="py-16 px-6 bg-white">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-900 mb-8">Pekerjaan Terbaru</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Job 1 -->
                <div class="bg-indigo-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-indigo-200">
                    <img src="https://via.placeholder.com/500x300" alt="Web Developer" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-indigo-800 mb-2">Web Developer</h3>
                        <p class="text-gray-600 mb-4">Bergabunglah dengan tim kami untuk membangun solusi web inovatif di perusahaan teknologi terkemuka.</p>
                        <a href="#" class="bg-white text-indigo-800 font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-indigo-800 hover:text-white transition duration-300">Lihat Detail</a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="bg-green-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-green-200">
                    <img src="https://via.placeholder.com/500x300" alt="UI/UX Designer" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-green-800 mb-2">UI/UX Designer</h3>
                        <p class="text-gray-600 mb-4">Bergabung dengan tim desain kami untuk menciptakan pengalaman pengguna yang luar biasa dan antarmuka yang intuitif.</p>
                        <a href="#" class="bg-white text-green-800 font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-green-800 hover:text-white transition duration-300">Lihat Detail</a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="bg-yellow-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-yellow-200">
                    <img src="https://via.placeholder.com/500x300" alt="Product Manager" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-yellow-800 mb-2">Product Manager</h3>
                        <p class="text-gray-600 mb-4">Kami mencari seorang Product Manager yang berpengalaman untuk memimpin proyek-proyek penting dan membawa produk kami ke tingkat selanjutnya.</p>
                        <a href="#" class="bg-white text-yellow-800 font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-yellow-800 hover:text-white transition duration-300">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-6 text-center bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
        <div class="max-w-screen-md mx-auto">
            <h2 class="text-3xl font-semibold mb-6">Siap untuk Menemukan Pekerjaan Impian Anda?</h2>
            <p class="text-lg mb-8">Daftarkan diri Anda dan dapatkan akses ke berbagai peluang pekerjaan yang sesuai dengan keahlian dan minat Anda.</p>
            <a href="register.html" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-3 rounded-full text-xl font-semibold transition duration-300">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-900 text-center text-white">
        <p class="text-lg">&copy; 2024 JobFinder. Semua Hak Dilindungi.</p>
    </footer>

    <script>
        // Toggle menu mobile ketika tombol burger diklik
        document.getElementById('burger-menu').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Menutup menu mobile ketika tombol X diklik
        document.getElementById('close-menu').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    </script>

</body>

</html>
