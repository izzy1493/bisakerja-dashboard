<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for arrow icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .transition-transform {
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden h-[500px]">
        <!-- Main container -->
        <div id="slider" class="relative flex w-[300%] h-full transition-transform">
            <!-- Welcome Section -->
            <div class="w-1/3 bg-green-500 text-white flex flex-col items-center justify-center p-8" id="welcome-section">
                <h2 class="text-4xl font-bold mb-4">Welcome!</h2>
                <p class="mb-6 text-center">To stay connected, choose one of the options below:</p>
                <div class="flex space-x-4">
                    <button id="go-login" class="py-2 px-6 bg-white text-green-500 font-bold rounded-full hover:bg-gray-200 transition">
                        Log In
                    </button>
                    <button id="go-signup" class="py-2 px-6 bg-white text-green-500 font-bold rounded-full hover:bg-gray-200 transition">
                        Sign Up
                    </button>
                </div>
            </div>

            <!-- Login Section -->
            <div class="w-1/3 bg-green-500 text-white flex flex-col items-center justify-center p-8 relative" id="login-section">
                <h2 class="text-4xl font-bold mb-4">Welcome Back!</h2>
                <p class="mb-6 text-center">To stay connected, please log in with your info</p>
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
                <!-- Back Button in top-right -->
                <button id="back-to-welcome-login" class="absolute top-4 left-4 p-2 bg-white text-green-500 rounded-full hover:bg-gray-200 transition">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </div>

            <!-- Sign Up Section -->
            <div class="w-1/3 bg-white text-green-500 flex flex-col items-center justify-center p-8 relative" id="signup-section">
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
                <!-- Back Button in top-right -->
                <button id="back-to-welcome-signup" class="absolute top-4 left-4 p-2 bg-white text-green-500 rounded-full hover:bg-gray-200 transition">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const slider = document.getElementById('slider');
        const goLogin = document.getElementById('go-login');
        const goSignup = document.getElementById('go-signup');
        const toSignup = document.getElementById('to-signup');
        const toLogin = document.getElementById('to-login');
        const backToWelcomeLogin = document.getElementById('back-to-welcome-login');
        const backToWelcomeSignup = document.getElementById('back-to-welcome-signup');

        // Show Login form and slide to it
        goLogin.addEventListener('click', () => {
            slider.style.transform = 'translateX(-33.33%)'; // Slide to Login section
        });

        // Show Sign Up form and slide to it
        goSignup.addEventListener('click', () => {
            slider.style.transform = 'translateX(-66.66%)'; // Slide to Sign Up section
        });

        // Go back to Welcome section from Login
        backToWelcomeLogin.addEventListener('click', () => {
            slider.style.transform = 'translateX(0%)'; // Go back to Welcome section
        });

        // Go back to Welcome section from Sign Up
        backToWelcomeSignup.addEventListener('click', () => {
            slider.style.transform = 'translateX(0%)'; // Go back to Welcome section
        });

        // Go to Sign Up section from Login
        toSignup.addEventListener('click', () => {
            slider.style.transform = 'translateX(-66.66%)'; // Slide to Sign Up section
        });

        // Go to Login section from Sign Up
        toLogin.addEventListener('click', () => {
            slider.style.transform = 'translateX(-33.33%)'; // Slide to Login section
        });
    </script>
</body>
</html>
