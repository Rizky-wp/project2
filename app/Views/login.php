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

    <title>Cateringku</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">

        <div class="container login d-flex justify-content-center w-50 align-items-center " style="height: 60%; border-radius: 50px; background-color: rgba(255, 255, 255, 0.609);">

            <form class="form-login " method="POST" action="<?= base_url('/login/submit') ?>">

                <img src="/img/brandMini.png" class="rounded mx-auto d-block" />
                <h2 class="text-center">Login Admin</h2>
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="username" required>
                </div>
                <div class="form-group my-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block  my-3">Login</button>
                <?php
                if (isset($pesan)) {
                    if ($pesan == "gagal") {
                        echo "<div class='alert' style =' background: red;
            color: white;
            font-weight :bold;
            font-size :22px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            text-align: center;'>Username dan Password tidak sesuai !</div>";
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