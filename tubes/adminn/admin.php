<?php
session_start();

if ($_SESSION['role'] !== 'admin') {
  header('Location: ../index.php');
  exit;
}

// if (!isset($_SESSION['login'])) {
//   header("Location: ../index.php");
//   exit;
// }



require('../views/functions.php');
$sekolah_dasar = query('SELECT * FROM sd1');
$sekolah_dasar1 = query('SELECT * FROM sd1 WHERE id_kat = "1" ');
$sekolah_dasar2 = query('SELECT * FROM sd1 WHERE id_kat = "2" ');
$sekolah_dasar3 = query('SELECT * FROM sd1 WHERE id_kat = "3" ');
$sekolah_dasar4 = query('SELECT * FROM sd1 WHERE id_kat = "4" ');
$sekolah_dasar5 = query('SELECT * FROM sd1 WHERE id_kat = "5" ');
$sekolah_dasar6 = query('SELECT * FROM sd1 WHERE id_kat = "6" ');
$icon = '../img/math.png';
$css = '../css/style4.css';
$title = 'Halaman Admin';
$font = '../fontawesome/css/all.css';


// Tombol Cari Ditekan
if (isset($_POST["cari"])) {
  $sekolah_dasar = cari_sd($_POST["search"]);
}


?>



<?php require('../views/partials/css.php')  ?>


<style>
  html,
  body {
    height: 100%;
  }

  .tabel {
    padding: 10px;
  }

  a {
    text-decoration: none;
  }
</style>
</head>

<body>

  <h1>Selamat Datang Admin</h1>
  <div class="tabel">
    <h3>Daftar Materi Sekolah Dasar</h3>
    <br><br>

    <div class="d-grid gap-2 d-md-block">
      <a href="#kelas1" class="badge text-bg-primary">Kelas 1</a>
      <a href="#kelas2" class="badge text-bg-primary">Kelas 2</a>
      <a href="#kelas3" class="badge text-bg-primary">Kelas 3</a>
      <a href="#kelas4" class="badge text-bg-primary">Kelas 4</a>
      <a href="#kelas5" class="badge text-bg-primary">Kelas 5</a>
      <a href="#kelas6" class="badge text-bg-primary">Kelas 6</a>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <a href="../index.php" class="badge text-bg-primary">Kembali</a>
      <a href="admin_smp.php" class="badge text-bg-primary">SMP</a>
      <a href="admin_sma.php" class="badge text-bg-secondary">SMA</a>
    </div>

    <br>





    <form action="" method="post">
      <div class="input-group mb-3" style="width: 300px;">
        <input type="text" name="search" class="form-control" id="keyword" placeholder="Cari data.." aria-describedby="button-addon2" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari" id="button-addon2" id="tombol"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </form>
    <br>

    <a href="../cetak.php" class="badge text-bg-primary" style="padding: 8px;"><i class="fa-solid fa-print" style="margin-right: 10px;"></i>Cetak Data</a>
    <br><br>



    <div class="table-responsive" id="semua_data">
      <table class="table table-bordered table-hover border-primary" id="cetak">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- kelas 1 -->

    <h4 id="kelas1">Kelas 1</h4>
    <a href="../tambah/tambah.php" class="btn btn-primary">Tambah data materi</a>
    <br><br>

    <div class="table-responsive">
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar1 as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>

      <!-- kelas 2 -->
      <h4 id="kelas2">Kelas 2</h4>
      <a href="../tambah/tambah.php" class="btn btn-primary" style="margin-bottom: 20px;">Tambah data materi</a>
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar2 as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>

      <!-- Kelas 3 -->
      <h4 id="kelas3">Kelas 3</h4>
      <a href="../tambah/tambah.php" class="btn btn-primary" style="margin-bottom: 20px;">Tambah data materi</a>
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar3 as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>

      <!-- Kelas 4 -->
      <h4 id="kelas4">Kelas 4</h4>
      <a href="../tambah/tambah.php" class="btn btn-primary" style="margin-bottom: 20px;">Tambah data materi</a>
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar4 as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>


      <!--Kelas 5 -->
      <h4 id="kelas5">Kelas 5</h4>
      <a href="../tambah/tambah.php" class="btn btn-primary" style="margin-bottom: 20px;">Tambah data materi</a>
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar5 as $sd) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>

      <!-- Kelas 6 -->
      <h4 id="kelas6">Kelas 6</h4>
      <a href="../tambah/tambah.php" class="btn btn-primary" style="margin-bottom: 20px;">Tambah data materi</a>
      <table class="table table-bordered table-hover border-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penjelasan</th>
            <th scope="col">Youtube</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>

          <?php foreach ($sekolah_dasar6 as $sd) : ?>

            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="../img/<?= $sd['gambar']; ?>" width="200"></td>
              <td><?= $sd['judul']; ?></td>
              <td><?= $sd['penjelasan']; ?></td>
              <td><?= $sd['youtube']; ?></td>
              <td>
                <a href="../ubah/ubah.php?id=<?= $sd['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br><br>

    </div>




    <div class="link" style="text-align: center;">
      <a class="btn btn-primary" href="admin_smp.php" role="button">SMP</a>
      <a class="btn btn-secondary" href="admin_sma.php" role="button">SMA</a>
      <a class="btn btn-primary" href="../index.php"><i class="fa-sharp fa-solid fa-arrow-left-from-line"></i>Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js%22%3E"></script>
</body>

</html>