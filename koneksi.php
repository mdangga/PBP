<?php

$db_username = "root";
$db_hostname = "localhost";
$db_password = "";
$db_name = "uts";
$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}