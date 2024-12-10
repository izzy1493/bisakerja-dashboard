@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/login-bg.jpg') }}');">
    <div class="bg-white bg-opacity-80 p-6 rounded-xl shadow-lg w-full max-w-md">

        <!-- Form Login -->
        <h2 class="text-3xl font-semibold text-center text-gray-900 mb-6">Login</h2>
        
        <!-- Form -->
        <form action="#" method="POST" class="space-y-5">
            <div>
                <!-- Input Username -->
                <label for="username" class="block mb-2 text-lg font-medium text-gray-800">Username</label>
                <input type="text" id="username" name="username" required class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" placeholder="Masukkan username">
            </div>

            <div>
                <!-- Input Password -->
                <label for="password" class="block mb-2 text-lg font-medium text-gray-800">Password</label>
                <input type="password" id="password" name="password" required class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" placeholder="Masukkan password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full p-3 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 transform hover:scale-105">Login</button>
        </form>

        <!-- Belum punya akun -->
        <p class="text-center text-lg text-gray-700 mt-4">Belum punya akun? <a href="#" class="text-blue-600 hover:underline">Daftar di sini</a></p>

        <!-- Pilihan Role -->
        <div class="mt-6 space-y-4">
            <!-- Kartu Admin -->
            <div class="cursor-pointer bg-gradient-to-r from-blue-500 to-indigo-600 p-5 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 hover:opacity-90"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'admin']) }}'">
                <h3 class="text-xl font-semibold text-center text-white">Admin</h3>
                <p class="text-center text-gray-100 mt-1">Access to the admin dashboard</p>
            </div>

            <!-- Kartu Super Admin -->
            <div class="cursor-pointer bg-gradient-to-r from-green-500 to-teal-600 p-5 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 hover:opacity-90"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'super_admin']) }}'">
                <h3 class="text-xl font-semibold text-center text-white">Super Admin</h3>
                <p class="text-center text-gray-100 mt-1">Full access to system settings</p>
            </div>
        </div>

        <!-- Flowbite Tooltip -->
        <div class="mt-6 text-center text-gray-700">
            <span class="text-lg">
                Need help? 
                <a href="#" class="text-blue-500 hover:underline" data-tooltip-target="tooltip-login">
                    Contact Support
                </a>
            </span>
            <!-- Tooltip Content -->
            <div id="tooltip-login" role="tooltip" class="absolute hidden z-10 w-48 px-3 py-2 text-sm font-medium text-white bg-gray-800 rounded-lg shadow-sm opacity-0 transition-opacity duration-300" data-popper-placement="top">
                Reach out to us at support@example.com
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
@endsection
