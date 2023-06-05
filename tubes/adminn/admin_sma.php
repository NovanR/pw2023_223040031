<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require('../views/functions.php');
$sma = query('SELECT * FROM sma');
$kelas10 = query('SELECT * FROM sma WHERE nama = "kelas_10" ');
$kelas11 = query('SELECT * FROM sma WHERE nama = "kelas_11" ');
$kelas12 = query('SELECT * FROM sma WHERE nama = "kelas_12" ');
$icon = '../img/math.png';
$css = '../css/style4.css';
$title = 'Halaman Admin';
$font = '../fontawesome/css/all.css';


if (isset($_POST["cari"])) {
    $sma = cari_sma($_POST["search"]);
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
        <h3>Daftar Materi</h3>
        <br><br>

        <div class="d-grid gap-2 d-md-block">
            <a href="#kelas10" class="badge text-bg-primary">Kelas 10</a>
            <a href="#kelas11" class="badge text-bg-primary">Kelas 11</a>
            <a href="#kelas12" class="badge text-bg-primary">Kelas 12</a>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <a href="../index.php" class="badge text-bg-primary">Kembali</a>
            <a href="admin.php" class="badge text-bg-danger">SD</a>
            <a href="admin_smp.php" class="badge text-bg-secondary">SMP</a>
        </div>
        <br>


        <form action="" method="post">
            <div class="input-group mb-3" style="width: 300px;">
                <input type="text" name="search" id="keyword" class="form-control" placeholder="Cari data.." aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari" id="button-addon2" id="tombol"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        <br>
        <a href="../cetak_sma.php" class="badge text-bg-primary" style="padding: 8px;"><i class="fa-solid fa-print" style="margin-right: 10px;"></i>Cetak Data</a>
        <br><br>



        <div class="table-responsive" id="semua_data_sma">
            <table class="table table-striped table-bordered table-hover border-primary">
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

                    <?php foreach ($sma as $semua) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $semua['gambar']; ?>" width="200"></td>
                            <td><?= $semua['judul']; ?></td>
                            <td><?= $semua['penjelasan']; ?></td>
                            <td><?= $semua['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_sma.php?id=<?= $semua['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $semua['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Kelas 10 -->
        <h4 id="kelas10">Kelas 10</h4>
        <a href="../tambah/tambah_sma.php" class="btn btn-primary">Tambah data materi</a>
        <br><br>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover border-primary">
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

                    <?php foreach ($kelas10 as $sma10) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $sma10['gambar']; ?>" width="200"></td>
                            <td><?= $sma10['judul']; ?></td>
                            <td><?= $sma10['penjelasan']; ?></td>
                            <td><?= $sma10['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_sma.php?id=<?= $sma10['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $sma10['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br>

            <!-- Kelas 11 -->
            <h4 id="kelas11">Kelas 11</h4>
            <a href="../tambah/tambah_sma.php" class="btn btn-primary">Tambah data materi</a>
            <br><br>

            <table class="table table-striped table-bordered table-hover border-primary">
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

                    <?php foreach ($kelas11 as $sma11) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $sma11['gambar']; ?>" width="200"></td>
                            <td><?= $sma11['judul']; ?></td>
                            <td><?= $sma11['penjelasan']; ?></td>
                            <td><?= $sma11['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_sma.php?id=<?= $sma11['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $sma11['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br>

            <!-- Kelas 12 -->
            <h4 id="kelas12">Kelas 12</h4>
            <a href="../tambah/tambah_sma.php" class="btn btn-primary">Tambah data materi</a>
            <br><br>

            <table class="table table-striped table-bordered table-hover border-primary">
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

                    <?php foreach ($kelas12 as $sma12) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $sma12['gambar']; ?>" width="200"></td>
                            <td><?= $sma12['judul']; ?></td>
                            <td><?= $sma12['penjelasan']; ?></td>
                            <td><?= $sma12['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_sma.php?id=<?= $sma12['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $sma12['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br><br>


        <div class="link" style="text-align: center;">
            <a class="btn btn-danger" href="admin.php" role="button">SD</a>
            <a class="btn btn-primary" href="admin_smp.php" role="button">SMP</a>
        </div>
        <a href="login.php">Logout</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../js/script_sma.js"></script>
</body>

</html>