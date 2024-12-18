@extends('layouts.landing.app')

@section('content')
   
    <!-- Hero Section -->
    <section class="flex items-center justify-between py-24 px-6 bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center">
            <!-- Teks Kiri -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl font-bold text-gray-300 mb-4">Lowongan Pekerjaan untuk Anda</h1>
                <p class="text-lg text-gray-300 mb-8">Bergabunglah dengan ribuan orang yang telah menemukan pekerjaan yang sesuai dengan keterampilan dan minat mereka. Mulai perjalanan karier Anda dengan langkah yang tepat!</p>
                <a href="register.html" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-3 rounded-full text-xl font-semibold transition duration-300">Daftar Sekarang</a>
            </div>

            <!-- Gambar Kanan -->
        <div class="w-full md:w-1/2 mt-8 md:mt-0">
        <img src="https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
     alt="Pekerjaan" class="w-full h-auto rounded-lg shadow-lg">
            </div>

    </section>

    <!-- Pencarian Pekerjaan -->
    <section id="job-search" class="py-16 px-6 bg-indigo-100">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-indigo-800 mb-6">Cari Pekerjaan Sesuai Keahlian</h2>
            <form action="#" method="GET" class="flex justify-center gap-4">
                <input type="text" name="keyword" placeholder="Cari pekerjaan..." class="px-6 py-3 rounded-full text-gray-800 w-1/3 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                <select name="category" class="px-6 py-3 rounded-full text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="">Pilih Kategori</option>
                    <option value="web-dev">Web Developer</option>
                    <option value="ui-ux">UI/UX Designer</option>
                    <option value="pm">Product Manager</option>
                </select>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-3 rounded-full text-xl font-semibold transition duration-300">Cari</button>
            </form>
        </div>
    </section>

  <!-- Daftar Pekerjaan Minimalis -->
<section id="job-list" class="py-16 px-6 bg-white">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-900 mb-8">Pekerjaan Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Job 1: Web Developer -->
            <div class="bg-indigo-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-indigo-200 p-6">
    <div class="flex justify-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-indigo-800">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-indigo-800 mb-2">Web Developer</h3>
    <p class="text-gray-600 mb-4">Bergabunglah dengan tim kami untuk membangun solusi web inovatif di perusahaan teknologi terkemuka.</p>
    <a href="#" class="text-indigo-800 font-semibold hover:underline">Lihat Detail</a>
</div>

<!-- Job 2: UI/UX Designer -->
<div class="bg-green-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-green-200 p-6">
    <div class="flex justify-center mb-4">
        <svg class="w-12 h-12 text-green-800" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v12h12V3H6zm0 12l6 6 6-6"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-green-800 mb-2 text-center">UI/UX Designer</h3>
    <p class="text-gray-600 mb-4 text-center">Bergabung dengan tim desain kami untuk menciptakan pengalaman pengguna yang luar biasa dan antarmuka yang intuitif.</p>
    <a href="#" class="text-green-800 font-semibold hover:underline text-center block">Lihat Detail</a>
</div>



<!-- Job 3: Product Manager -->
<div class="bg-yellow-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-yellow-200 p-6">
    <div class="flex justify-center mb-6"> <!-- Menambahkan margin bawah lebih besar -->
        <svg class="w-12 h-12 text-yellow-800" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v14h18V7M4 17h16M9 7v10"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-yellow-800 mb-2 text-center">Product Manager</h3>
    <p class="text-gray-600 mb-4 text-center">Kami mencari seorang Product Manager yang berpengalaman untuk memimpin proyek-proyek penting dan membawa produk kami ke tingkat selanjutnya.</p>
    <a href="#" class="text-yellow-800 font-semibold hover:underline text-center block">Lihat Detail</a>
</div>



<!-- Job 4: Graphic Designer -->
<div class="bg-blue-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-blue-200 p-6">
    <div class="flex justify-center items-center mb-4">
        <svg class="w-6 h-6 text-indigo-800" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 2.879a2 2 0 0 1 2.828 2.828l-9.9 9.9-3.435.573a1 1 0 0 0-.615 1.615l1.24 1.24a1 1 0 0 0 1.616-.615l.573-3.435 9.9-9.9a2 2 0 0 1 2.828 2.828l-10.586 10.586a1 1 0 0 0-.284.53l-.577 3.404a1 1 0 0 0 1.168 1.168l3.404-.577a1 1 0 0 0 .53-.284L21.243 9.757a2 2 0 0 1-2.828 2.828l-9.9 9.9-3.435.573a1 1 0 0 0-.615 1.615l1.24 1.24a1 1 0 0 0 1.616-.615l.573-3.435 9.9-9.9a2 2 0 0 1 2.828 2.828z"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-blue-800 mb-2 text-center">Graphic Designer</h3>
    <p class="text-gray-600 mb-4 text-center">Mencari seorang desainer grafis kreatif untuk membuat desain visual yang menarik untuk kampanye kami.</p>
    <a href="#" class="text-blue-800 font-semibold hover:underline text-center block">Lihat Detail</a>
</div>



          <!-- Job 5: Marketing Specialist -->
<div class="bg-purple-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-purple-200 p-6">
    <div class="mb-4">
        <svg class="w-12 h-12 text-purple-800 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 9h12M6 15h12"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-purple-800 mb-2 text-center">Marketing Specialist</h3>
    <p class="text-gray-600 mb-4 text-center">Bergabung dengan tim marketing untuk mengembangkan strategi pemasaran digital yang efektif dan inovatif.</p>
    <a href="#" class="text-purple-800 font-semibold hover:underline text-center block">Lihat Detail</a>
</div>


          <!-- Job 6: Data Analyst -->
<div class="bg-teal-100 rounded-lg shadow-lg overflow-hidden transition duration-300 hover:shadow-xl hover:bg-teal-200 p-6">
    <div class="mb-4">
        <svg class="w-12 h-12 text-teal-800 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v10l4-4m0 0l4 4M12 12l-4-4m0 0L4 12m8 10V2"/>
        </svg>
    </div>
    <h3 class="text-xl font-semibold text-teal-800 mb-2 text-center">Data Analyst</h3>
    <p class="text-gray-600 mb-4 text-center">Kami mencari seorang analis data untuk menganalisis tren pasar dan memberikan wawasan yang berharga untuk keputusan bisnis kami.</p>
    <a href="#" class="text-teal-800 font-semibold hover:underline text-center block">Lihat Detail</a>
</div>

        </div>
    </div>
</section>

  <!-- Testimonial Section -->
<section id="testimonials" class="py-16 px-6 bg-white">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-900 mb-8">Testimoni Pelamar Kerja</h2>
        <div class="flex justify-center gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-indigo-100 p-6 rounded-lg shadow-lg w-1/3 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-indigo-300">
                <p class="text-gray-600 mb-4">"Situs ini membantu saya menemukan pekerjaan impian saya sebagai Web Developer. Proses pendaftaran sangat mudah dan cepat!"</p>
                <p class="font-semibold text-indigo-800">Andi Sutanto</p>
                <p class="text-sm text-gray-500">Web Developer</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-green-100 p-6 rounded-lg shadow-lg w-1/3 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-green-300">
                <p class="text-gray-600 mb-4">"Saya bisa mendapatkan pekerjaan yang sesuai dengan keahlian desain saya. Sangat direkomendasikan!"</p>
                <p class="font-semibold text-green-800">Dewi Lestari</p>
                <p class="text-sm text-gray-500">UI/UX Designer</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-yellow-100 p-6 rounded-lg shadow-lg w-1/3 transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-yellow-300">
                <p class="text-gray-600 mb-4">"Situs ini memberikan berbagai pilihan pekerjaan yang sesuai dengan minat dan pengalaman saya. Sangat membantu!"</p>
                <p class="font-semibold text-yellow-800">Rudi Hartono</p>
                <p class="text-sm text-gray-500">Product Manager</p>
            </div>
        </div>
    </div>
</section>



   <!-- Keunggulan Platform -->
<section id="keunggulan" class="py-16 px-6 bg-gray-50">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-900 mb-8">Keunggulan Platform Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Keunggulan 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-indigo-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2l6 6-6 6-6-6 6-6z"></path>
                        <path d="M12 2v12"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Kemudahan Akses</h3>
                <p class="text-gray-600">Platform kami mudah diakses dari berbagai perangkat, memungkinkan Anda untuk mencari pekerjaan kapan saja dan di mana saja.</p>
            </div>

            <!-- Keunggulan 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-green-100">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 20l5-5-5-5"></path>
                        <path d="M5 20l5-5-5-5"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Proses Pendaftaran Cepat</h3>
                <p class="text-gray-600">Pendaftaran yang cepat dan mudah, memungkinkan Anda untuk segera bergabung dengan platform dan mulai mencari peluang karir.</p>
            </div>

            <!-- Keunggulan 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-yellow-100">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-yellow-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 5h4v14h-4z"></path>
                        <path d="M4 10h16"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Peluang Karir Beragam</h3>
                <p class="text-gray-600">Kami menyediakan berbagai pilihan pekerjaan di berbagai bidang, memberi Anda banyak peluang untuk berkembang sesuai dengan keahlian Anda.</p>
            </div>
        </div>
    </div>
</section>


 <!-- Layanan Unggulan -->
<section id="layanan-unggulan" class="py-16 px-6 bg-gray-50">
    <div class="max-w-screen-xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-900 mb-8">Layanan Unggulan Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Layanan 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-indigo-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 4h16v16H4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pendaftaran Cepat dan Mudah</h3>
                <p class="text-gray-600">Daftar hanya dalam beberapa langkah mudah dan segera temukan peluang karir yang sesuai dengan keahlian Anda.</p>
            </div>

            <!-- Layanan 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M19 6l-7 7-7-7"></path>
                        <path d="M12 13V3"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Akses Luas ke Lowongan Pekerjaan</h3>
                <p class="text-gray-600">Dapatkan akses ke ribuan lowongan pekerjaan dari berbagai industri dan lokasi yang sesuai dengan profil Anda.</p>
            </div>

            <!-- Layanan 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-yellow-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 15h4v4h-4z"></path>
                        <path d="M4 10h16"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Rekomendasi Pekerjaan Terkustomisasi</h3>
                <p class="text-gray-600">Platform ini memberikan rekomendasi pekerjaan yang disesuaikan dengan keterampilan dan minat Anda untuk hasil yang lebih optimal.</p>
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
@endsection
