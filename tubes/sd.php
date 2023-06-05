<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$title = 'SD';
$css = 'css/style.css';
$font = 'fontawesome/css/all.css';
$icon = 'img/math.png';



?>

<?php require('views/partials/css.php')  ?>

<style>
    @media(max-width: 1440px) {
        .sd .isi .materi .card {
            margin-top: 20px;
        }
    }

    @media (max-width: 550px) {
        .footer {
            height: 100%;
        }
    }

    * {
        font-family: "Noto Sans", sans-serif;
    }

    .card {
        width: 18rem;
        background: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    }

    .card-title,
    .card-text {
        color: white;
    }

</style>

<?php require('views/partials/header2.php')  ?>
<?php require('views/sd.view.php')  ?>;
<?php require('views/partials/footer.php');  ?>