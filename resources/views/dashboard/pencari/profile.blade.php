@extends('layouts.pencari.app')

@section('title', 'Profil Saya - JobConnect')

@section('content')
<section class="bg-gray-100 py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mt-3 text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Profil Saya</h1>
            <p class="text-gray-600 mt-2">Perbarui informasi pribadi Anda dengan mudah.</p>
        </div>

        <!-- Card Profil -->
        <div class="bg-white rounded-lg shadow-lg p-8 space-y-8">
            <!-- Profile Picture -->
            <div class="flex flex-col items-center">
                <div class="relative w-28 h-28">
                    <img src="https://via.placeholder.com/150" alt="Foto Profil" class="w-full h-full rounded-full shadow">
                    <button class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full shadow-lg hover:bg-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 11l5 5m-6 0h6m2-6v6m0-6l-6-6" />
                        </svg>
                    </button>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mt-4">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">Pengguna Terdaftar</p>
            </div>

            <!-- Form Profil -->
            <form action="/profile/update" method="POST" class="space-y-6">
                @csrf
                <!-- Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="mt-2 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" readonly class="mt-2 w-full px-4 py-2 bg-gray-100 border rounded-lg shadow-sm cursor-not-allowed focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telepon</label>
                    <input type="text" name="phone" id="phone" value="{{ $user->phone ?? '' }}" class="mt-2 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                

                <!-- Buttons -->
                <div class="flex justify-end space-x-4">
                    <button type="reset" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg shadow hover:bg-gray-300 transition">
                        Reset
                    </button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
