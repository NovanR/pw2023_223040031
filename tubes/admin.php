<?php 
require('views/funtions.php');
$sekolah_dasar = query("SELECT * FROM sd1");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="icon" href="img/math.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style4.css">
</head>

<body>
    <h1>Selamat Datang Admin</h1>
    <br><br>

    <h3>Tabel SD</h3>
    <a href="tambah.php">Tambah Data materi</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penjelasan</th>
            <th>Youtube</th>
        </tr>

        <?php $i = 1;  ?>
        <?php foreach($sekolah_dasar as $sd) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="hapus.php?=<?= $row["id"]; ?>">Hapus</a>
            </td>
            <td><img src="img/<?= $sd["gambar"]; ?>" width="100px;" alt="bilangan_cacah"></td>
            <td><?= $sd["judul"]; ?></td>0
            <td><?= $sd["penjelasan"]; ?></td>
            <td><?= $sd["youtube"]; ?></td>
        </tr>
        <?php $i++;  ?>
        <?php endforeach;  ?>
    </table>
    <a href="login.php">Logout</a>
</body>

</html>