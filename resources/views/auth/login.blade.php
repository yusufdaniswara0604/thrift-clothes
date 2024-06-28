<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('dist/images/logo/bg.jpeg');
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

        .register-link {
            color: black;
        }

        .register-link:hover {
            color: #DEEBF8;
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-purple-300 flex items-center justify-center h-screen">
    <div class="bg-purple-300 p-8 rounded-lg w-96">
        <div class="flex justify-center mb-4">
            <div>
                <img src="{{ asset('dist/images/logo/logo-pbl.png') }}" alt="Logo" class="w-24 h-24">
            </div>
        </div>
        <h2 class="text-center text-2xl font-bold mb-6 register-title">LOGIN</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="email" placeholder="Email"
                    class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-white text-black font-bold px-6 py-2 rounded-lg shadow-lg register-button">MASUK</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <span>Belum punya akun? </span><a href="{{ route('register') }}" class="register-link">Daftar</a>
        </div>
    </div>
</body>


</html>
