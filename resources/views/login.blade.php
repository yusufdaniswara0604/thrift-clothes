<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <title>Login</title>
  <style>
    body {
      background-image: url('images/pblbg.jpg');
      /* Sesuaikan dengan path yang benar */
      background-size: cover;
      background-position: center;
    }

    .bg-purple-300 {
      background-color: #D599E5;
      /* Ganti warna latar belakang dengan kode warna E39FF6 */
    }

    .bg-white {
      background-color: #DEEBF8;
    }

    .register-title {
      color: black;
      /* Ubah warna teks menjadi hitam */
      font-style: italic;
      /* Atur gaya teks menjadi miring */
    }

    .register-button {
      color: black;
      /* Warna teks */
      padding: 8px 12px;
      /* Padding horizontal dan vertikal */
      font-size: 0.8rem;
      /* Ukuran font */
      height: auto;
      /* Atur ketinggian, bisa juga menggunakan height: 2rem; sesuai kebutuhan */
    }

    .register-link {
      color: black;
      /* Warna teks hitam untuk "Sudah memiliki akun?" */
    }

    .register-link:hover {
      color: #DEEBF8;
      /* Warna teks biru saat dihover untuk "Login" */
      text-decoration: underline;
      /* Garis bawah saat dihover */
    }
  </style>
</head>

<body class="bg-purple-300 flex items-center justify-center h-screen">
  <div class="bg-purple-300 p-8 rounded-lg w-96">
    <div class="flex justify-center mb-4">
      <div>
        <img src="{{ asset('images/logo-pbl.png') }}" alt="Logo" class="w-24 h-24">
      </div>
    </div>
    <h2 class="text-center text-2xl font-bold mb-6 register-title">LOGIN</h2>

    <form action="/index" method="POST">
      @csrf
      <div class="mb-4">
        <input type="text" name="username" placeholder="Nama Pengguna/Instagram" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
      </div>
      <div class="mb-4">
        <input type="password" name="kata sandi" placeholder="Kata Sandi" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
      </div>
      <div class="flex justify-center">
        <button type="submit" class="bg-white text-black font-bold px-6 py-2 rounded-lg shadow-lg register-button">MASUK</button>

      </div>

    </form>
    <div class="text-center mt-4">
      <span>Belum punya akun? </span><a href="/register" class="register-link">Daftar</a>
    </div>


  </div>
</body>
@vite('resources/js/app.js')
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

</html>