<?php
require('views/funtions.php');

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // cek data apakah berhasil/tidak
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan!');   
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Tambah data</title>
</head>

<body>
    <h1>Tambah data materi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <label for="judul">Judul: </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="penjelasan">Penjelasan: </label>
                <input type="text" name="penjelasan" id="penjelasan" required>
            </li>
            <li>
                <label for="youtube">Youtube: </label>
                <input type="text" name="youtube" id="youtube" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>