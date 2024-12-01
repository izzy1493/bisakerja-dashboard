@extends('layouts.dashboard')

@section('content')
<div class="p-6 bg-white border rounded-lg shadow">
    <h1 class="text-2xl font-bold text-gray-900">
        Welcome, Penyedia Kerja!
    </h1>
    <p class="mt-4 text-gray-600">Manage your job postings and find the best talent.</p>

    <!-- Example Content -->
    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-800">Your Job Listings</h2>
        <ul class="mt-4 space-y-2">
            <li class="p-4 bg-gray-50 border rounded">Job 1: Web Developer</li>
            <li class="p-4 bg-gray-50 border rounded">Job 2: Graphic Designer</li>
        </ul>
    </div>
</div>
@endsection
