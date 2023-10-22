<?php
include "nomor2_koneksi.php";

$nrp = $_POST['nrp_mhs'];
$nama = $_POST['nama_mhs'];
$email = $_POST['email_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mahasiswa value(null, '$nrp', '$nama', '$email' ,'$alamat')";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("Location: nomor2_data_mhs.php");
}else {
    echo "tambah mahasiswa gagal";
}


?>