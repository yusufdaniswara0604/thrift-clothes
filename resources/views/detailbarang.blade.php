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
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900" style="background-color: #E39FF6;" >
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/landing" class="flex items-center">
      <img src="{{ asset('images/logo-pbl.png') }}" class="h-8" alt="PBL Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white ml-2">lapakbaju_co</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded md:border-0 md:p-0 dark:text-white md:dark:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-purple-900">Daftar</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded md:border-0 md:p-0 dark:text-white md:dark:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-purple-900">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
                <a href="/katalog" class="bg-purple-300 hover:bg-purple-200 text-black py-2 px-4 rounded">KEMBALI</a>
                <a href="/checkout" class="bg-purple-300 hover:bg-purple-200 text-black py-2 px-4 rounded">BELI SEKARANG</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
