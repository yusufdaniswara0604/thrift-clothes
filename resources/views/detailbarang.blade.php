<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-grey-400">
<div class style="background-color: #E39FF6;">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center">
                    <span class="ml-2 text-xl font-bold">Lapakbaju_co</span>
                </a>
            </div>


            <!-- Menu -->
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                  
                </div>
            </div>

            <!-- Cart and User Icons -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Cart icon -->
                <a href="#" class="text-gray-700 hover:text-gray-900 p-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900">Login</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900">Register</a>
                </a>
        
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on mobile state -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900">Home</a>
            
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 py-8">

    <!-- Judul Halaman -->
    <h1 class="text-3xl font-bold mb-4">Brokat Muslim</h1>

    <!-- Grid untuk Foto dan Deskripsi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Foto Barang -->
        <div class="flex justify-center">
            <img src="{{ asset('images/dress.png') }}" alt="Baju" class="rounded-lg shadow-lg">
        </div>

        <!-- Deskripsi Barang -->
        <div>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-2">Baju Muslim Brokat</h2>
                <p class="text-gray-700 mb-2">Baju muslim dengan bahan yang nyaman dipakai kondangan, pengajian, lebaran, dll.</p>
                <p class="text-gray-700 mb-2">Warna: Gold</p>
                <p class="text-gray-700 mb-2">Ukuran: S, M, L</p>
                <p class="text-gray-700">Harga: Rp 150.000</p>
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-4">
                <a href="#" class="bg-purple-300 hover:bg-purple-200 text-black py-2 px-4 rounded">KEMBALI</a>
                <a href="#" class="bg-purple-300 hover:bg-purple-200 text-black py-2 px-4 rounded">BELI SEKARANG</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
