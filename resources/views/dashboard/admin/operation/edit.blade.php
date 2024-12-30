@extends('layouts.admin.app')

@section('title', 'Edit Pekerjaan')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Pekerjaan</h2>
    <form action="{{ route('operation.jobs.update', $job->job_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium">Judul</label>
            <input type="text" name="title" id="title" value="{{ $job->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-medium">Status</label>
            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="Pending" {{ $job->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Active" {{ $job->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Completed" {{ $job->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                <option value="Cancelled" {{ $job->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan Perubahan</button>
    </form>
</div>
@endsection
