<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Pekerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
        <h1 class="text-2xl font-semibold mb-4">Pilih Pekerja</h1>

        <div class="mb-4">
            <p><strong>Nama Pekerja:</strong> {{ $pekerja->nama }}</p>
            <p><strong>Email:</strong> {{ $pekerja->email }}</p>
            <p><strong>Deskripsi:</strong> {{ $pekerja->bio }}</p>
        </div>

        <form action="{{ route('penyedia.konfirmasi_selesai') }}" method="POST">
            @csrf
            <input type="hidden" name="pekerjaan_id" value="{{ $proposal->pekerjaan_id }}">

            <div class="mb-4">
                <label for="ulasan" class="block text-sm font-medium text-gray-700">Ulasan</label>
                <textarea id="ulasan" name="ulasan" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required></textarea>
            </div>

            <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600">Konfirmasi Selesai</button>
        </form>
    </div>
</body>
</html>