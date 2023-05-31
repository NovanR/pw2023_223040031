<?php
require('functions.php');


$name = 'Ubah Data Mahasiswa';
$id = $_GET['id'];
$student = query("SELECT * FROM mahasiswa where id = $id")[0];


if (isset($_POST["ubah"])) {
    //jalankan fungsi tambah()
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>";
    }
}

require('views/ubah.view.php');
