<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$prodi = $_POST['nama_prodi'];
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql_mhs = "UPDATE tbl_mhs SET id_prodi = $prodi, nama_mhs =  '$nama', nim_mhs = $nim, alamat_mhs = '$alamat' WHERE id_mhs = $id";
$hasil_mhs = mysqli_query($koneksi, $sql_mhs);


if (!$hasil_mhs) {
    echo "Eksekusi update data mahasiswa gagal";
}else {
    header("location:data_mhs.php");
}

?>