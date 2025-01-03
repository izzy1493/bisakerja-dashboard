@extends('layouts.superadmin.app')

@section('content')
<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold">Form Edit Admin</h3>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan error validasi jika ada -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Edit Admin -->
        <form action="{{ route('admin.edit', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')  
            
            <div class="mt-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" id="name" name="name" 
                    class="w-full border px-4 py-2 rounded mt-2 @error('name') border-red-500 @enderror" 
                    value="{{ $admin->name }}" 
                    required>
            </div>

            <div class="mt-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" 
                    class="w-full border px-4 py-2 rounded mt-2 @error('email') border-red-500 @enderror" 
                    value="{{ $admin->email }}" 
                    required>
            </div>

            <div class="mt-4">
                <label for="role" class="block text-gray-700">Role</label>
                <input type="text" id="role" name="role" 
                    class="w-full border px-4 py-2 rounded mt-2 @error('role') border-red-500 @enderror" 
                    value="{{ $admin->role }}" 
                    required>
            </div>

            <div class="mt-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" 
                    class="w-full border px-4 py-2 rounded mt-2 @error('password') border-red-500 @enderror">
            </div>

            <div class="mt-4">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_verified" value="1" 
                        class="sr-only peer" 
                        {{ $admin->is_verified == 1 ? 'checked' : '' }}>
                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900">AKTIFKAN</span>
                </label>
            </div>

            <div class="mt-6 flex justify-end space-x-4">
                <a href="/management-admin" type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Edit Admin
                </button>
                <a href="/management-admin" 
                   class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    KEMBALI
                </a>
            </div>
        </form>
    </div>
</main>
@endsection
