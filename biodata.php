<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: ../index.php?pesan=belum_login");
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

                <div class="container-fluid">

                    <section id="biodata" class="mb-5 pt-3">
                        <h1 class="text-center mb-4 text-gray-800">Biodata Saya</h1>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="position-relative">
                                <img src="../assets/img/profil.png" alt="Foto Profil" 
                                class="rounded-circle img-fluid shadow"
                                style="max-width: 200px;">
                                <div class="position-absolute"
                                style="top: 0; left: 0; width: 100%; height: 100%; border: 3px solid var(--primary);
                                border-radius: 50%; transform: scale(1.1);"></div>
                            </div>
                        </div>

                        <h2 class="text-center mb-4 text-gray-800">Informasi Pribadi</h2>
                        <div class="d-flex justify-content-center">
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mr-4" 
                                    style="width: 40px; height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <p class="mb-0 text-gray-800"><strong>Nama:</strong> Pande Made Angga Murdika</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mr-4" 
                                    style="width: 40px; height: 40px;">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <p class="mb-0 text-gray-800"><strong>Alamat:</strong> Blahabatuh, Gianyar</p>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mr-4" 
                                    style="width: 40px; height: 40px;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <p class="mb-0 text-gray-800"><strong>Email:</strong> anggamurdika1005@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mb-4">
                            <div class="d-flex">
                                <a href="https://www.facebook.com/angga.pande.982" target="_blank" class="d-flex align-items-center justify-content-center btn btn-outline-primary rounded-circle mr-2" style="width: 40px; height: 40px;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://wa.me/62881037565094" target="_blank" class="d-flex align-items-center justify-content-center btn btn-outline-success rounded-circle mx-2" style="width: 40px; height: 40px;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="#" target="_blank" class="d-flex align-items-center justify-content-center btn btn-outline-danger rounded-circle mx-2" style="width: 40px; height: 40px;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" target="_blank" class="d-flex align-items-center justify-content-center btn btn-outline-primary rounded-circle ml-2" style="width: 40px; height: 40px;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section id="lokasi" class="mb-5 pt-2">
                        <h2 class="text-center mb-4 text-gray-800">Lokasi Rumah</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15781.375225344224!2d115.2831349845842!3d-8.56290106257456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2160a017a1ab5%3A0x3b23c7d13ce54325!2sJl.%20Bima%2012-1%2C%20Blahbatuh%2C%20Kec.%20Blahbatuh%2C%20Kabupaten%20Gianyar%2C%20Bali%2080581!5e0!3m2!1sen!2sid!4v1740609430665!5m2!1sen!2sid"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </section>

                </div>

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