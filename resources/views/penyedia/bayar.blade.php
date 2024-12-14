<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Fee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-100 font-sans antialiased">

    <div class="max-w-xl mx-auto p-8 bg-white rounded-3xl shadow-xl mt-16">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Bayar Fee</h1>

        <form action="{{ route('penyedia.store_bayar_fee') }}" method="POST">
            @csrf

            <div class="space-y-6">
                <div>
                    <label for="metode_pembayaran" class="block text-lg font-medium text-gray-700">Metode Pembayaran</label>
                    <input type="text" id="metode_pembayaran" name="metode_pembayaran" class="w-full p-4 mt-2 border-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-300" required>
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-blue-500 text-white py-3 mt-6 rounded-lg hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 transition duration-300">Bayar Fee</button>
        </form>
    </div>

</body>
</html>
