@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Management Admin</h2>
        <p class="mt-4 text-gray-600">Halaman ini digunakan untuk mengelola admin aplikasi.</p>
    </div>

    <!-- Tombol Tambah Admin -->
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
            Tambah Admin
        </a>
    </div>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card Example -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">Total Users</h2>
                <p class="text-2xl">1,234</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">Active Sessions</h2>
                <p class="text-2xl">456</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">New Signups</h2>
                <p class="text-2xl">78</p>
            </div>
        </div>

        <!-- Table Example -->
        <div class="mt-8 bg-white p-4 rounded-lg shadow">
            <h2 class="font-bold">User List</h2>
            <table class="min-w-full mt-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-left">Name</th>
                        <th class="py-2 px-4 text-left">Email</th>
                        <th class="py-2 px-4 text-left">Role</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b py-2 px-4">John Doe</td>
                        <td class="border-b py-2 px-4">john@example.com</td>
                        <td class="border-b py-2 px-4">Admin</td>
                        <td class="border-b py-2 px-4">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b py-2 px-4">Ilham Cuki</td>
                        <td class="border-b py-2 px-4">ilham@example.com</td>
                        <td class="border-b py-2 px-4">User</td>
                        <td class="border-b py-2 px-4">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b py-2 px-4">Wawan</td>
                        <td class="border-b py-2 px-4">wawan@example.com</td>
                        <td class="border-b py-2 px-4">User</td>
                        <td class="border-b py-2 px-4">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>



@endsection
