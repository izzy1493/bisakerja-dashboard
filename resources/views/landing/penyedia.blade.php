@extends('layouts.landing.app')

@section('content')

    <!-- Hero Section -->
    <section class="relative bg-indigo-800 text-white py-40 px-6">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 ');">
            <div class="absolute inset-0 bg-black opacity-30"></div>
        </div>
        <div class="relative z-10 max-w-screen-xl mx-auto text-center">
            <h1 class="text-5xl font-extrabold leading-tight mb-6 animate__animated animate__fadeIn">Temukan Talenta Terbaik untuk Perusahaan Anda</h1>
            <p class="text-lg mb-8 animate__animated animate__fadeIn animate__delay-1s">Pasang lowongan pekerjaan dan temukan kandidat berkualitas yang siap membantu perusahaan Anda berkembang lebih jauh.</p>
            <a href="register.html" class="bg-indigo-600 text-white px-10 py-5 rounded-lg text-xl hover:bg-indigo-700 transition duration-300 transform hover:scale-105">Pasang Lowongan</a>
        </div>
    </section>

    <section class="py-24 px-6 bg-gradient-to-r from-indigo-100 via-indigo-200 to-indigo-300">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-12">Fitur Unggulan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Card 1 -->
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                    <i class="fas fa-users text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Akses ke Ribuan Kandidat</h3>
                <p class="text-gray-600 leading-relaxed">
                    Temukan kandidat terbaik yang sesuai dengan kriteria perusahaan Anda, hanya dalam beberapa langkah mudah.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                    <i class="fas fa-clipboard-list text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Proses Pemasangan Lowongan yang Mudah</h3>
                <p class="text-gray-600 leading-relaxed">
                    Pasang lowongan pekerjaan dengan proses yang sangat mudah dan cepat. Anda bisa mulai mencari kandidat dalam waktu singkat.
                </p>
            </div>
            <!-- Card 3 -->
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                    <i class="fas fa-chart-line text-white text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Statistik dan Pelaporan Lengkap</h3>
                <p class="text-gray-600 leading-relaxed">
                    Pantau performa lowongan Anda dengan laporan statistik yang lengkap untuk memastikan perekrutan berjalan lancar.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 px-6 bg-gradient-to-r from-indigo-100 via-indigo-200 to-indigo-300">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-900 mb-12">Penyedia Perusahaan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Job 1: IT Programmer (Odoo Developer) -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M32 0C14.328 0 0 14.328 0 32s14.328 32 32 32 32-14.328 32-32S49.672 0 32 0zM32 60C16.561 60 4 47.439 4 32S16.561 4 32 4s28 12.561 28 28-12.561 28-28 28z"></path>
                            <path fill="currentColor" d="M44 18H20c-1.104 0-2 .896-2 2v24c0 1.104.896 2 2 2h24c1.104 0 2-.896 2-2V20c0-1.104-.896-2-2-2zm-2 24H22V22h20v20z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Programmer (Odoo Developer)</h3>
                    <p class="text-gray-600 mb-4">Bertanggung jawab dalam pengembangan dan pemeliharaan sistem Odoo sesuai kebutuhan perusahaan.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

            <!-- Job 2: Network Staff -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M32 2C15.432 2 2 15.432 2 32s13.432 30 30 30 30-13.432 30-30S48.568 2 32 2zm0 56C16.561 58 4 45.439 4 32S16.561 6 32 6s28 12.561 28 28-12.561 28-28 28zm12-34H32v-8h-4v8H20v4h8v8h4v-8h8v-4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Network Staff</h3>
                    <p class="text-gray-600 mb-4">Menyediakan dukungan teknis dan mengelola jaringan perusahaan.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

            <!-- Job 3: IT Programmer Supervisor -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M32 2C15.432 2 2 15.432 2 32s13.432 30 30 30 30-13.432 30-30S48.568 2 32 2zm0 56C16.561 58 4 45.439 4 32S16.561 6 32 6s28 12.561 28 28-12.561 28-28 28zM28 24h8v16h-8z"></path>
                            <path fill="currentColor" d="M38 40h-4v6h-4v-6h-4v6H24v-6h-4v6H16v-6H12v12h40V40z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Programmer Supervisor</h3>
                    <p class="text-gray-600 mb-4">Mengawasi tim programmer dan memastikan proyek IT berjalan sesuai rencana.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

            <!-- Job 4: Software Developer -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M54 8H10c-1.104 0-2 .896-2 2v44c0 1.104.896 2 2 2h44c1.104 0 2-.896 2-2V10c0-1.104-.896-2-2-2zm-2 46H12V12h40v42zm-21-6h-6v-6h6v6zm0-10h-6v-6h6v6zm0-10h-6v-6h6v6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Software Developer</h3>
                    <p class="text-gray-600 mb-4">Mengembangkan dan memelihara aplikasi berbasis web dan mobile sesuai kebutuhan klien.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

            <!-- Job 5: Network Engineer -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M47 19c1.657 0 3 1.343 3 3v8h-4v-6h-2v6h-4v-8c0-1.657 1.343-3 3-3zm-2 7h2v6h-2v-6zM10 13c-1.657 0-3 1.343-3 3v8h4v-6h2v6h4v-8c0-1.657-1.343-3-3-3zm2 7h-2v6h2v-6zM10 27H6v-6h4v6zm20 0h-4v-6h4v6zm-10 6h-6v-4h6v4zm10 0h-6v-4h6v4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Network Engineer</h3>
                    <p class="text-gray-600 mb-4">Merancang, mengimplementasikan, dan memelihara infrastruktur jaringan perusahaan.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

            <!-- Job 6: IT Support -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                <div class="p-6">
                    <div class="flex justify-center items-center mb-4 h-20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 w-16 h-16" viewBox="0 0 64 64">
                            <path fill="currentColor" d="M32 2c-1.657 0-3 1.343-3 3v10h-4v-2c0-.553-.447-1-1-1h-6c-.553 0-1 .447-1 1v2h-4V5c0-1.657-1.343-3-3-3s-3 1.343-3 3v49c0 1.657 1.343 3 3 3s3-1.343 3-3V50h4v2c0 .553.447 1 1 1h6c.553 0 1-.447 1-1v-2h4v3c0 1.657 1.343 3 3 3s3-1.343 3-3V5c0-1.657-1.343-3-3-3zM31 49h-4v2h4v-2zm2-3v-3h-4v2c0 .553-.447 1-1 1h-6c-.553 0-1-.447-1-1v-2h-4v3c0 .553-.447 1-1 1s-1-.447-1-1v-3h-4v3c0 .553-.447 1-1 1s-1-.447-1-1v-3h-2V5c0-.553.447-1 1-1s1 .447 1 1v2h4V5c0-.553.447-1 1-1h6c.553 0 1 .447 1 1v2h4v39H33z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Support</h3>
                    <p class="text-gray-600 mb-4">Memberikan dukungan teknis terkait perangkat keras dan perangkat lunak perusahaan.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                </div>
            </div>

        </div>
    </div>
</section>

 <!-- Testimoni -->
<section class="py-24 px-6" style="background: linear-gradient(to bottom,#90AFC5,#336B87);">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-900 mb-12">Apa Kata Pengguna Kami?</h2>
        <div class="flex flex-wrap justify-center gap-12">
            <!-- Testimoni Cards -->
            <div class="bg-white text-indigo-600 p-8 rounded-lg shadow-xl max-w-xs transform hover:scale-105 transition duration-300">
                <p class="text-lg mb-4">"Platform ini sangat mudah digunakan! Tim kami berhasil menemukan kandidat yang tepat untuk proyek dalam waktu yang singkat."</p>
                <p class="font-semibold">PT. Solusi Digital</p>
                <span class="text-gray-600">HR Manager</span>
            </div>
            <div class="bg-white text-indigo-600 p-8 rounded-lg shadow-xl max-w-xs transform hover:scale-105 transition duration-300">
                <p class="text-lg mb-4">"Fitur statistiknya sangat membantu untuk melacak kinerja lowongan pekerjaan kami. Sangat direkomendasikan!"</p>
                <p class="font-semibold">PT. Inovasi Kreatif</p>
                <span class="text-gray-600">CEO</span>
            </div>
            <div class="bg-white text-indigo-600 p-8 rounded-lg shadow-xl max-w-xs transform hover:scale-105 transition duration-300">
                <p class="text-lg mb-4">"Kami berhasil mengisi posisi penting dalam tim dengan kandidat yang luar biasa. Prosesnya cepat dan efisien."</p>
                <p class="font-semibold">PT. Techno Ventures</p>
                <span class="text-gray-600">Recruitment Lead</span>
            </div>
        </div>
    </div>
</section>


    <!-- Call to Action -->
    <section class="py-16 px-6 text-center bg-indigo-600 text-white">
        <div class="max-w-screen-md mx-auto">
            <h2 class="text-3xl font-semibold mb-4">Pasang Lowongan Anda Sekarang!</h2>
            <p class="text-lg mb-6">Pasang lowongan pekerjaan untuk menemukan kandidat terbaik yang akan membawa perusahaan Anda ke tingkat berikutnya.</p>
            <a href="register.html" class="bg-white text-indigo-600 px-10 py-5 rounded-lg text-xl hover:bg-indigo-100 transition duration-300 transform hover:scale-105">Pasang Lowongan</a>
        </div>
    </section>

    <script>
        // Add any custom JavaScript or animations for interactivity here.
    </script>

@endsection
