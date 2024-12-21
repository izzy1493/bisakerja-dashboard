@extends('layouts.penyedia.app')

@section('content')

    <body class="bg-gradient-to-br from-blue-50 to-purple-100 font-sans antialiased">

    <div class="max-w-xl mx-auto p-8 bg-white rounded-3xl shadow-xl mt-16">
        <h1 class="text-4xl font-semibold text-gray-800 mb-6 text-center">Pasang Pekerjaan</h1>

        <form action="{{ route('penyedia.store') }}" method="POST">
            @csrf
            <!-- Input fields -->

            <div class="space-y-6">
                <div class="border-b-2 pb-4">
                    <label for="judul" class="block text-lg font-medium text-gray-700">Judul Pekerjaan</label>
                    <input type="text" id="judul" name="judul" class="w-full p-4 mt-2 border-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-300" required>
                </div>

                <div class="border-b-2 pb-4">
                    <label for="deskripsi" class="block text-lg font-medium text-gray-700">Deskripsi Pekerjaan</label>
                    <textarea id="deskripsi" name="deskripsi" class="w-full p-4 mt-2 border-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-300" required></textarea>
                </div>

                <div class="border-b-2 pb-4">
                    <label for="kategori" class="block text-lg font-medium text-gray-700">Kategori</label>
                    <input type="text" id="kategori" name="kategori" class="w-full p-4 mt-2 border-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-300" required>
                </div>

                <div class="border-b-2 pb-4">
                    <label for="tenggat_waktu" class="block text-lg font-medium text-gray-700">Tenggat Waktu</label>
                    <input type="date" id="tenggat_waktu" name="tenggat_waktu" class="w-full p-4 mt-2 border-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-300" required>
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-blue-500 text-white py-3 mt-6 rounded-lg hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 transition duration-300">Pasang Pekerjaan</button>
        </form>
    </div>
@endsection
