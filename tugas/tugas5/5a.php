<?php
$mahasiswa = [
    [
        "Nama" => "Novan Ramdan",
        "nrp" => "223040031",
        "email" => "novanramdan7@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "novan.jpg"
    ],
    [
        "Nama" => "Bhadrika Aryaputra",
        "nrp" => "223040018",
        "email" => "bhadrikaarya@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bhadrika.jpg"
    ],
    [
        "Nama" => "Davina Putri",
        "nrp" => "223040016",
        "email" => "davinaputri@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "davina.jpg"
    ],
    [
        "Nama" => "Alvin Abdul",
        "nrp" => "223040026",
        "email" => "alvinabdul@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alvin.jpg"
    ],
    [
        "Nama" => "Daffa Aprilino",
        "nrp" => "223040025",
        "email" => "daffaaprilino@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "daffa.jpg"
    ],
    [
        "Nama" => "Indri Tania",
        "nrp" => "223040009",
        "email" => "indritania@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "indri.jpg"
    ],
    [
        "Nama" => "Bintang Arya",
        "nrp" => "223040032",
        "email" => "bintangarya@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bintang.jpg"
    ],
    [
        "Nama" => "Fadhlul Nur",
        "nrp" => "223040021",
        "email" => "fadhlulnur@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fadhlul.jpg"
    ],
    [
        "Nama" => "Ilham Ramadhana",
        "nrp" => "223040013",
        "email" => "ilhamramadhana@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ilham.jpeg"
    ],
    [
        "Nama" => "Muhammad Alfath",
        "nrp" => "223040014",
        "email" => "muhammadalfath@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alfath.jpg"
    ],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" </li>
            <li>Nama : <?= $mhs["Nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php }  ?>
</body>

</html>