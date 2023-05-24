<?php 
// Koneksi Ke database
$conn = mysqli_connect('localhost','root','','tubes_pw');


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    
    // ambil data dari tiap elemen
    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $penjelasan = htmlspecialchars($data["penjelasan"]);
    $youtube = htmlspecialchars($data["youtube"]);


    // query insert
    $query = "INSERT INTO sd1
               VALUES
               (null,'$gambar','$judul','$penjelasan','$youtube')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
