<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center h-screen">

    <!-- Container -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Welcome Back!</h1>

        <!-- Flash Messages -->
        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-lg mb-6">
            {{ session('error') }}
        </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('loginSubmit') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}"
                    required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                @error('email')
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

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-green-600 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:bg-green-700 transition duration-200 ease-in-out">
                Log In
            </button>
        </form>

        <!-- Footer Text -->
        <div class="mt-4 text-center text-sm text-gray-600">
            <p>Don't have an account? <a href="#" class="text-green-600 hover:underline">Sign Up</a></p>
        </div>
    </div>

</body>

</html>
