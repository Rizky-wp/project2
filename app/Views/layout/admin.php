<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
    <?= $this->renderSection('css'); ?>
    <title>Admin</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="visible h-100">
            <div class="d-flex flex-column h-100">
                <span class="mx-auto mt-5 fs-3" style="text-align: center; font-weight:bold; color:#FEC32F">Arsip Buku <br>Tanah</span>
                <div class="sidebar-header mb-5 mt-0">
                    <img src="/img/brandMini.png">
                </div>
                <div>
                    <ul class="menu_admin list-unstyled components">
                        <!-- <li class="active">
                
                </li> -->
                        <li>
                            <a href="<?= base_url('/admin/input') ?>"><i class=" far fa-user lg"></i>Input Data Tanah</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/dataTanah') ?>"><i class="fas fa-cart-arrow-down lg"></i>Data Tanah</a>
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
        <!-- script section -->
        <?= $this->renderSection('script'); ?>
        <!-- end script section -->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>



</body>

</html>