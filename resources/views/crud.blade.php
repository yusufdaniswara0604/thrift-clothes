<!DOCTYPE html>
<html lang="en">
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
            <div class="flex items-center">
            <img src="{{ asset('images/logo-pbl.png') }}" alt="logo" class="w-12 h-12 mr-3">
            <div class="text-lg font-bold mb-4"> Lapakbaju_co</div>            
            </div>
            <nav class="space-y-2">
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
</svg>

                <a href="#" class="block text-white font-semibold">Dashboard</a>
                </div>
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
</svg>
            <a href="#" class="block text-white font-semibold">Pelanggan</a>          
            </div>
            <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
</svg>
            <a href="#" class="block text-white font-semibold">Toko Saya</a>
            </div>
            <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 4v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2m6-16v2m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v10m6-16v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2"/>
</svg>

            <a href="#" class="block text-white font-semibold">Data Barang</a>
            </div>
            <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
</svg>


            <a href="#" class="block text-white font-semibold">Keluar</a>
            </div>
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
</html>
