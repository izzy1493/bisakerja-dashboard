<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
        <h2 class="text-3xl font-bold mb-6">Welcome to Dashboard</h2>
        <p class="text-xl">You are logged in as <strong>{{ session('role') }}</strong></p>
    </div>
</div>
@endsection
