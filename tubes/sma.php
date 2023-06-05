<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$title = 'SMA';
$css = 'css/style6.css';
?>

<?php require('views/partials/css.php')  ?>

<style>
    .card {
        width: 18rem;
        background: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    }

    .card-title,
    .card-text {
        color: white;
    }

    @media (max-width: 450px) {
        .sma h3 {
            margin-left: 0px;
        }
    }
</style>

     <?php require('views/partials/header2.php');  ?>

    <?php require('views/sma.view.php')  ?>

    <?php require('views/partials/footer.php');  ?>