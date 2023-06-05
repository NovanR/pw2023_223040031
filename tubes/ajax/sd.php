<?php
require('../views/functions.php');
$keyword = $_GET["keyword"];
$query = "SELECT * FROM sd1 
          WHERE
          judul LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' ";
$sekolah_dasar = query($query);

?>

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