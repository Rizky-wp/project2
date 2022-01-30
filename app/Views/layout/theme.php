<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- style css -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/714401f9e2.js" crossorigin="anonymous"></script>
    <?= $this->renderSection('css'); ?>
    <title>Dashboard</title>
</head>

<body class="d-flex flex-column">
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid d-flex justify-content-end">
            <a class="navbar-brand flex-grow-1" href="#">
                <img src="/img/brand.png" alt="Kementrian Agraria dan Tata Ruang / Badan Pertanahan Nasional" height="75">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end fs-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if ($nav == "home") {
                                                echo "active";
                                            }  ?> " href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle 
                        <?php if ($nav == "informasi") {
                            echo "active";
                        }  ?>" href="#">
                            Informasi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('/informasi') ?>">Informasi Layanan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/Buku-Tanah') ?>">Pengarsipan Buku Tanah</a></li>

                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if ($nav == "kontak") {
                                                echo "active";
                                            }  ?>" href="<?= base_url('kontak') ?>">Kontak</a>
                    </li>
                    <?php session();
                    if (!isset($_SESSION['name'])) {
                        echo '<li class="nav-item mx-2">
                        <a href=' . base_url("/login") . ' class="nav-link">Login</a>
                    </li>';
                    } ?>

                </ul>
            </div>
            <?php session();
            if (isset($_SESSION['name'])) {
                echo '<a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle " href=' . base_url("/login") . '>Admin</a><ul class="dropdown-menu " aria-labelledby="navbarDropdown"><li><a class="dropdown-item" href=' . base_url("/admin") . '>Arsip Buku Tanah</a></li><li class="border-top border-dark mt-2"><a class="dropdown-item" href=' . base_url("/login/logout") . '>Logout</a></li>

            </ul>';
            } ?>


        </div>
    </nav>
    <!-- end navbar section -->

    <!-- content section -->
    <?= $this->renderSection('content'); ?>
    <!-- end content section -->

    <!-- footer section -->

    <footer class="footer border-top mb-0 pb-0 mt-auto">
        <div class=" container-fluid px-4 ">
            <div class="row row-cols-1 row-cols-lg-2 py-3 mt-2 justify-content-between align-items-center">
                <div class="col col-lg-6 col-md-6 col-sm-5 mb-3">
                    <div class="row">
                        <span class="mb-3" style="font-size: large;">Pengarsipan Buku Tanah Kantor Pertanahan Kota Tasikmalaya</span>
                    </div>
                    <div class="row ">
                        <a class="" href="#">
                            <img src="/img/brand.png" alt="Kementrian Agraria dan Tata Ruang / Badan Pertanahan Nasional" style="max-width: 100%;">

                        </a>
                    </div>
                </div>



                <div class="col col-lg-4 col-md-5 col-sm-5">

                    <ul class="nav flex-column text-break" style="font-size:12px">
                        <li class="nav-item mb-2"><a class="nav-link p-0 ">Alamat:<br>
                                Jl. Boulevard No.1, Sukamanah,Kec.Cipedes<br>
                                Kota Tasikmalaya</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 ">Jam Kerja:<br>
                                Senin – Jum’at<br>
                                08.00 – 16.00</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 ">Email:<br>
                                Pengarsipanbukutanahtasikmalaya@yahoo.com</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 ">Hubungi Kami:<br>
                                0265-323267</a></li>
                    </ul>
                </div>


            </div>

            <div class="row justify-content-center">
                <span class="text-center" style="color: white; font-size:x-small">Copyright © 2022 Badan Pertanahan Nasional- All right reserved</span>
            </div>
        </div>

    </footer>


    <!-- end footer section -->








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <?= $this->renderSection('script'); ?>
</body>

</html>