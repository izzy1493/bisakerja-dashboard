@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Admin</h2>
        <p class="mt-4 text-gray-600">Isi form berikut untuk mengedit admin.</p>
    </div>

    <!-- Form Tambah Admin -->
    <main class="flex-1 p-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold">Form Edit Admin</h3>

            <!-- Menampilkan pesan sukses jika ada -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Menampilkan error validasi jika ada -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.store') }}" method="POST" class="mt-6">
                @csrf

                <div class="mt-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" 
                        class="w-full border px-4 py-2 rounded mt-2 @error('name') border-red-500 @enderror" 
                        value="{{ old('name') }}" 
                        required>
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" 
                        class="w-full border px-4 py-2 rounded mt-2 @error('email') border-red-500 @enderror" 
                        value="{{ old('email') }}" 
                        required>
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" 
                        class="w-full border px-4 py-2 rounded mt-2 @error('password') border-red-500 @enderror" 
                        required>
                </div>

                <div class="mt-4">
                    <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                        class="w-full border px-4 py-2 rounded mt-2 @error('password_confirmation') border-red-500 @enderror" 
                        required>
                </div>

                <div class="mt-6 flex justify-end space-x-4">
                    <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Edit Admin
                    </button>
                    <a href="/management-admin" 
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                        BACK
                    </a>
                </div>
            </form>
        </div>
    </main>
@endsection
