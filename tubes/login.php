<?php

session_start();

if (isset($_SESSION['login'])) {
  header('Location: index.php');
  exit;
}

require('views/functions.php');

//cek tombol submit  
if (isset($_POST["submit"])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' ");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

      // set session
      $_SESSION['login'] = true;

      $_SESSION['email'] = $row['email'];
      $_SESSION['role'] = $row['role'];

      if ($row['role'] == 'admin') {
        header("Location: adminn/admin.php");
      } elseif ($row['role'] == 'user') {
        header("Location: index.php");
        exit;
      }
    }
  }
  $error = true;
}

?>


<?php
$title = 'Login';
$css = 'css/style2.css';
$font = 'fontawesome/css/all.css';
$icon = 'img/math.png';
?>

<?php require('views/partials/css.php')  ?>

<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .login {
    background: radial-gradient(circle at 10% 20%, rgb(89, 195, 195) 0%, rgb(14, 175, 181) 90%);
  }

  form button {
    background: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);
  }

  .login2 {
    margin-top: -100px;
  }

  .login2 .login form {
    color: black;
  }

  .footer {
    padding-top: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    height: 200px;
    background-color: darkturquoise;
  }

  .footer .contact i {
    margin-right: 5px;
  }

  @media(max-width: 1200px) {
    .login2 {
      margin-top: 0;
    }

    .login2 .gambar {
      display: none;
    }

  }
</style>

</head>

<body>

  <div class="login2">


    <div class="login">
      <a href="index.php" style="margin-bottom: 5px;"><i class="fa-sharp fa-solid fa-arrow-left" style="font-size: 20px;"></i></a>
      <h2 style="
            border-bottom: 1px solid silver;
            padding: 5px;
            color: black;
            text-align: center;
          ">
        Login
      </h2>
      <form action="" method="post">
        <label for="email">Masukkan Email: </label>
        <br />
        <div class="input-icons">
          <i class="fa-solid fa-envelope"></i>
          <input type="text" name="email" id="email" placeholder="Email" style="transform: translateX(10px)" required autocomplete="off" />
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
        <button type="submit" name="submit" style="margin-top: -10px">Login</button>
        <?php if (isset($error)) :  ?>
          <p style="margin-left: 20px; color: red; font-style: italic;">Username / Password salah</p>
        <?php endif;  ?>
      </form>
      <div class="regist">
        <a href="signup.php" style="margin-top: 20px;">Buat akun anda <i class="fa-solid fa-arrow-right" style="margin-left: 5px;"></i></a>
        <br>


      </div>
    </div>


    <div class="gambar">
      <img src="img/math.png" alt="logo" />
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>