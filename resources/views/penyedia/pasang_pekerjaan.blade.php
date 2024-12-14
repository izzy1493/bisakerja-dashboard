

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang Pekerjaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
        <h1 class="text-2xl font-semibold mb-4">Pasang Pekerjaan</h1>
        <form action="{{ route('penyedia.store_pekerjaan') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul Pekerjaan</label>
                <input type="text" id="judul" name="judul" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Pekerjaan</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required></textarea>
            </div>

            <div class="mb-4">
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="tenggat_waktu" class="block text-sm font-medium text-gray-700">Tenggat Waktu</label>
                <input type="date" id="tenggat_waktu" name="tenggat_waktu" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">Pasang Pekerjaan</button>
        </form>
    </div>
</body>
</html>


