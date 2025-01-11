@extends('layouts.penyedia.app')

@section('content')

<body class="bg-gray-900 font-sans antialiased h-screen flex items-center justify-center">

    <!-- Kontainer untuk Form -->
    <div class="w-full h-full flex items-center justify-center">
        <!-- Form Pemasang Kerja -->
        <div class="w-full max-w-lg p-8 bg-gray-800 rounded-3xl shadow-lg">
            <h1 class="text-3xl font-bold text-white mb-8 text-center">Pasang Pekerjaan</h1>

            <form action="{{ route('penyedia.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <label for="judul" class="block text-lg font-semibold text-gray-700 mb-2">Nama Pekerjaan</label>
                    <input type="text" id="judul" name="judul" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 text-gray-900" required>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <label for="deskripsi" class="block text-lg font-semibold text-gray-700 mb-2">Deskripsi Pekerjaan</label>
                    <textarea id="deskripsi" name="deskripsi" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 text-gray-900" required></textarea>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <label for="kategori" class="block text-lg font-semibold text-gray-700 mb-2">Kategori</label>
                    <input type="text" id="kategori" name="kategori" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 text-gray-900" required>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <label for="tenggat_waktu" class="block text-lg font-semibold text-gray-700 mb-2">Tenggat Waktu</label>
                    <input type="date" id="tenggat_waktu" name="tenggat_waktu" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 text-gray-900" required>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-3 mt-6 rounded-lg shadow-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">Pasang Pekerjaan</button>
            </form>
        </div>
    </div>

</body>
@endsection