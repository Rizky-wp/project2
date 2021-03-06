<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">

    <title><?= $judul; ?></title>
    <link rel="icon" href="https://pengarsipanbukutanahkantorpertanahantasikmalaya.com/img/brandMini.ico" type="image/x-icon">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <?= $this->renderSection('css'); ?>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/714401f9e2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="visible h-100">
            <div class="d-flex flex-column h-100">
                <span class="mx-auto mt-5 fs-3" style="text-align: center; font-weight:bold; color:#FEC32F">Arsip Buku <br>Tanah</span>
                <div class="sidebar-header mb-5 mt-0"><a href="<?= base_url('/') ?>">
                        <img src="/img/brandMini.png">
                    </a>

                </div>
                <div>
                    <ul class="menu_admin list-unstyled components">
                        <!-- <li class="active">
                
                </li> -->
                        <li>
                            <a href="<?= base_url('/admin/input') ?>">Input Data Tanah</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/dataTanah') ?>">Data Tanah</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Page Content Holder -->
        <div id="content" class="visible">
            <nav class="navbar sticky-top navbar-light">
                <div class="d-flex w-100 align-items-center justify-content-between mx-1">
                    <div id="btn-sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="">
                        <a href="<?= base_url('/login/logout') ?>">Logout</a>
                    </div>
            </nav>
            <!-- content section -->
            <?= $this->renderSection('content'); ?>
            <!-- end content section -->
        </div>



        <script type="text/javascript">
            $(document).ready(function() {
                $('#btn-sidebar').on('click', function() {
                    $('#sidebar').toggleClass('visible');
                    $('#content').toggleClass('visible');
                });
            });
        </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <!-- script section -->
        <?= $this->renderSection('script'); ?>
        <!-- end script section -->
        <!-- Optional JavaScript; choose one of the two! -->




</body>

</html>