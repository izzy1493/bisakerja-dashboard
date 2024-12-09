@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <!-- Pilihan Role -->
        <div class="space-y-4">
            <!-- Kartu Admin -->
            <div class="cursor-pointer bg-gray-100 p-6 rounded-lg shadow hover:bg-gray-200 transition"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'admin']) }}'">
                <h3 class="text-lg font-semibold text-center">Admin</h3>
            </div>

            <!-- Kartu Super Admin -->
            <div class="cursor-pointer bg-gray-100 p-6 rounded-lg shadow hover:bg-gray-200 transition"
                onclick="window.location.href='{{ route('authenticate', ['role' => 'super_admin']) }}'">
                <h3 class="text-lg font-semibold text-center">Super Admin</h3>
            </div>
        </div>
    </div>
</div>
@endsection
