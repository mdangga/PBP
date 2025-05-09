<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex align-items-center min-vh-100">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center bg-register-image">
                        <img src="assets/img/undraw_complete-form_aarh.svg" alt="data_input" class="img-fluid p-2">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?php
                            if (isset($_GET['pesan'])) {
                                $pesan = $_GET['pesan'];
                                $alertClass = '';
                                $pesan = '';

                                switch ($pesan) {
                                    case 'gagal':
                                        $alertClass = 'danger';
                                        $pesan = 'Login gagal! Harap Masukkan Semua Data yang Diperlukan!';
                                        break;
                                    case 'username_sudah_ada':
                                        $alertClass = 'info';
                                        $pesan = 'Username Terdaftar, Harap Masukkan Username yang Lainnya.';
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
                            <form class="user" method="post" action="cek_register.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
                                        placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required>
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select
                                        class="form-control form-control-user"
                                        name="pekerjaan"
                                        required
                                        style="
                                        appearance: none; 
                                        -webkit-appearance: none; 
                                        -moz-appearance: none; 
                                        padding-top: 12px; 
                                        padding-bottom: 12px; 
                                        height: 50px; 
                                        line-height: 26px;">
                                        <option value="" disabled selected>Pekerjaan</option>
                                        <option value="pelajar">Pelajar</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                        <option value="pegawai">Pegawai</option>
                                        <option value="wiraswasta">Wiraswasta</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" placeholder="Repeat Password" name="password2" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
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