<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location: ../index.php?pesan=belum_login");
    exit;
}

$type = '';
$pesan = '';
$showToast = false;
if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];

    switch ($pesan) {
        case 'update_berhasil':
            $type = 'Update Berhasil';
            $pesan = 'Data berhasil diperbarui.';
            $showToast = true;
            break;
        case 'login_berhasil':
            $type = 'Login berhasil';
            $pesan = 'Selamat datang kembali, ' . $_SESSION['username'] . '!';
            $showToast = true;
            break;
    }
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

                    <div id="welcome-section" class="row align-items-center">
                        <div class="col-lg-4 text-center mb-4">
                            <img src="../assets/img/profil.png" alt="My Profile" class="img-fluid rounded-circle">
                        </div>

                        <div class="col-lg-8 text-center text-lg-left">
                            <p class="font-weight-bold text-gray-800">Hai, Nama Saya</p>
                            <h1 class="font-weight-bold text-primary">Pande Made Angga Murdika</h1>
                            <h3 class="font-weight-bold text-primary">Mahasiswa Informatika Bangli</h3>
                            <p class="text-gray-800">
                                Saat ini saya sedang menempuh pendidikan S1 - Informatika di UHN Sugriwa Denpasar.
                                Saya berada di kelas <strong>IF23B</strong>, yang terletak di Jalan Kubu, Bangli.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <?php include_once 'components/footer.php' ?>
        </div>
    </div>

    <?php if ($showToast): ?>
        <div class="position-fixed p-3" style="z-index: 1050; right: 0; bottom: 0;">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header">
                    <i class="fas fa-envelope text-primary" style="margin-right: 20px;"></i>
                    <strong class="mr-auto"><?php echo $type; ?></strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <?php echo $pesan; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php include_once 'components/logout.php' ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/sb-admin-2.min.js"></script>


    <?php if ($showToast): ?>
        <script>
            $(document).ready(function() {
                $('#liveToast').toast('show');
            });
        </script>
    <?php endif; ?>

</body>
</html>