<?php
include "nomor2_koneksi.php";

$id = $_POST["id_mhs"];
$nrp = $_POST['nrp_mhs'];
$nama = $_POST['nama_mhs'];
$email = $_POST['email_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "UPDATE tbl_mahasiswa SET nrp_mhs = '$nrp',nama_mhs = '$nama', email_mhs = '$email', alamat_mhs = '$alamat' WHERE id_mhs = $id";
$hasil = mysqli_query($koneksi,$sql);

if ($hasil) {
    header("Location: nomor2_data_mhs.php");
}else {
    echo "edit data mahasiswa gagal";
}


?>