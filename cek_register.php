<?php
session_start();
include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];

$cek_username = mysqli_prepare($con, "SELECT * FROM users WHERE username = ?");
mysqli_stmt_bind_param($cek_username, "s", $username);
mysqli_stmt_execute($cek_username);
mysqli_stmt_store_result($cek_username);

if (mysqli_stmt_num_rows($cek_username) > 0) {
    mysqli_stmt_close($cek_username);
    header("Location: register.php?pesan=username_sudah_ada");
    exit;
}
mysqli_stmt_close($cek_username);

if ($password === $password2) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $input_data = mysqli_prepare($con, "INSERT INTO users (nama_lengkap, username, password, alamat, jenis_kelamin, pekerjaan) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($input_data, "ssssss", $nama_lengkap, $username, $hashedPassword, $alamat, $jenis_kelamin, $pekerjaan);
    mysqli_stmt_execute($input_data);
    mysqli_stmt_close($input_data);

    header("Location: index.php?pesan=berhasil");
} else {
    header("Location: register.php?pesan=gagal");
}
