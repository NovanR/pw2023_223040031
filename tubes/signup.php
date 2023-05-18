<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Sekarang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="icon" href="img/math.png" type="image/x-icon" />
  <link rel="stylesheet" href="fontawesome/css/all.css" />
  <link rel="stylesheet" href="css/style3.css" />
  <style>
    .login2 .login {
      background: radial-gradient(circle at 10% 20%, rgb(89, 195, 195) 0%, rgb(14, 175, 181) 90%);
    }
  </style>
</head>

<body>
  <div class="login2">
    <div class="login">
      <h2 style="
            border-bottom: 1px solid silver;
            padding: 5px;
            text-align: center;
          ">
        Daftar Sekarang
      </h2>
      <form action="" method="post">
        <label for="email">Masukkan Email: </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" style="transform: translateX(10px)" required />
        </div>
        <br />
        <label for="password" style="margin-top: -10px" ;>Masukkan Password:
        </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-key"></i>
          <input type="password" name="password" id="password" placeholder="Password" required style="transform: translateX(10px)" ; />
        </div>
        <br />
        <label for="password" style="margin-top: -10px" ;>Konfirmasi Password:
        </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-key"></i>
          <input type="password" name="password" id="password" placeholder="Password" required style="transform: translateX(10px)" ; />
        </div>
        <br />
        <button type="submit" style="margin-top: -10px; width: 30%">Buat Akun</button>
      </form>
    </div>
    <div class="gambar">
      <img src="img/math.png" alt="logo" />
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>