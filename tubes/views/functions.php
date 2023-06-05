<?php
// Koneksi Ke database
$conn = mysqli_connect('localhost', 'root', '', 'tubes_pw');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cari_sd($search)
{
    $query = "SELECT * FROM sd1 
              WHERE
              judul LIKE '%$search%' OR
              nama LIKE '%$search%'

              ";

    return query($query);
}

function cari_smp($search)
{
    $query = "SELECT * FROM smp
              WHERE
              judul LIKE '%$search%' OR
              nama LIKE '%$search%'
              ";
    return query($query);
}

function cari_sma($search)
{
    $query = "SELECT * FROM sma
              WHERE
              judul LIKE '%$search%' OR
              nama LIKE '%$search%' 
              ";
    return query($query);
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];


    // cek apakah yang diupload gambar atau bukan
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script> alert('Format File Salah!');</script>";
        return false;
    }


    // cek jika ukurannya terlalu besar
    if ($ukuranfile > 2000000) {
        echo "<script> alert('Ukuran Gambar Terlalu Besar!');</script>";
        return false;
    }

    // lolos pengecekan
    // generate nama gambar baru

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpname, '../img/' . $namafilebaru);

    return $namafilebaru;
}

function registrasi($data)
{
    global $conn;

    $email = strtolower(stripslashes($data['email']));
    $role = strtolower(stripslashes($data['role']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // Cek email sudah ada di database atau belum
    $result = mysqli_query($conn, "SELECT email from user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('Email Sudah Digunakan!');
              </script>";
        return false;
    }



    // cek konfirmasi password

    if ($password !== $password2) {
        echo "<script>
              alert('Konfirmasi password tidak sesuai');
              </script>";

        return false;
    }

    // enkrpisi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user ke database
    mysqli_query($conn, "INSERT INTO user VALUES(null,'$email','$password','$role')");
    return mysqli_affected_rows($conn);
}
