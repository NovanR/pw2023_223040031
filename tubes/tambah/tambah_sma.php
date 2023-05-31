<?php
require('../views/functions.php');

function tambah($data) {
    global $conn;
    
    // ambil data dari tiap elemen
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $penjelasan = htmlspecialchars($data["penjelasan"]);
    $youtube = htmlspecialchars($data["youtube"]);


    // query insert
    $query = "INSERT INTO sma
               VALUES
               (null,'$nama','$gambar','$judul','$penjelasan','$youtube')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


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

$title = 'Tambah Data';
$css = '../css/style9.css';
?>

<?php require('../views/partials/css.php')  ?>



<body>
    <div class="tambah">
        <h1>Tambah Data</h1>
        <form action="" method="post">
        <div class="mb-4 w-30">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="mb-4 w-30">
                <label for="gambar" class="form-label">Gambar: </label>
                <input type="text" name="gambar" class="form-control" id="gambar" required>
            </div>
            <div class="mb-4 w-30">
                <label for="judul" class="form-label">Judul: </label>
                <input type="text" name="judul" class="form-control" id="judul" required>
            </div>
            <div class="mb-4 w-30">
                <label for="penjelasan" class="form-label">Penjelasan: </label>
                <input type="text" name="penjelasan" class="form-control" id="penjelasan" required>
            </div>
            <div class="mb-4 w-30">
                <label for="youtube" class="form-label">Youtube: </label>
                <input type="text" name="youtube" class="form-control" id="youtube" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <a href="../adminn/admin.php" style="color: black;"><i class="fa-solid fa-arrow-left"></i>   Kembali Ke halaman admin</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>