@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Tambah Admin Baru</h2>
        <p class="mt-4 text-gray-600">Isi form berikut untuk menambah admin baru.</p>
    </div>

    <!-- Form Tambah Admin -->
    <main class="flex-1 p-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold">Form Tambah Admin</h3>
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf

                <div class="mt-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full border px-4 py-2 rounded mt-2" required>
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full border px-4 py-2 rounded mt-2" required>
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full border px-4 py-2 rounded mt-2" required>
                </div>

                <div class="mt-4">
                    <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border px-4 py-2 rounded mt-2" required>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white  mr-7 px-4 py-2 rounded hover:bg-blue-700">Tambah Admin</button>
                    <a href="/management-admin" class="bg-gray-300 text-grey-700 px-4 py-2 rounded hover:bg-green-700">kembali</button>
                </div>
            </form>
        </div>
    </main>
@endsection
