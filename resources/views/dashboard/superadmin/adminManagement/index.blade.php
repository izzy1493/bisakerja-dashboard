@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Management Admin</h2>
        <p class="mt-4 text-gray-600">Halaman ini digunakan untuk mengelola admin aplikasi.</p>
    </div>

    <!-- Tombol Tambah Admin -->
    

    <!-- Main Content -->
    
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card Example -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">Total Users</h2>
                <p class="text-2xl">{{$userCount}}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">Active Sessions</h2>
                <p class="text-2xl">456</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="font-bold">New Signups</h2>
                <p class="text-2xl">{{$userCount}}</p>
            </div>
        </div>
        

        <!-- Table Example -->
        <div class="mt-8 bg-white p-4 rounded-lg shadow">
            <div class="flex flex-wrap items-center justify-between mb-4">
            <h2 class="font-bold">User List</h2>

        <a href="{{ route('admin.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
            Tambah Admin
        </a>
    </div>

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
                @foreach ($admins as $admin)
                    <tr>
                    <td class="border-b py-2 px-4"> {{ $admin->name }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->email }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->role}}</td>
                        
                        <td class="border-b py-2 px-4">
                        <a href="{{ route('edit', $admin->id)}}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                    <td class="border-b py-2 px-4"> {{ $admin->name }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->email }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->role}}</td>
                        
                        <td class="border-b py-2 px-4">
                        <a href="{{ route('edit', $admin->id)}}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                    <td class="border-b py-2 px-4"> {{ $admin->name }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->email }}</td>
                        <td class="border-b py-2 px-4">{{ $admin->role}}</td>
                        
                        <td class="border-b py-2 px-4">
                        <a href="{{ route('edit', $admin->id)}}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>



@endsection
