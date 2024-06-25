
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>la</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
  <title>landing</title>

</head>
<body class="bg-[#A478B0] font-['poppins']"> 

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

  <section class="hero max-w-7xl mx-auto py-12">
    <div class="flex flex row justify-between">
      <div><h1 class="text-indigo-950 font-['Clash-Display'] text-[70px] leading-none">Jelajahi Toko <br>
      Anda Bersama<br>
      Kami.</h1>
    <p class="textbase leading-loose ">Kami menyediakan berbagai pilihan pakaian sesuai dengan keinginan Anda, dan kami akan memastikan Anda puas dengan pilihan Anda.
</p></div>
      <img src="images/gambar.png" class="h-[650px]">
    </div>
  </section>
  <!-- Hero Section -->
  <section class="bg-[#A478B0]-500 text-white text-center py-20">
        <div class="container mx-auto">
            <h1 class="text-5xl font-bold mb-4">Jelajahi<br>
            Toko Anda Bersama
            <br>
            Kami</h1>
            <p class="text-xl mb-8">Temukan berbagai pakaian stylish dan terjangkau</p>
            <a href="/katalog" class="bg-blue-500 text-white px-6 py-3 rounded-full font-semibold">Belanja sekarang</a>
            </div>
    </section>

   
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center md:items-start">
                <img src="images/logo-pbl.png" alt="JualBaju_Co" class="h-10 mb-4">
                <div class="flex space-x-4">
                    <a href="#"><img src="images/ig.png" alt="Twitter Logo" class="h-6"></a>
                    <a href="#"><img src="images/fb.png" alt="Facebook Logo" class="h-6"></a>
                    <a href="#"><img src="images/twiter.png" alt="Instagram Logo" class="h-6"></a>
                </div>
            </div>
           
            <div>
                <h4 class="text-xl font-bold mb-4">CONTACT US</h4>
                <p>Kota Batam, Kepulauan Riau</p>
                <p>0778-0987-2312</p>
            </div>
        </div>
    </footer>




</body>
</html>    