<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="#" class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-8" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="Logo">
                        <span class="ml-3 font-semibold text-xl text-gray-900">TalentHub</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    @if($role === 'penyedia')
                        <a href="#" class="text-gray-900 hover:text-indigo-600">Dashboard</a>
                        <a href="#" class="text-gray-900 hover:text-indigo-600">My Jobs</a>
                        <a href="#" class="text-gray-900 hover:text-indigo-600">Settings</a>
                    @else
                        <a href="#" class="text-gray-900 hover:text-indigo-600">Explore Jobs</a>
                        <a href="#" class="text-gray-900 hover:text-indigo-600">Profile</a>
                    @endif
                    <a href="#" class="text-gray-900 hover:text-indigo-600">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </div>
</body>
</html>
