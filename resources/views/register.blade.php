<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('images/pblbg.jpg');
            background-size: cover;
            background-position: center;
        }

        .bg-purple-300 {
            background-color: #D599E5;
        }

        .bg-white {
            background-color: #DEEBF8;
        }

        .register-title {
            color: black;
            font-style: italic;
        }

        .register-button {
            color: black;
            padding: 8px 12px;
            font-size: 0.8rem;
            height: auto;
        }

        .login-link {
            color: black;
        }

        .login-link:hover {
            color: #DEEBF8;
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-purple-300 flex items-center justify-center h-screen">
    <div class="bg-purple-300 p-8 rounded-lg shadow-lg w-96">
        <div class="flex justify-center mb-4">
            <div>
                <img src="{{ asset('images/logo-pbl.png') }}" alt="Logo" class="w-24 h-24">
            </div>
        </div>
        <h2 class="text-center text-2xl font-bold mb-6 register-title">REGISTER</h2>

        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="nama_pembeli" placeholder="Nama Pembeli" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="text" name="alamat" placeholder="Alamat" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="text" name="notelp" placeholder="Nomor Telepon" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="text" name="nama_instagram" placeholder="Nama Instagram" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="password" name="kata_sandi" placeholder="Kata Sandi" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="password" name="konfir_kata_sandi" placeholder="Konfirmasi Kata Sandi" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-white text-black font-bold px-6 py-2 rounded-lg shadow-lg register-button">DAFTAR</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <span>Sudah memiliki akun? </span><a href="/login" class="login-link">Masuk</a>
        </div>
    </div>
</body>

</html>
