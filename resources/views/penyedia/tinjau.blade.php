<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinjau Proposal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
        <h1 class="text-2xl font-semibold mb-4">Tinjau Proposal</h1>
        
        @foreach ($proposals as $proposal)
            <div class="mb-6 p-4 bg-gray-50 border border-gray-300 rounded-lg">
                <h2 class="text-xl font-semibold">{{ $proposal->pekerjaan->judul }}</h2>
                <p class="mt-2">{{ $proposal->deskripsi }}</p>
                <a href="{{ route('penyedia.pilih', $proposal->id) }}" class="inline-block mt-4 text-blue-500 hover:underline">Pilih Pekerja</a>
            </div>
        @endforeach
    </div>
</body>
</html>