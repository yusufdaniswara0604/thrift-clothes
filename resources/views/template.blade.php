<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body class="bg-purple-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-purple-300 h-screen p-4">
            <div class="text-lg font-bold mb-4" >Lapakbaju_co</div>
            <nav class="space-y-2">
                <a href="#" class="block text-white font-semibold">Dashboard</a>
                <a href="#" class="block text-white font-semibold">Pelanggan</a>
                <a href="#" class="block text-white font-semibold" >Toko Saya</a>
                <a href="#" class="block text-white font-semibold">Data Barang</a>
                <a href="#" class="block text-white font-semibold">Keluar</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-4/5 p-4">
            <div class="flex justify-between items-center mb-4">
                <input type="text" placeholder="Cari Disini" class="p-2 border rounded w-1/2">
                <button class="bg-purple-500 text-white px-4 py-2 rounded">Tambah Data Barang</button>
            </div>
            <table class="min-w-full bg-white rounded">
                <thead>
                    <tr class="w-full bg-purple-500 text-white">
                        <th class="py-2 px-4">No</th>
                        <th class="py-2 px-4">ID</th>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">Harga</th>
                        <th class="py-2 px-4">Image</th>
                        <th class="py-2 px-4">Deskripsi</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">1</td>
                        <td class="py-2 px-4">26</td>
                        <td class="py-2 px-4">Baju</td>
                        <td class="py-2 px-4">Rp 15.000</td>
                        <td class="py-2 px-4">baju.jpg</td>
                        <td class="py-2 px-4">baju ini kuat dan tahan lama</td>
                        <td class="py-2 px-4">
                            <button class="text-blue-500">Edit</button>
                            <button class="text-red-500">Hapus</button>
                        </td>
                    </tr>
                    <!-- Repeat for other data rows -->
                </tbody>
            </table>
        </div>
    </div>
</body>
@vite('resources/js/app.js')
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</html>