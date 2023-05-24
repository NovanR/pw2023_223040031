<?php
// Koneksi Ke database
$conn = mysqli_connect('localhost', 'root', '', 'tubes_pw');

// Tampil Data dari tabel SD / query
$result = mysqli_query($conn, "SELECT * FROM sd1");
if (!$result) {
    echo mysqli_error($conn);
}

// ambil data dari object result
// while ($sd1 = mysqli_fetch_assoc($result)) {
// var_dump($sd1);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/style4.css">
</head>

<body>
    <h1>Selamat Datang Novan</h1>

    <h3>Tabel SD</h3>
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/th_sd/th1/<?= $row["gambar"]; ?>" width="100px;" alt="bilangan_cacah"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["penjelasan"]; ?></td>
                <td><?= $row["youtube"]; ?></td>
            </tr>
            <?php $i++;  ?>
        <?php endwhile;  ?>
    </table>
    <a href="login.php">Logout</a>
</body>

</html>