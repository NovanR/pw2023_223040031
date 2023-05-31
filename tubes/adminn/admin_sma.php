<?php
require('../views/functions.php');
$kelas10 = query('SELECT * FROM sma WHERE nama = "kelas_10" ');
$kelas11 = query('SELECT * FROM sma WHERE nama = "kelas_11" ');
$kelas12 = query('SELECT * FROM sma WHERE nama = "kelas_12" ');
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

        <!-- Kelas 10 -->
        <h4>Kelas 10</h4>
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
        <h4>Kelas 11</h4>
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
        <h4>Kelas 12</h4>
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
        <br><br>


        <div class="link" style="text-align: center;">
            <a class="btn btn-danger" href="admin.php" role="button">SD</a>
            <a class="btn btn-primary" href="admin_smp.php" role="button">SMP</a>
        </div>
        <a href="login.php">Logout</a>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>