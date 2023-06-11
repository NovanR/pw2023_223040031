<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require('../views/functions.php');

$id = $_GET['id'];

// query data materi
$materi = query("SELECT * FROM sma WHERE id = $id")[0];


// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // cek data apakah berhasil/tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah!');
        </script>";
    } else {
        echo "<script>
            alert('data gagal diubah!');   
        </script>";
    }
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    // ambil data dari tiap elemen
    $nama = htmlspecialchars($data["nama"]);
    $judul = htmlspecialchars($data["judul"]);
    $penjelasan = htmlspecialchars($data["penjelasan"]);
    $youtube = htmlspecialchars($data["youtube"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    $kategori = htmlspecialchars($data['kategori']);

     // cek apakah user pilih gambar baru atau tidak
     if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }


    // query insert
    $query = "UPDATE sma SET
                nama = '$nama',
                gambar = '$gambar',
                judul = '$judul',
                penjelasan = '$penjelasan',
                youtube = '$youtube',
                id_kat = '$kategori'

                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

$title = 'Ubah Data';
$css = '../css/style9.css';
?>

<?php require('../views/partials/css.php')  ?>



<body>
    <div class="tambah">
        <h1>Ubah Data</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $materi['id']; ?>">
            <input type="hidden" name="gambarlama" value="<?= $materi['gambar']; ?>">
        <div class="mb-4 w-30">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $materi['nama']; ?>" required>
            </div>
            <div class="mb-4 w-30">
                <label for="gambar" class="form-label">Gambar: </label><br>
                <img src="../img/<?= $materi['gambar']; ?>" width="200;">
                <input type="file" name="gambar" class="form-control" id="gambar" style="margin-top: 20px;">
            </div>
            <div class="mb-4 w-30">
                <label for="judul" class="form-label">Judul: </label>
                <input type="text" name="judul" class="form-control" id="judul" value="<?= $materi['judul']; ?>" required>
            </div>
            <div class="mb-4 w-30">
                <label for="penjelasan" class="form-label">Penjelasan: </label>
                <input type="text" name="penjelasan" class="form-control" id="penjelasan" value="<?= $materi['penjelasan']; ?>" required>
            </div>
            <div class="mb-4 w-30">
                <label for="youtube" class="form-label">Youtube: </label>
                <input type="text" name="youtube" class="form-control" id="youtube" value="<?= $materi['youtube']; ?>" required>
            </div>
            <div class="mb-4 w-30">
                <label for="kategori" class="form-label">Kategori: </label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $materi['id_kat']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
            <br><br>
            <a href="../adminn/admin_sma.php" style="color: black;"><i class="fa-solid fa-arrow-left"></i>   Kembali Ke halaman admin</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>