<?php
$title = 'Daftar';
$css = 'css/style3.css';
?>

<?php require('views/partials/css.php')  ?>

<style>
  .login2 .login {
    background: radial-gradient(circle at 10% 20%, rgb(89, 195, 195) 0%, rgb(14, 175, 181) 90%);
  }

  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .login2 {
    margin-top: -100px;
  }

  @media(max-width: 1200px) {
    .login2 .gambar {
      display: none;
    }
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
