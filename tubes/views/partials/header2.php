    </head>

    <body>

        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg" style="background-color: turquoise">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="margin-right: 0">
                    <img src="img/math.png" alt="logo" style="width: 80px; height: 50px" />
                </a>
                <div class="nama" style="margin-right: 20px; font-size: 20px">
                    <p style="margin-bottom: -8px; margin-left: 5px">Pintar</p>
                    <span style="margin-left: 20px">Matematika</span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                                Pilih Jenjang
                            </a>
                            <ul class="dropdown-menu" style="background: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);">
                                <li><a class="dropdown-item" href="sd.php">
                                        <img src="img/topisd.png" alt="topi_sd" style="margin-right: 5px; width: 30px;">
                                        SD</a></li>
                                <li><a class="dropdown-item" href="smp.php">
                                        <img src="img/topismp.png" alt="topi_smp" style="width: 40px; margin-left: -10px;">
                                        SMP</a></li>
                                <li><a class="dropdown-item" href="sma.php">
                                        <img src="img/topisma.png" alt="topi_sma" style="width: 40px; margin-left: -10px;">
                                        SMA</a></li>
                                <?php
                                if (isset($_SESSION['role'])) {
                                    $user_logged_in = $_SESSION['role'];

                                    if ($user_logged_in == 'admin') { ?>

                                        <li>
                                            <a class="badge text-bg-primary" href="adminn/admin.php" style="color: black; margin-left: 15px; text-decoration: none;"><i class="fa-sharp fa-solid fa-right-to-bracket" style="margin-right: 5px;"></i>Halaman Admin</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cs.php" style="color: black">Customer Service</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a class="btn btn-secondary btn-sm" href="logout.php" role="button" style="background-color: lightseagreen;">Logout<i class="fa-solid fa-arrow-right-to-bracket" style="padding: 
                    5px;"></i></a>
                    </span>
                    <nav class="navbar">
                        <div class="container-fluid">
                            <form class="d-flex" action="" method="post">
                                <input class="form-control me-2" type="text" name="search" id="cari" placeholder="Search" aria-label="Search" autocomplete="off">
                                <button class="btn btn-outline-success" name="cari" id="tombol" type="submit">Cari</button>
                            </form>
                        </div>
                    </nav>

                </div>
            </div>
        </nav>

        <!-- Carousel -->

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="width: 75%; margin: auto">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="img/main6.jpg" class="d-block w-100" alt="gambar_siswa" />
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="img/main3.jpg" class="d-block w-100" alt="gambar_anak" />
                </div>
                <div class="carousel-item">
                    <img src="img/main2.jpg" class="d-block w-100" alt="gambar_random" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </body>

    </html>