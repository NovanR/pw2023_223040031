<?php
$title = 'Customer Service';
$css = 'css/style8.css';
?>

<?php require('views/partials/css.php')  ?>


<style>
    .form {
        background: linear-gradient(15deg, #13547a 0%, #80d0c7 100%)
    }

    .form form input {
        background-color: rgba(192, 192, 192, 0.5);
        color: snow;
    }

    i {
        color: black;

    }
</style>
</head>

<body>
    <div class="cs">
        <div class="gambar">
            <img src="img/cs.png" alt="cs" style="width: 100%; height: 100%;">
        </div>
        <div class="form" style="margin-top: 60px; height: 100%; color: white;">
            <h3>Butuh Bantuan?</h3>
            <form method="post">
                <label for="email">Masukkan Email: </label>
                <br />
                <div class="input-icons">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" style="transform: translateX(10px);" required autocomplete="off" />
                </div>
                <br />
                <label for="nama">Masukkan Nama: </label>
                <div class="input-icons">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nama" id="nama" placeholder="Nama" style="transform: translateX(10px)" required autocomplete="off">
                </div>
                <br>
                <label for="keluhan">Keluhan: </label>
                <br>
                <textarea name="keluhan" id="keluhan" required style="height: 200px; border-radius: 15px;
                        border: 1px solid silver;
                        margin-left: 10px;
                        width: 80%;
                        background-color: rgba(192, 192, 192, 0.5);
                        color: snow;
                        padding: 8px;">
                    </textarea>
                <br>
                <button type="submit" name="submit" style=" border-radius: 15px;
                        width: 20%;
                        transform: translateX(20px);
                        text-align: center;
                        margin: auto;
                        padding: 6px;
                        background-color: turquoise;
                        margin: 10px 0 10px 0;">Kirim</button>
            </form>
        </div>

    </div>
</body>

</html>