@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 rounded-lg shadow-md text-white">
        <h2 class="text-3xl font-bold">Tambah Admin Baru</h2>
        <p class="mt-2 text-white/90">Isi form berikut untuk menambah admin baru ke dalam sistem.</p>
    </div>

    <!-- Form Tambah Admin -->
    <main class="flex-1 p-6">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Form Tambah Admin</h3>
            <form action="{{ route('admin.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1" required>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1" required>
                </div>

                <div>
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <input type="password" id="password" name="password" class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1" required>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-medium">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1" required>
                </div>

                <div class="flex justify-end space-x-4 mt-6">
                    <a href="/management-admin" class="bg-gray-300 text-gray-700 px-5 py-2 rounded-lg shadow hover:bg-gray-400 transition">Kembali</a>
                    <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">Tambah Admin</button>
                </div>
            </form>
        </div>
    </main>
@endsection
