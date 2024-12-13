@extends('layouts.landing.app')

@section('content')


<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Job Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet"/>
</head>
<body class="font-roboto bg-gray-100">
    <!-- Hero Section -->
    <section class="relative bg-gray-800 text-white py-40 px-6">
        <img alt="Background image of a professional office environment" class="absolute inset-0 w-full h-full object-cover opacity-30" height="1080" src="https://storage.googleapis.com/a1aa/image/uFDXEy8HEqJdCBGzgTAG9iTVQsxzop7PKeqph6OCqo612B9JA.jpg" width="1920"/>
        <div class="relative z-10 max-w-screen-xl mx-auto text-center">
            <h1 class="text-5xl font-extrabold leading-tight mb-6 animate__animated animate__fadeIn">Temukan Talenta Terbaik untuk Perusahaan Anda</h1>
            <p class="text-lg mb-8 animate__animated animate__fadeIn animate__delay-1s">Pasang lowongan pekerjaan dan temukan kandidat berkualitas yang siap membantu perusahaan Anda berkembang lebih jauh.</p>
            <a class="bg-indigo-600 text-white px-10 py-5 rounded-lg text-xl hover:bg-indigo-700 transition duration-300 transform hover:scale-105" href="register.html">Pasang Lowongan</a>
        </div>
    </section>
    <!-- Fitur Unggulan Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Card 1 -->
                <div class="p-8 bg-gray-100 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                    <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                        <i class="fas fa-users text-white text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Akses ke Ribuan Kandidat</h3>
                    <p class="text-gray-600 leading-relaxed">Temukan kandidat terbaik yang sesuai dengan kriteria perusahaan Anda, hanya dalam beberapa langkah mudah.</p>
                </div>
                <!-- Card 2 -->
                <div class="p-8 bg-gray-100 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                    <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                        <i class="fas fa-clipboard-list text-white text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Proses Pemasangan Lowongan yang Mudah</h3>
                    <p class="text-gray-600 leading-relaxed">Pasang lowongan pekerjaan dengan proses yang sangat mudah dan cepat. Anda bisa mulai mencari kandidat dalam waktu singkat.</p>
                </div>
                <!-- Card 3 -->
                <div class="p-8 bg-gray-100 rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300">
                    <div class="flex justify-center items-center mb-6 w-20 h-20 rounded-full bg-gradient-to-r from-purple-500 to-indigo-500">
                        <i class="fas fa-chart-line text-white text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Statistik dan Pelaporan Lengkap</h3>
                    <p class="text-gray-600 leading-relaxed">Pantau performa lowongan Anda dengan laporan statistik yang lengkap untuk memastikan perekrutan berjalan lancar.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Penyedia Perusahaan Section -->
    <section class="py-24 px-6 bg-gray-100">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-12">Penyedia Perusahaan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Job 1: IT Programmer (Odoo Developer) -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing IT Programmer (Odoo Developer)" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/udLzycdDDnr6FlNgbuwlNteDLbUiUSRxs7j8CGFWjULz2B9JA.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Programmer (Odoo Developer)</h3>
                        <p class="text-gray-600 mb-4">Bertanggung jawab dalam pengembangan dan pemeliharaan sistem Odoo sesuai kebutuhan perusahaan.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
                <!-- Job 2: Network Staff -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing Network Staff" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/mzd00JzoQWLzKp3sierErlYO4ara2UGzOkTjzlD8KPu02B9JA.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Network Staff</h3>
                        <p class="text-gray-600 mb-4">Menyediakan dukungan teknis dan mengelola jaringan perusahaan.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
                <!-- Job 3: IT Programmer Supervisor -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing IT Programmer Supervisor" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/pjNz2uLS6x4UOZX2zUMzxZrSGXIerePufgWVgfRQOFrq2OoPB.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Programmer Supervisor</h3>
                        <p class="text-gray-600 mb-4">Mengawasi tim programmer dan memastikan proyek IT berjalan sesuai rencana.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
                <!-- Job 4: Software Developer -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing Software Developer" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/vmfodkpULK1XOKG2ut7epge4ALhiWMCR88COsNT7efNxtdQfE.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Software Developer</h3>
                        <p class="text-gray-600 mb-4">Mengembangkan dan memelihara aplikasi berbasis web dan mobile sesuai kebutuhan klien.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
                <!-- Job 5: Network Engineer -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing Network Engineer" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/lvePw7uaY2wfGEeLu6nfHHLzZqeBfCfIRSErozU2zYcettD6TA.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Network Engineer</h3>
                        <p class="text-gray-600 mb-4">Merancang, mengimplementasikan, dan memelihara infrastruktur jaringan perusahaan.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
                <!-- Job 6: IT Support -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center items-center mb-4 h-20">
                            <img alt="Icon representing IT Support" class="text-indigo-600 w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/UfhkPVfdHDphfJ6RyjgdFwteZrWcCfIA1xEjmrOXvrfGa7geJA.jpg" width="64"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Support</h3>
                        <p class="text-gray-600 mb-4">Memberikan dukungan teknis terkait perangkat keras dan perangkat lunak perusahaan.</p>
                        <a class="text-indigo-600 hover:text-indigo-800" href="#">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimoni Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-12">Apa Kata Pengguna Kami?</h2>
            <div class="flex flex-wrap justify-center gap-12">
                <!-- Testimoni Card 1 -->
                <div class="bg-gray-100 text-teal-700 p-8 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition duration-300">
                    <p class="text-lg mb-4">"Platform ini sangat mudah digunakan! Tim kami berhasil menemukan kandidat yang tepat untuk proyek dalam waktu yang singkat."</p>
                    <p class="font-semibold text-teal-900">PT. Solusi Digital</p>
                    <span class="text-gray-500">HR Manager</span>
                </div>
                <!-- Testimoni Card 2 -->
                <div class="bg-gray-100 text-teal-700 p-8 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition duration-300">
                    <p class="text-lg mb-4">"Fitur statistiknya sangat membantu untuk melacak kinerja lowongan pekerjaan kami. Sangat direkomendasikan!"</p>
                    <p class="font-semibold text-teal-900">PT. Inovasi Kreatif</p>
                    <span class="text-gray-500">CEO</span>
                </div>
                <!-- Testimoni Card 3 -->
                <div class="bg-gray-100 text-teal-700 p-8 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition duration-300">
                    <p class="text-lg mb-4">"Kami berhasil mengisi posisi penting dalam tim dengan kandidat yang luar biasa. Prosesnya cepat dan efisien."</p>
                    <p class="font-semibold text-teal-900">PT. Techno Ventures</p>
                    <span class="text-gray-500">Recruitment Lead</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="py-16 px-6 text-center bg-gray-800 text-white">
        <div class="max-w-screen-md mx-auto">
            <h2 class="text-3xl font-semibold mb-4">Pasang Lowongan Anda Sekarang!</h2>
            <p class="text-lg mb-6">Pasang lowongan pekerjaan untuk menemukan kandidat terbaik yang akan membawa perusahaan Anda ke tingkat berikutnya.</p>
            <a class="bg-indigo-600 text-white px-10 py-5 rounded-lg text-xl hover:bg-indigo-700 transition duration-300 transform hover:scale-105" href="register.html">Pasang Lowongan</a>
        </div>
    </section>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
@endsection