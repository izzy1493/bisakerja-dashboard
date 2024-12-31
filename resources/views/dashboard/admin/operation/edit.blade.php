@extends('layouts.admin.app')

@section('title', 'Edit Pekerjaan')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Informasi Pekerjaan</h2>

        <form action="route('admin.operations.update', $job->job_id)" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Judul Pekerjaan -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Judul Pekerjaan</label>
                <input type="text" name="title" id="title" value="{{ old('title', $job->title) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Status Pekerjaan -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="pending" {{ $job->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="active" {{ $job->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="completed" {{ $job->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ $job->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            <!-- Deskripsi Pekerjaan -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi Pekerjaan</label>
                <textarea name="description" id="description" rows="4" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description', $job->description) }}</textarea>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('jobs.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg shadow hover:bg-gray-400">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@endsection
