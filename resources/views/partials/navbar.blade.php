<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <!-- Logo dan Nama Website -->
        <a href="/" class="text-3xl font-semibold text-blue-600">JobConnect</a>

        <!-- Bagian kanan navbar -->
        <div class="flex items-center space-x-4">
            <!-- Tombol Cari Kerja dan Gabung Mitra -->
            <button type="button" class="text-black bg-white px-4 py-2 rounded-lg font-medium focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:text-white dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Cari Kerja
            </button>
            <button type="button" class="text-white bg-gray-900 hover:bg-gray-800 px-4 py-2 rounded-lg font-medium focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Gabung Mitra
            </button>

            <!-- Cek apakah pengguna sudah login -->
            @auth
                <span class="text-white hidden md:block">Welcome, {{ Auth::user()->name }}</span>

                <!-- Tombol Logout -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg font-medium focus:ring-4 focus:outline-none focus:ring-gray-300">
                        Logout
                    </button>
                </form>
            @endauth

            <!-- Menampilkan Tombol Login jika belum login -->
            @guest
                <a href="{{ route('login') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg font-medium focus:ring-4 focus:outline-none focus:ring-gray-300">
                    Login
                </a>
            @endguest
        </div>
    </div>
</nav>
