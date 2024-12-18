@extends('layouts.auth.daftar')

@section('title', 'Sign Up')

@section('content')
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Create an Account</h1>

    <!-- Flash Messages -->
    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-lg mb-6">
            {{ session('error') }}
        </div>
    @endif

    <!-- Sign Up Form -->
    <form method="POST" action="{{ route('signup') }}">
        @csrf

        <!-- Name Input -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
            @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Input -->
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
            @error('email')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Phone Input -->
        <div class="mb-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
            @error('phone')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
            @error('password')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password Input -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-green-600 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:bg-green-700 transition duration-200 ease-in-out">
            Sign Up
        </button>
    </form>

    <!-- Footer Text -->
    <div class="mt-4 text-center text-sm text-gray-600">
        <p>Already have an account? <a href="{{ route('login') }}" class="text-green-600 hover:underline">Log In</a></p>
    </div>
@endsection
