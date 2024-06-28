<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Edit Barang</h1>
        <form action="/barangs/{{ $barang->ID_Barang }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->Nama_Barang }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $barang->Deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="{{ $barang->Harga }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Barang</button>
            </div>
        </form>
    </div>
    </body>
@vite('resources/js/app.js')
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</html>