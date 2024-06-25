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
        <a href="/register" class="block py-2 px-3 text-gray-900 rounded md:border-0 md:p-0 dark:text-white md:dark:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-purple-900">Daftar</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 text-gray-900 rounded md:border-0 md:p-0 dark:text-white md:dark:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-purple-900">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
