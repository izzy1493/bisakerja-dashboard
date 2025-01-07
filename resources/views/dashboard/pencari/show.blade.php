@extends('layouts.pencari.app')

@section('content')
<section class="py-16 px-6 bg-white">
    <div class="max-w-screen-xl mx-auto">
          <!-- Pesan Sukses/Error -->
          @if(session('success'))
          <div class="bg-green-500 text-white p-4 rounded mb-4">
              {{ session('success') }}
          </div>
      @endif

      @if(session('error'))
          <div class="bg-red-500 text-white p-4 rounded mb-4">
              {{ session('error') }}
          </div>
      @endif
      
        <div class="bg-white mt-6 p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-900 mb-6">{{ $job->title }}</h2>
            <p class="text-gray-600 mb-6">{{ $job->description }}</p>

            <h3 class="text-xl font-semibold text-gray-900">Persyaratan:</h3>
            @if(is_array($job->requirements) && count($job->requirements) > 0)
                <ul class="list-disc list-inside text-left text-gray-700 mb-6">
                    @foreach ($job->requirements as $requirement)
                        <li>{{ $requirement }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">Tidak ada persyaratan yang ditentukan.</p>
            @endif

          

            <!-- Form untuk melamar pekerjaan -->
            <div class="mt-6">
                <form action="{{ route('jobs.apply', $job->job_id) }}" method="POST">
                    @csrf
                    <button type="submit">Lamar Sekarang</button>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection
