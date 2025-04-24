<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = ($_POST['password']);

$cari_username = mysqli_prepare($con, "SELECT * FROM users where username = ?");
mysqli_stmt_bind_param($cari_username, "s", $username);
mysqli_stmt_execute($cari_username);
$result = mysqli_stmt_get_result($cari_username);

if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        $_SESSION['status'] = "login";
        header("location: views/dashboard.php?pesan=login_berhasil");
        exit;
    } else {
        header("location: index.php?pesan=gagal");
        exit;
    }
} else {
    header("location: index.php?pesan=gagal");
    exit;
}
mysqli_stmt_close($cari_username);
