<?php
include "koneksi.php";

// $id = $_POST['id_mhs'];
$prodi = $_POST['nama_prodi'];
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES (NULL,'$prodi', '$nama', '$nim', '$alamat')";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
    echo "Eksekusi tambah data mahasiswa gagal";
}else {
    header("location:data_mhs.php");
}
?>