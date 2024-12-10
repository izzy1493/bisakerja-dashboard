<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .transition-transform {
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden h-[500px]">
        <!-- Main container -->
        <div id="slider" class="relative flex w-[200%] h-full transition-transform">
            <!-- Left Section (Login) -->
            <div class="w-1/2 bg-green-500 text-white flex flex-col items-center justify-center p-8" id="login-section">
                <h2 class="text-4xl font-bold mb-4">Welcome Back!</h2>
                <p class="mb-6 text-center">To keep connected with us please login with your personal info</p>
                <form class="w-full max-w-sm">
                    <input type="email" placeholder="Email" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="password" placeholder="Password" class="w-full px-4 py-2 mb-6 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit" class="w-full py-2 bg-white text-green-500 font-bold rounded-lg hover:bg-gray-200 transition">
                        Log In
                    </button>
                </form>
                <button id="to-signup" class="mt-4 py-2 px-6 bg-white text-green-500 font-bold rounded-full hover:bg-gray-200 transition">
                    Go to Sign Up
                </button>
            </div>

            <!-- Right Section (Sign Up) -->
            <div class="w-1/2 bg-white text-green-500 flex flex-col items-center justify-center p-8" id="signup-section">
                <h2 class="text-4xl font-bold mb-4">Create Account</h2>
                <form class="w-full max-w-sm">
                    <input type="text" placeholder="Name" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="email" placeholder="Email" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="password" placeholder="Password" class="w-full px-4 py-2 mb-6 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit" class="w-full py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition">
                        Sign Up
                    </button>
                </form>
                <button id="to-login" class="mt-4 py-2 px-6 bg-green-500 text-white font-bold rounded-full hover:bg-green-600 transition">
                    Go to Login
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const slider = document.getElementById('slider');
        const toSignup = document.getElementById('to-signup');
        const toLogin = document.getElementById('to-login');

        // Show Sign Up section and move slider
        toSignup.addEventListener('click', () => {
            slider.style.transform = 'translateX(-50%)'; // Shift to Sign Up section
        });

        // Show Login section and move slider
        toLogin.addEventListener('click', () => {
            slider.style.transform = 'translateX(0%)'; // Shift back to Login section
        });
    </script>
</body>
</html>
