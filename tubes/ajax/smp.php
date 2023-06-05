<?php
require('../views/functions.php');
$keyword = $_GET["keyword"];
$query = "SELECT * FROM smp 
          WHERE
          judul LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' ";
$smp = query($query);

?>

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