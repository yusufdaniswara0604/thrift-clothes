<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
  <!-- Navbar -->
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900" style="background-color: #F1C8FC;" >
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
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

    <!-- Welcome banner with background image -->
    <div class="bg-gray-100 p-6 text-center  mb-8"
     style="background-image: url('{{ asset('images/banner.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 300px; /* Atur tinggi sesuai kebutuhan */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ">
  <h1 class="text-2xl font-bold" style="color: #F1C8FC;">Selamat datang di katalog lapakbaju_co</h1>
  <p style="color: #F1C8FC;">Buka Lembaran Baru dengan Style Baru</p>
</div>

    <!-- Product catalog -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
      <!-- Product Card -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Pink" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Pink</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <!-- Repeat similar structure for other products -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Hitam" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Hitam</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Biru" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Biru</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Merah" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Merah</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Putih" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Putih</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Abu-abu" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Abu-abu</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Hijau" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Hijau</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <img src="{{ asset('images/baju.png') }}" alt="Kaos Kuning" class="h-full w-full object-cover">
        </div>
        <div class="p-4 bg-purple-200">
          <h2 class="text-lg font-bold">Kaos Kuning</h2>
          <p class="text-gray-700">50.000</p>
          <div class="flex justify-between mt-4">
          <button style="background-color: #540081; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">DETAIL</button>
          <button style="background-color: #A600FF; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">PESAN</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @vite('resources/js/app.js')
  <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</body>
</html>
