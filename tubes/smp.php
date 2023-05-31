<?php
$title = 'SMP';
$css = 'css/style5.css';
?>

<?php require('views/partials/css.php')  ?>

<style>
    @media (max-width: 1440px) {
        .smp .isi .materi .card {
            margin-top: 20px;
        }
    }

    @media (max-width: 550px) {
        .footer {
            height: 100%;
        }
    }

    @media (max-width: 450px) {
        h3 {
            margin-left: 10px;
        }
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

<?php require('views/partials/header2.php');  ?>
<?php require('views/smp.view.php')  ?>
<?php require('views/partials/footer.php')  ?>