<?php
$title = 'Daftar';
$css = 'css/style3.css';
$font = 'fontawesome/css/all.css';
$icon = 'img/math.png';


require('views/functions.php');

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert ('User Baru Berhasil Ditambahkan');
          </script>
          ";
  } else {
    echo mysqli_error($conn);
  }
}
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
        <input type="hidden" name="role" id="role" value="user">
        <label for="password" style="margin-top: -10px" ;>Masukkan Password:
        </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-key"></i>
          <input type="password" name="password" id="password" placeholder="Password" required style="transform: translateX(10px)" ; />
        </div>
        <br />
        <label for="password2" style="margin-top: -10px" ;>Konfirmasi Password:
        </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-key"></i>
          <input type="password" name="password2" id="password2" placeholder="Password" required style="transform: translateX(10px)" ; />
        </div>
        <br />
        <button type="submit" name="register" style="margin-top: -10px; width: 30%">Buat Akun</button>
      </form>
      <a href="login.php" style="margin-top: 10px; margin-right: 8px;"><i class="fa-sharp fa-solid fa-arrow-left" style="margin-right: 5px;"></i>Kembali</a>
    </div>
    <div class="gambar">
      <img src="img/math.png" alt="logo" />
    </div>
  </div>