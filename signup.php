<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pande Made Angga Murdika</title>

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">
        <?php include_once 'components/sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php include_once 'components/navbar.php' ?>

                <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 75vh;">
                    <div class="w-100 p-4" style="max-width: 400px;">
                        <div class="rounded" style="background-color: rgba(255, 255, 255, 0.832); box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <div class="text-center text-white p-4 rounded-top bg-primary">
                                <h3 class="mb-0" id="result">Sign Up</h3>
                            </div>
                            <div class="p-4">
                                <form class="user">
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
                                            style="appearance: none; -webkit-appearance: none; -moz-appearance: none; padding-top: 12px; padding-bottom: 12px; height: 50px; line-height: 26px;">
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
                                <div class="text-center">
                                    <a class="small" href="signin.php">Already have an account? Login!</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="../assets/js/kalkulator.js"></script>

            </div>
            <?php include_once 'components/footer.php' ?>
        </div>
    </div>

    <?php include_once 'components/logout.php' ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>