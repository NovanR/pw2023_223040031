<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require('../views/functions.php');
$smp = query('SELECT * FROM smp');
$kelas7 = query('SELECT * FROM smp WHERE id_kat = "7" ');
$kelas8 = query('SELECT * FROM smp WHERE id_kat = "8" ');
$kelas9 = query('SELECT * FROM smp WHERE id_kat = "9" ');
$icon = '../img/math.png';
$css = '../css/style4.css';
$title = 'Halaman Admin';
$font = '../fontawesome/css/all.css';
$js = 'smp.php';

if (isset($_POST["cari"])) {
    $smp = cari_smp($_POST["search"]);
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
            <a href="#kelas7" class="badge text-bg-primary">Kelas 7</a>
            <a href="#kelas8" class="badge text-bg-primary">Kelas 8</a>
            <a href="#kelas9" class="badge text-bg-primary">Kelas 9</a>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <a href="../index.php" class="badge text-bg-primary">Kembali</a>
            <a href="admin.php" class="badge text-bg-danger">SD</a>
            <a href="admin_sma.php" class="badge text-bg-secondary">SMA</a>
        </div>
        <br>


        <form action="" method="post">
            <div class="input-group mb-3" style="width: 300px;">
                <input type="text" name="search" class="form-control" id="keyword" placeholder="Cari data.." aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari" id="button-addon2" id="tombol"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        <br>
        <a href="../cetak_smp.php" class="badge text-bg-primary" style="padding: 8px;"><i class="fa-solid fa-print" style="margin-right: 10px;"></i>Cetak Data</a>
        <br><br>




        <div class="table-responsive" id="semua_data_smp">
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

                    <?php foreach ($smp as $semua) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $semua['gambar']; ?>" width="200"></td>
                            <td><?= $semua['judul']; ?></td>
                            <td><?= $semua['penjelasan']; ?></td>
                            <td><?= $semua['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_smp.php?id=<?= $semua['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $semua['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Kelas 7 -->
        <h4 id="kelas7">Kelas 7</h4>
        <a href="../tambah/tambah_smp.php" class="btn btn-primary">Tambah data materi</a>
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

                    <?php foreach ($kelas7 as $smp7) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $smp7['gambar']; ?>" width="200"></td>
                            <td><?= $smp7['judul']; ?></td>
                            <td><?= $smp7['penjelasan']; ?></td>
                            <td><?= $smp7['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_smp.php?id=<?= $smp7['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $smp7['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br>

            <!-- Kelas 8 -->
            <h4 id="kelas8">Kelas 8</h4>
            <a href="../tambah/tambah_smp.php" class="btn btn-primary">Tambah data materi</a>
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

                    <?php foreach ($kelas8 as $smp7) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $smp7['gambar']; ?>" width="200"></td>
                            <td><?= $smp7['judul']; ?></td>
                            <td><?= $smp7['penjelasan']; ?></td>
                            <td><?= $smp7['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_smp.php?id=<?= $smp7['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $smp7['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br>

            <h4 id="kelas9">Kelas 9</h4>
            <a href="../tambah/tambah_smp.php" class="btn btn-primary">Tambah data materi</a>
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

                    <?php foreach ($kelas9 as $smp7) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="../img/<?= $smp7['gambar']; ?>" width="200"></td>
                            <td><?= $smp7['judul']; ?></td>
                            <td><?= $smp7['penjelasan']; ?></td>
                            <td><?= $smp7['youtube']; ?></td>
                            <td>
                                <a href="../ubah/ubah_smp.php?id=<?= $smp7['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="../hapus.php?id=<?= $smp7['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br><br>


        <div class="link" style="text-align: center;">
            <a class="btn btn-danger" href="admin.php" role="button">SD</a>
            <a class="btn btn-secondary" href="admin_sma.php" role="button">SMA</a>
        </div>
        <a href="../login.php">Logout</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../js/script_smp.js"></script>

</body>

</html>