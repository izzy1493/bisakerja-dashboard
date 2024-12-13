
@extends('layouts.landing.app')
@section('content')

  <section class="relative bg-indigo-600 text-white py-20 px-6">
   <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center">
    <!-- Teks Kiri -->
    <div class="w-full md:w-1/2 text-center md:text-left">
     <h1 class="text-5xl font-extrabold leading-tight mb-4">
      Temukan Pekerjaan Impian Anda
     </h1>
     <p class="text-lg mb-6">
      Bergabunglah dengan ribuan profesional yang telah menemukan pekerjaan yang tepat untuk mereka. Mulai perjalanan karir Anda sekarang!
     </p>
     <a class="bg-yellow-500 text-indigo-900 font-semibold px-8 py-4 rounded-full text-lg hover:bg-yellow-600 transition duration-300" href="register.html">
      Daftar Sekarang
     </a>
    </div>
    <!-- Gambar Kanan -->
    <div class="w-full md:w-1/2 mt-8 md:mt-0">
     <img alt="Ilustrasi orang yang sedang bekerja di depan komputer dengan latar belakang kantor modern" class="w-full h-auto rounded-lg shadow-xl" height="400" src="https://storage.googleapis.com/a1aa/image/Ej2Qe7BKM3zpSqzkyhGSVj0dMbJgeHyvptkB2Sbp3zCLVh6TA.jpg" width="600"/>
    </div>
   </div>
  </section>
  <!-- Keuntungan Bergabung -->
  <section class="py-16 px-6 bg-gray-50 text-center">
   <div class="max-w-screen-xl mx-auto">
    <h2 class="text-3xl font-semibold text-gray-900 mb-8">
     Keuntungan Bergabung dengan Kami
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
     <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
      <img alt="Ikon peluang karir" class="w-16 h-16 mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/1C6NSqcNRfSVYqrRYhfunPCqW4kuJa7fbYsefTC7lMkKpKUfE.jpg" width="100"/>
      <h3 class="text-xl font-semibold mb-2">
       Peluang Karir Terbaik
      </h3>
      <p class="text-gray-600">
       Dapatkan akses ke berbagai peluang pekerjaan dari perusahaan terkemuka.
      </p>
     </div>
     <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
      <img alt="Ikon proses pendaftaran" class="w-16 h-16 mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/lLoCtneSR71jek2fOTuCGPP8lA7Oc0LWUd2fGfzNvIjxoKUfE.jpg" width="100"/>
      <h3 class="text-xl font-semibold mb-2">
       Proses Pendaftaran Mudah
      </h3>
      <p class="text-gray-600">
       Daftar hanya dalam beberapa langkah mudah dan langsung dapatkan pekerjaan.
      </p>
     </div>
     <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
      <img alt="Ikon komunitas profesional" class="w-16 h-16 mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/5ltnIHrc50LFCRCFOJWgR2dJ8BlOEfZF7QJuNEmO1VWlqQ9JA.jpg" width="100"/>
      <h3 class="text-xl font-semibold mb-2">
       Komunitas Profesional
      </h3>
      <p class="text-gray-600">
       Bergabung dengan komunitas pekerja yang mendukung dan berkembang bersama.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Daftar Pekerjaan -->
  <section class="py-16 px-6 bg-white" id="job-list">
   <div class="max-w-screen-xl mx-auto text-center">
    <h2 class="text-3xl font-semibold text-gray-900 mb-8">
     Pekerjaan Terbaru
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
     <!-- Job 1 -->
     <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
      <img alt="Ilustrasi pekerjaan Web Developer" class="w-full h-48 object-cover rounded-t-lg" height="300" src="https://storage.googleapis.com/a1aa/image/Tth5t7h4YuJeGifbG9fCdFXrmyI02fs2frxwh6e538zbRVoeJA.jpg" width="500"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold text-gray-900 mb-2">
        Web Developer
       </h3>
       <p class="text-gray-600 mb-4">
        Bergabunglah dengan tim kami untuk membangun solusi web inovatif di perusahaan teknologi terkemuka.
       </p>
       <a class="text-indigo-600 hover:text-indigo-800" href="#">
        Lihat Detail
       </a>
      </div>
     </div>
     <!-- Job 2 -->
     <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
      <img alt="Ilustrasi pekerjaan UI/UX Designer" class="w-full h-48 object-cover rounded-t-lg" height="300" src="https://storage.googleapis.com/a1aa/image/rIueLmt6OuVGVaOg0env7fWP7GDbiefQBJo866gm1S8hpKUfE.jpg" width="500"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold text-gray-900 mb-2">
        UI/UX Designer
       </h3>
       <p class="text-gray-600 mb-4">
        Bergabung dengan tim desain kami untuk menciptakan pengalaman pengguna yang luar biasa dan antarmuka yang intuitif.
       </p>
       <a class="text-indigo-600 hover:text-indigo-800" href="#">
        Lihat Detail
       </a>
      </div>
     </div>
     <!-- Job 3 -->
     <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
      <img alt="Ilustrasi pekerjaan Product Manager" class="w-full h-48 object-cover rounded-t-lg" height="300" src="https://storage.googleapis.com/a1aa/image/kNOiKedNVJz0GSMFjgQIimvEMfFQMcQx6q2yOWRWuk9IVh6TA.jpg" width="500"/>
      <div class="p-6">
       <h3 class="text-xl font-semibold text-gray-900 mb-2">
        Product Manager
       </h3>
       <p class="text-gray-600 mb-4">
        Kami mencari seorang Product Manager yang berpengalaman untuk memimpin proyek-proyek penting dan membawa produk kami ke tingkat selanjutnya.
       </p>
       <a class="text-indigo-600 hover:text-indigo-800" href="#">
        Lihat Detail
       </a>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Call to Action -->
  <section class="py-16 px-6 text-center bg-indigo-600 text-white">
   <div class="max-w-screen-md mx-auto">
    <h2 class="text-3xl font-semibold mb-4">
     Siap Memulai Karir Anda?
    </h2>
    <p class="text-lg mb-6">
     Daftarkan diri Anda untuk menemukan pekerjaan yang sesuai dengan keahlian dan minat Anda.
    </p>
    <a class="bg-yellow-500 text-indigo-900 font-semibold px-8 py-4 rounded-full text-lg hover:bg-yellow-600 transition duration-300" href="register.html">
     Daftar Sekarang
    </a>
   </div>
  </section>
  
  @endsection