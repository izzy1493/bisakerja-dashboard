@extends('layouts.superadmin.app')

@section('content')
    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-10 rounded-lg shadow-md mb-8">
        <h1 class="text-4xl font-bold mb-2">Management Admin</h1>
        <p class="text-lg">Kelola admin aplikasi dengan efisiensi dan kemudahan.</p>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
            <div class="p-4 bg-indigo-100 rounded-full text-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11H7a2 2 0 100 4h2m0-4h10a2 2 0 110 4H9m0-4v-2a2 2 0 114 0v2m0 0v2a2 2 0 11-4 0v-2z" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">{{ $userCount }}</p>
            </div>
        </div>
        <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
            <div class="p-4 bg-green-100 rounded-full text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4a1 1 0 001 1h3m10-6h2a1 1 0 011 1v6a1 1 0 01-1 1h-2m-4 0h4v4a1 1 0 01-1 1H9a1 1 0 01-1-1v-4h4m0 0V9a1 1 0 01-1-1H7a1 1 0 01-1-1V5m0 0V3m0 0h4a1 1 0 011 1v6a1 1 0 01-1 1H9" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Active Sessions</h3>
                <p class="text-3xl font-bold text-green-600 mt-2">456</p>
            </div>
        </div>
        <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
            <div class="p-4 bg-yellow-100 rounded-full text-yellow-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01m-6.938 4h13.856c1.054 0 2.073-.816 2.212-1.872l1.385-10A2.007 2.007 0 0019.438 6H4.562a2.007 2.007 0 00-1.997 2.128l1.385 10C4.39 20.184 5.409 21 6.463 21z" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">New Signups</h3>
                <p class="text-3xl font-bold text-yellow-600 mt-2">{{ $userCount }}</p>
            </div>
        </div>
    </div>

    <!-- Tabel Admin -->
    <div class="bg-white p-8 rounded-lg shadow-md">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">User List</h2>
            <a href="{{ route('admin.create') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">
                Tambah Admin
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-semibold">
                    <tr>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Role</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-4 px-6">{{ $admin->name }}</td>
                            <td class="py-4 px-6">{{ $admin->email }}</td>
                            <td class="py-4 px-6">{{ $admin->role }}</td>
                            <td class="py-4 px-6 flex space-x-3">
                                <a href="{{ route('edit', $admin->id) }}" class="bg-yellow-500 text-white px-3 py-2 rounded-md hover:bg-yellow-600">
                                    Edit
                                </a>
                                <form action="{{ route('delete', $admin->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus admin ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
