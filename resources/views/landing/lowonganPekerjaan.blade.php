<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Hover Effect for Buttons */
        .hover-glow:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 255, 0.5);
        }
    </style>
</head>
<body class="flex min-h-screen items-center justify-center bg-gray-100">

    <div class="flex w-3/4 max-w-5xl rounded-lg shadow-lg overflow-hidden">
        <!-- Left Section: Sign In -->
        <div class="w-1/2 bg-white p-10 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-blue-600 text-center mb-6">Sign in</h2>
            <div class="flex justify-center space-x-4 mb-6">
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-gray-300">
                    <i class="fab fa-facebook-f text-blue-600"></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-gray-300">
                    <i class="fab fa-google text-red-500"></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full hover:bg-gray-300">
                    <i class="fab fa-linkedin-in text-blue-700"></i>
                </button>
            </div>
            <p class="text-center text-gray-600 mb-4">or use your email account:</p>
            <form action="#" method="POST" class="space-y-4">
                <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="password" name="password" placeholder="Password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="text-right">
                    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot your password?</a>
                </div>
                <button type="submit" class="w-full p-3 bg-blue-600 text-white rounded-md font-semibold hover:bg-blue-700 transition-all hover-glow">Sign In</button>
            </form>
        </div>

        <!-- Right Section: Sign Up -->
        <div class="w-1/2 bg-gradient-to-br from-blue-500 to-blue-700 text-white p-10 flex flex-col justify-center">
            <h2 class="text-4xl font-bold mb-4">Hello, Friends!</h2>
            <p class="mb-8">Enter your personal details and start your journey with us</p>
            <button class="w-1/2 mx-auto p-3 border border-white text-white rounded-md font-semibold hover:bg-white hover:text-blue-600 transition-all">
                Sign Up
            </button>
        </div>
    </div>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
