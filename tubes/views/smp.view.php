<?php require('functions.php')  ?>
<?php
$smp = query('SELECT * FROM smp LIMIT 15, 5');
$kelas7 = query('SELECT * FROM smp WHERE id_kat = "7" ');
$kelas8 = query('SELECT * FROM smp WHERE id_kat = "8" ');
$kelas9 = query('SELECT * FROM smp WHERE id_kat = "9" ');

if (isset($_POST["cari"])) {
    $smp = cari_smp($_POST["search"]);
}

?>


<div class="smp" id="smp">
    <h3 style=" margin-left: 100px;
                    margin-top: 100px; 
                    border-bottom: 2px solid turquoise;">
        Sekolah Menengah Pertama
    </h3>
    <div class="isi" style="background-color: rgba(48, 213, 200, .3); border-radius: 5px;">

        <div class="materi">
            <?php foreach ($smp as $k7) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k7["gambar"]; ?>" class="card-img-top" alt="materi kelas 7" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k7["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k7["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k7["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>



        <!-- Kelas 7 -->

        <h4>Kelas 7</h4>
        <div class="materi">
            <?php foreach ($kelas7 as $k7) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k7["gambar"]; ?>" class="card-img-top" alt="materi kelas 7" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k7["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k7["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k7["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 8 -->

        <h4>Kelas 8</h4>
        <div class="materi">
            <?php foreach ($kelas8 as $k8) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k8["gambar"]; ?>" class="card-img-top" alt="materi kelas 8" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k8["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k8["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k8["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 9 -->

        <h4>Kelas 9</h4>
        <div class="materi">
            <?php foreach ($kelas9 as $k9) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $k9["gambar"]; ?>" class="card-img-top" alt="materi kelas 9" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $k9["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $k9["penjelasan"]; ?>
                        </p>
                        <a href="<?= $k9["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</div>

<div class="kosong" style="height: 100px; background-color: rgba(48, 213, 200, .3);"></div>