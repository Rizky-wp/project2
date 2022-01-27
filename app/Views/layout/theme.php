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
    <title>Dashboard</title>
</head>

<body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/brand.png" alt="Kementrian Agraria dan Tata Ruang / Badan Pertanahan Nasional" height="100">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end fs-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if ($nav == "home") {
                                                echo "active";
                                            }  ?> " href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle 
                        <?php if ($nav == "informasi") {
                            echo "active";
                        }  ?>" href="#">
                            Informasi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Informasi Layanan</a></li>
                            <li><a class="dropdown-item" href="#">Pengarsipan Buku Tanah</a></li>

                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if ($nav == "kontak") {
                                                echo "active";
                                            }  ?>" href="#">Kontak</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar section -->

    <!-- content section -->
    <?= $this->renderSection('content'); ?>
    <!-- end content section -->

    <!-- footer section -->

    <footer class="footer border-top mb-0 pb-0">
        <div class="container-fluid px-5 ">
            <div class="row row-cols-1 row-cols-lg-2 py-4 mt-2 justify-content-between align-items-center">
                <div class="col col-lg-6 col-md-6 col-sm-3 mb-3">
                    <div class="row">
                        <span class="fs-2">Pengarsipan Buku Tanah Kantor Pertanahan kota Tasikmalaya</span>
                    </div>
                    <div class="row ">
                        <a class="" href="#">
                            <img src="/img/brand.png" alt="Kementrian Agraria dan Tata Ruang / Badan Pertanahan Nasional" style="max-width: 100%;">

                        </a>
                    </div>
                </div>



                <div class="col col-lg-3 col-md-4 col-sm-1">

                    <ul class="nav flex-column fs-6 text-break">
                        <li class="nav-item mb-1"><a class="nav-link p-0 ">Alamat:<br>
                                Jl. Boulevard No.1, Sukamanah,Kec.Cipedes<br>
                                Kota Tasikmalaya</a></li>
                        <li class="nav-item mb-1"><a class="nav-link p-0 ">Jam Kerja:<br>
                                Senin – Jum’at<br>
                                08.00 – 16.00</a></li>
                        <li class="nav-item mb-1"><a class="nav-link p-0 ">Email:<br>
                                Pengarsipanbukutanahtasikmalaya@yahoo.com</a></li>
                        <li class="nav-item mb-1"><a class="nav-link p-0 ">Hubungi Kami:<br>
                                021-29653300</a></li>
                    </ul>
                </div>


            </div>

            <div class="row justify-content-center mt-3 py-3">
                <span class="text-center" style="color: white;">Copyright © 2022 Badan Pertanahan Nasional- All right reserved</span>
            </div>
        </div>

    </footer>

    <!-- end footer section -->








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>