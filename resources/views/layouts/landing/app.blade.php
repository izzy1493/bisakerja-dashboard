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
@yield('content')

<!-- Navbar -->


<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="text-3xl font-semibold text-blue-600">JobConnect</a>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
<<<<<<< Updated upstream
      <button type="button" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 me-3 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari Kerja</button>
=======
  <a href="/jobs" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 me-3 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Cari Kerja
        </a>
>>>>>>> Stashed changes
      <button type="button" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gabung Mitra</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Lowongan Pekerjaan</a>
      </li>
      <li>
        <a href="/pencari-kerja" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pencari Kerja</a>
      </li>
      <li>
        <a href="/penyedia-kerja" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Penyedia Kerja</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2024 JobConnect. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
<<<<<<< Updated upstream
=======


>>>>>>> Stashed changes
