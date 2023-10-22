<?php

include "nomor2_koneksi.php";

$id = $_GET["id"];

$sql = "DELETE FROM tbl_mahasiswa WHERE id_mhs = $id";
$hasil = mysqli_query($koneksi,$sql);

if ($hasil) {
    header("Location: nomor2_data_mhs.php");
}else {
    echo "hapus data mahasiswa gagal";
}


?>