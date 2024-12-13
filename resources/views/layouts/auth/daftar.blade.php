<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sign Up')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center h-screen">

    <!-- Container for main content -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8">
        <!-- Content from the child page will be injected here -->
        @yield('content')
    </div>

</body>

</html>
