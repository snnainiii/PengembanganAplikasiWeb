<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "output_6";

$koneksi = mysqli_connect($host, $user, $password, $dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}

?>