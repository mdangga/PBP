<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex align-items-center min-vh-100">

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center">
                                <img src="assets/img/undraw_data-input_whqw.svg" alt="data_input" class="img-fluid p-2">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    
                                    <?php
                                    if (isset($_GET['pesan'])) {
                                        $pesan = $_GET['pesan'];
                                        $alertClass = '';
                                        $pesan = '';

                                        switch ($pesan) {
                                            case 'gagal':
                                                $alertClass = 'danger';
                                                $pesan = 'Login gagal! Username dan password salah!';
                                                break;
                                            case 'logout':
                                                $alertClass = 'info';
                                                $pesan = 'Anda telah berhasil logout.';
                                                break;
                                            case 'belum_login':
                                                $alertClass = 'warning';
                                                $pesan = 'Anda harus login untuk mengakses halaman.';
                                                break;
                                            case 'berhasil':
                                                $alertClass = 'success';
                                                $pesan = 'Akun berhasil terdaftar, silakan login.';
                                                break;
                                        }
                                    ?>
                                        <div class="alert alert-<?= $alertClass ?> alert-dismissible fade show d-flex align-items-center" role="alert">
                                            <div><?= $pesan ?></div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>

                                        </div>

                                    <?php } ?>

                                    <form class="user" method="post" action="cek_login.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username"
                                                placeholder="Enter Username"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>