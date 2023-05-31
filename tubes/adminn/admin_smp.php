<?php
require('../views/functions.php');
$kelas7 = query('SELECT * FROM smp WHERE nama = "kelas_7" ');
$kelas8 = query('SELECT * FROM smp WHERE nama = "kelas_8" ');
$kelas9 = query('SELECT * FROM smp WHERE nama = "kelas_9" ');
$css = '../css/style4.css';
$title = 'Halaman Admin';
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

        <!-- Kelas 7 -->
        <h4>Kelas 7</h4>
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
        <h4>Kelas 8</h4>
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

        <h4>Kelas 9</h4>
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
        <br><br>
        <div class="link" style="text-align: center;">
            <a class="btn btn-danger" href="admin.php" role="button">SD</a>
            <a class="btn btn-secondary" href="admin_sma.php" role="button">SMA</a>
        </div>
        <a href="../login.php">Logout</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>