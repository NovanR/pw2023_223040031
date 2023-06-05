<?php
session_start();
require('views/functions.php');

$css = 'css/style7.css';
$title = 'Home';
$font = 'fontawesome/css/all.css';


if (isset($_SESSION['role'])) {
    $user_logged_in = $_SESSION['role'];

    // Periksa apakah pengguna sudah login berdasarkan informasi session
    if (isset($_SESSION['role'])) {
        // Pengguna sudah login
        if ($_SESSION['role'] == 'admin') {
            $user_logged_in = 'admin';
        } else {
            $user_logged_in = 'user';
        }
        $user_logged_in = true;
    } else {
        // Pengguna belum login
        $user_logged_in = false;
    }
}



// if (isset($_SESSION['login'])) {
//     // Pengguna sudah login
//     $user_logged_in = true;
// } else {
//     // Pengguna belum login
//     $user_logged_in = false;
// }

?>

    <?php require('views/partials/css.php')  ?>
    <?php require('views/partials/header.php')  ?>
    <?php require('views/index.view.php') ?>
    <?php require('views/partials/footer.php')  ?>


  