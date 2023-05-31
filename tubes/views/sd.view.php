<?php require('functions.php')  ?>
<?php
$sekolah_dasar = query('SELECT * FROM sd1 WHERE nama = "kelas_1" ');
$sekolah_dasar2 = query('SELECT * FROM sd1 WHERE nama = "kelas_2" ');
$sekolah_dasar3 = query('SELECT * FROM sd1 WHERE nama = "kelas_3" ');
$sekolah_dasar4 = query('SELECT * FROM sd1 WHERE nama = "kelas_4" ');
$sekolah_dasar5 = query('SELECT * FROM sd1 WHERE nama = "kelas_5" ');
$sekolah_dasar6 = query('SELECT * FROM sd1 WHERE nama = "kelas_6" ');
?>

<div class="sd" id="sd">
    <h3 style=" margin-left: 100px;
                    margin-top: 100px; 
                    border-bottom: 2px solid turquoise;">
        Sekolah Dasar
    </h3>
    <div class="isi" style="background-color: rgba(48, 213, 200, .3); border-radius: 5px;">
        <!-- Kelas 1 -->

        <h4>Kelas 1</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar as $sd1) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd1["gambar"]; ?>" class="card-img-top" alt="materi kelas 1" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd1["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd1["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd1["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 2 -->

        <h4>Kelas 2</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar2 as $sd2) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd2["gambar"]; ?>" class="card-img-top" alt="materi kelas 2" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd2["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd2["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd2["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 3 -->

        <h4>Kelas 3</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar3 as $sd3) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd3["gambar"]; ?>" class="card-img-top" alt="materi kelas 3" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd3["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd3["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd3["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 4 -->

        <h4>Kelas 4</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar4 as $sd4) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd4["gambar"]; ?>" class="card-img-top" alt="materi kelas 4" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd4["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd4["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd4["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 5 -->
        <h4>Kelas 5</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar5 as $sd5) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd5["gambar"]; ?>" class="card-img-top" alt="materi kelas 5" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd5["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd5["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd5["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <!-- Kelas 6 -->
        <h4>Kelas 6</h4>
        <div class="materi">
            <?php foreach ($sekolah_dasar6 as $sd6) {  ?>
                <div class="card" style="width: 18rem">
                    <img src="img/<?= $sd6["gambar"]; ?>" class="card-img-top" alt="materi kelas 6" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $sd6["judul"]; ?></h5>
                        <p class="card-text">
                            <?= $sd6["penjelasan"]; ?>
                        </p>
                        <a href="<?= $sd6["youtube"]; ?>" target="_blank" class="btn btn-primary">Tonton Video</a>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>

</div>

<div class="kosong"></div>