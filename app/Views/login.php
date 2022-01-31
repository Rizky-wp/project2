<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- style css -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <title><?= $judul; ?></title>
    <link rel="icon" href="https://pengarsipanbukutanahkantorpertanahantasikmalaya.com/img/brandMini.ico" type="image/x-icon">
</head>

<body style="background:linear-gradient(rgba(0, 0, 0, 0.219), rgba(0, 0, 0, 0.219)), url('/img/bg.jpg');background-size: cover; background-repeat: no-repeat; background-position: center; ">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">

        <div class="container login d-flex justify-content-center  align-items-center p-5" style=" border-radius: 50px; background-color: rgba(255, 255, 255, 0.609);">

            <form class="form-login " method="POST" action="<?= base_url('/login/submit') ?>">

                <a href="<?= base_url('/'); ?>">
                    <img src="/img/brandMini.png" class="rounded mx-auto d-block" />
                </a>
                <h2 class="text-center">Login Admin</h2>
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="username" required>
                </div>
                <div class="form-group my-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block  my-3 ">Login</button>
                </div>

                <?php
                if (isset($pesan)) {
                    if ($pesan == "gagal") {
                        echo '<div class="alert alert-danger text-center" role="alert">
                        Username atau Password salah!
                        </div>';
                    }
                }
                ?>
            </form>





        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
</body>


</html>