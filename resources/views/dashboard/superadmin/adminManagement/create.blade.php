@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-8 rounded-lg shadow-lg text-white">
        <h2 class="text-4xl font-extrabold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 3a1 1 0 011 1v1h3a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h3V4a1 1 0 011-1zM9 4v1h2V4H9z" />
            </svg>
            Tambah Admin Baru
        </h2>
        <p class="mt-2 text-white/80">Isi form berikut untuk menambah admin baru ke dalam sistem dengan cepat dan mudah.</p>
    </div>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="mt-4 bg-green-600 text-white p-4 rounded-lg shadow flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-2.293-6.707a1 1 0 011.414 0L10 11.586l.879-.879a1 1 0 011.414 1.414l-1.5 1.5a1 1 0 01-1.414 0l-2-2z" clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Tambah Admin -->
    <main class="flex-1 p-6">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Form Tambah Admin</h3>
            <form action="{{ route('admin.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 hover:border-gray-400 transition" placeholder="Masukkan nama lengkap" required>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 hover:border-gray-400 transition" placeholder="contoh@email.com" required>
                </div>

                <div>
                    <label for="phone" class="block text-gray-700 font-medium">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone" class="w-full border border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 hover:border-gray-400 transition" placeholder="Masukkan nomor telepon" required>
                </div>

                <div>
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <input type="password" id="password" name="password" class="w-full border border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 hover:border-gray-400 transition" placeholder="Minimal 8 karakter" required>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-medium">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 hover:border-gray-400 transition" placeholder="Ulangi password" required>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.management') }}" class="bg-gray-200 text-gray-800 px-5 py-3 rounded-lg shadow hover:bg-gray-300 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-4-8a4 4 0 118 0 4 4 0 01-8 0z" clip-rule="evenodd" />
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" class="bg-blue-600 text-white px-5 py-3 rounded-lg shadow hover:bg-blue-700 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16 12a1 1 0 01-1 1H5a1 1 0 110-2h10a1 1 0 011 1z" />
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" clip-rule="evenodd" />
                        </svg>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
