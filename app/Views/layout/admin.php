<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css">

    <title>Admin</title>
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
                            <a href=""><i class=" far fa-user lg" style="padding-right: 20px;"></i>Input Data Tanah</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-cart-arrow-down lg" style="padding-right: 20px;"></i>Data Tanah</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Page Content Holder -->
        <div id="content" class="visible">
            <nav class="navbar sticky-top navbar-light">
                <div class="d-flex w-100 align-items-center mx-1">
                    <div id="btn-sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="log">
                        <a href="PHP/logout.php">Logout</a>
                    </div>
            </nav>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#btn-sidebar').on('click', function() {
                    $('#sidebar').toggleClass('visible');
                    $('#content').toggleClass('visible');
                });
            });
        </script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>