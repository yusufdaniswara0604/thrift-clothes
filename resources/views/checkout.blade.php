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
</div>
    <div class="container mx-auto py-10 px-4">
    <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <h2 class="text-2xl font-semibold text-gray-800">Checkout</h2>
            <p class="text-gray-600 mt-2">Lengkapi informasi pengiriman dan pembayaran Anda.</p>
        </div>
        <div class="bg-gray-100 px-6 py-4">
            <!-- Form Checkout -->
            <form action="#" method="POST">
                <!-- Nama -->
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" class="mt-1 px-3 py-2 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3" class="mt-1 px-3 py-2 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                </div>

                <!-- Metode Pembayaran -->
                <div class="mb-4">
                    <label for="metode_pembayaran" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                    <select id="metode_pembayaran" name="metode_pembayaran" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                        <option value="transfer_bank">Transfer Bank</option>
                        <option value="ovo">COD</option>
                    </select>
                </div>

                <!-- Tombol Checkout -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-purple-300 hover:bg-purple-200 text-black py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-70">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
