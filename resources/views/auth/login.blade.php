@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/login-bg.jpg') }}');">
    <div class="bg-white bg-opacity-70 p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Login</h2>

        <!-- Pilihan Role -->
        <div class="space-y-4">
            <!-- Kartu Admin -->
            <div class="cursor-pointer bg-gradient-to-r from-blue-400 to-indigo-500 p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105 hover:opacity-90"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'admin']) }}'">
                <h3 class="text-xl font-semibold text-center text-white">Admin</h3>
                <p class="text-center text-gray-200 mt-2">Access to the admin dashboard</p>
            </div>

            <!-- Kartu Super Admin -->
            <div class="cursor-pointer bg-gradient-to-r from-green-400 to-teal-500 p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105 hover:opacity-90"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'super_admin']) }}'">
                <h3 class="text-xl font-semibold text-center text-white">Super Admin</h3>
                <p class="text-center text-gray-200 mt-2">Full access to system settings</p>
            </div>
        </div>
        
        <!-- Flowbite Tooltip -->
        <div class="mt-6 text-center text-gray-600">
            <span class="text-sm">
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
