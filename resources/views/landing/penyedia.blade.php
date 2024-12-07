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

    <!-- Fitur Utama -->
    <section class="py-24 px-6 bg-gray-50">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-12">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-indigo-600 text-6xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Akses ke Ribuan Kandidat</h3>
                    <p class="text-gray-600">Temukan kandidat terbaik yang sesuai dengan kriteria perusahaan Anda, hanya dalam beberapa langkah mudah.</p>
                </div>
                <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-indigo-600 text-6xl mb-6">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Proses Pemasangan Lowongan yang Mudah</h3>
                    <p class="text-gray-600">Pasang lowongan pekerjaan dengan proses yang sangat mudah dan cepat. Anda bisa mulai mencari kandidat dalam waktu singkat.</p>
                </div>
                <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="text-indigo-600 text-6xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Statistik dan Pelaporan Lengkap</h3>
                    <p class="text-gray-600">Pantau performa lowongan Anda dengan laporan statistik yang lengkap untuk memastikan perekrutan berjalan lancar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lowongan Pekerjaan Tersedia -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-12">Lowongan Pekerjaan Tersedia</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Job 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <img src="https://via.placeholder.com/500x300" alt="Web Developer" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Web Developer</h3>
                        <p class="text-gray-600 mb-4">Bergabunglah dengan tim pengembang untuk menciptakan solusi web inovatif di perusahaan teknologi terkemuka.</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <img src="https://via.placeholder.com/500x300" alt="UI/UX Designer" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">UI/UX Designer</h3>
                        <p class="text-gray-600 mb-4">Bantu kami merancang pengalaman pengguna yang luar biasa untuk produk digital yang inovatif.</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <img src="https://via.placeholder.com/500x300" alt="Product Manager" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Product Manager</h3>
                        <p class="text-gray-600 mb-4">Pimpin tim pengembangan produk untuk merancang dan meluncurkan produk-produk baru yang inovatif.</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-24 px-6 bg-gray-50">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-12">Apa Kata Pengguna Kami?</h2>
            <div class="flex justify-center gap-12">
                <div class="bg-white text-indigo-600 p-8 rounded-lg shadow-xl max-w-xs transform hover:scale-105 transition duration-300">
                    <p class="text-lg mb-4">"Platform ini sangat mudah digunakan, kami berhasil menemukan kandidat yang tepat dalam waktu singkat!"</p>
                    <p class="font-semibold">PT. Solusi Digital</p>
                    <span class="text-gray-600">HR Manager</span>
                </div>
                <div class="bg-white text-indigo-600 p-8 rounded-lg shadow-xl max-w-xs transform hover:scale-105 transition duration-300">
                    <p class="text-lg mb-4">"Proses pemasangan lowongan sangat cepat dan efisien, kami bisa langsung menerima pelamar yang berkualitas."</p>
                    <p class="font-semibold">PT. Inovasi Kreatif</p>
                    <span class="text-gray-600">CEO</span>
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
