<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <title>Register</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <p style="font-size: 2rem; font-weihgt:850;">REGISTER</p>
      <div class="input-group"><input type="text" placeholder="Username/Instagram" name="username"></div>
      <div class="input-group"><input type="text" placeholder="Email" name="email"></div>
      <div class="input-group"><input type="password" placeholder="Kata Sandi" name="kata sandi"></div>
      <div class="input-group"><input type="password" placeholder="Konfir Kata Sandi" name="konfir kata sandi"></div>
      <div class="input-group"><button name="submit" class="btn">Register</button></div>
      <p class="login-register-text">Sudah memiliki akun? <a href="index.blade.php">Login</a></p>
    </form>
  </div>


</body>
@vite('resources/js/app.js')
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

</html>