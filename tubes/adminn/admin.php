<?php
require('../views/functions.php');
$sekolah_dasar1 = query('SELECT * FROM sd1 WHERE nama = "kelas_1" ');
$sekolah_dasar2 = query('SELECT * FROM sd1 WHERE nama = "kelas_2" ');
$sekolah_dasar3 = query('SELECT * FROM sd1 WHERE nama = "kelas_3" ');
$sekolah_dasar4 = query('SELECT * FROM sd1 WHERE nama = "kelas_4" ');
$sekolah_dasar5 = query('SELECT * FROM sd1 WHERE nama = "kelas_5" ');
$sekolah_dasar6 = query('SELECT * FROM sd1 WHERE nama = "kelas_6" ');
$css = '../css/style4.css';
$title = 'Halaman Admin';
$font = '../fontawesome/css/all.css';
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
</style>
</head>

<body>

  <h1>Selamat Datang Admin</h1>
  <div class="tabel">
    <h3>Daftar Materi</h3>
    <br><br>

    <!-- kelas 1 -->

    <h4>Kelas 1</h4>
    <a href="../tambah/tambah.php" class="btn btn-primary">Tambah data materi</a>
    <br><br>
    <div>
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
    <h4>Kelas 2</h4>
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
    <h4>Kelas 3</h4>
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
    <h4>Kelas 4</h4>
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
              <a href="../ubah/ubah.php?id=<?= $sd['id'];?>" class="badge text-bg-warning">Ubah</a> |
              <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <br><br>


    <!--Kelas 5 -->
    <h4>Kelas 5</h4>
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
              <a href="../ubah/ubah.php?id=<?= $sd['id'];?>" class="badge text-bg-warning">Ubah</a> |
              <a href="../hapus.php?id=<?= $sd['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <br><br>

    <!-- Kelas 6 -->
    <h4>Kelas 6</h4>
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
              <a href="../ubah/ubah.php?id=<?= $sd['id'];?>" class="badge text-bg-warning">Ubah</a> |
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
  </div>
  <a href="../login.php"><i class="fa-sharp fa-solid fa-arrow-left-from-line"></i>Logout</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>