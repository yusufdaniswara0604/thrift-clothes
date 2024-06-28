<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <img src="{{ asset('dist/images/logo/logo-pbl.png') }}" alt="Logo" class="w-24 h-24">
            </div>
        </div>
        <h2 class="text-center text-2xl font-bold mb-6 register-title">REGISTER</h2>

        {!! Form::open(['route' => 'register', 'method' => 'post']) !!}
        @csrf

        <div class="mb-4">
            {!! Form::text('name', null, [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Nama Pembeli',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::email('email', null, [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Email',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::text('alamat', null, [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Alamat',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::text('notelp', null, [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Nomor Telepon',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::text('nama_instagram', null, [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Nama Instagram',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::password('password', [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Kata Sandi',
            ]) !!}
        </div>

        <div class="mb-4">
            {!! Form::password('password_confirmation', [
                'class' => 'w-full px-3 py-2 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-purple-600',
                'placeholder' => 'Konfirmasi Kata Sandi',
            ]) !!}
        </div>

        <div class="flex justify-center">
            {!! Form::submit('DAFTAR', [
                'class' => 'bg-white text-black font-bold px-6 py-2 rounded-lg shadow-lg register-button',
            ]) !!}
        </div>
        {!! Form::close() !!}
        <div class="text-center mt-4">
            <span>Sudah memiliki akun? </span><a href="{{ route('login') }}" class="login-link">Masuk</a>
        </div>
    </div>
</body>

</html>
