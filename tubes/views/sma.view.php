<?php require('functions.php')  ?>
<?php
$sma = query('SELECT * FROM sma LIMIT 15, 5');
$kelas10 = query('SELECT * FROM sma WHERE id_kat = "10" ');
$kelas11 = query('SELECT * FROM sma WHERE id_kat = "11" ');
$kelas12 = query('SELECT * FROM sma WHERE id_kat = "12" ');

if (isset($_POST["cari"])) {
    $sma = cari_sma($_POST["search"]);
}

?>


<div class="sma" id="sma">
    <h3 style=" margin-left: 100px;
                    margin-top: 100px; 
                    border-bottom: 2px solid turquoise;">
        Sekolah Menengah Atas
    </h3>
    <div class="isi" style="background-color: rgba(48, 213, 200, .3); border-radius: 5px;">

        <div class="materi">
            <?php foreach ($sma as $k10) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k10["gambar"]; ?>" class="card-img-top" alt="materi kelas 10" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k10["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k10["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k10["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 10 -->
        <h4>Kelas 10</h4>
        <div class="materi">
            <?php foreach ($kelas10 as $k10) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k10["gambar"]; ?>" class="card-img-top" alt="materi kelas 10" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k10["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k10["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k10["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 11 -->

        <h4>Kelas 11</h4>
        <div class="materi">
            <?php foreach ($kelas11 as $k11) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k11["gambar"]; ?>" class="card-img-top" alt="materi kelas 11" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k11["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k11["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k11["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 12 -->

        <h4>Kelas 12</h4>
        <div class="materi">
            <?php foreach ($kelas12 as $k12) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k12["gambar"]; ?>" class="card-img-top" alt="materi kelas 12" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k12["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k12["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k12["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</div>

<div class="kosong" style="height: 100px; background-color: rgba(48, 213, 200, .3);"></div>