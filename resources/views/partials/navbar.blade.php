<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="#" class="text-3xl font-semibold text-blue-600">JobConnect</a>

        <!-- Bagian Kanan Navbar -->
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <!-- Tombol Cari Kerja -->
            <button type="button" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Cari Kerja
            </button>
            <button type="button" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Gabung Mitra
            </button>

            <!-- Avatar Profil -->
            @auth
            <div class="relative">
                <!-- Avatar -->
                <button id="avatarButton" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold focus:outline-none">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden z-50">
                    <a href="{{ route('pencari.profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil Saya</a>
                    <form method="POST" action="{{ route('logout') }}" class="block">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>
