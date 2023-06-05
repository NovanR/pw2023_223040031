<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require('views/functions.php');

function hapus_sd($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sd1 WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_smp($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM smp WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_sma($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sma WHERE id = $id");
    return mysqli_affected_rows($conn);
}

$id = $_GET['id'];

if (hapus_sd($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'adminn/admin.php';
        </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href = 'adminn/admin.php';
        </script>";
}

if (hapus_smp($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'adminn/admin_smp.php';
        </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href = 'adminn/admin_smp.php';
        </script>";
}

if (hapus_sma($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = 'adminn/admin_sma.php';
        </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href = 'adminn/admin_sma.php';
        </script>";
}
