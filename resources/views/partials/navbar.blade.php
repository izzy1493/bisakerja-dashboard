<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="text-3xl font-semibold text-blue-600">JobConnect</a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- Tombol Cari Kerja -->
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 me-3 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Cari Kerja
            </button>
            <button type="button" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gabung Mitra</button>
        </div>
    </div>
</nav>