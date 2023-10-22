<?php
$koneksi = mysqli_connect("localhost","root","", "output_7");
$id = $_GET['id'];

$sql = "DELETE FROM tbl_mhs WHERE id_mhs = $id";
$hasil = mysqli_query($koneksi, $sql );

if ($hasil) {
    header("location:data_mhs.php");
}

?>