@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto px-6 py-12 text-center">
        <h2 class="text-2xl font-semibold mb-4">Tugas Selesai!</h2>
        <p class="mt-4">Kamu telah berhasil menyelesaikan tugas ini dan mendapatkan reward sebesar <strong>{{ $reward }}</strong></p>
        <a href="{{ route('jobs.index') }}" class="text-blue-500 mt-4 inline-block">Kembali ke Daftar Pekerjaan</a>
    </div>
@endsection
