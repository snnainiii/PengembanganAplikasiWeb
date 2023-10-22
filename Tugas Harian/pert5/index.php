<?php
$koneksi = mysqli_connect("localhost","root","", "tugas");

// if ($koneksi) {
//     echo "koneksi sukses dilakukan";
// }else {
//     echo "gagal melakukan koneksi";
// }

// $sql= "SELECT * FROM tbl_mhs";
// $hasil = mysqli_query($koneksi, $sql);

// while ($baris = mysqli_fetch_assoc($hasil)) {
//     echo "<br>Nama: ".$baris['nama_mhs'];
//     echo "| Alamat: ".$baris['alamat_mhs'];

// }

$sql= "SELECT id_mhs,nama_mhs, nama_prodi, alamat_mhs
FROM tbl_mhs m, tbl_prodi p
WHERE m.id_prodi =p.id_prodi";
$hasil = mysqli_query($koneksi, $sql);

while ($baris = mysqli_fetch_assoc($hasil)) {
    echo "<br>Id mahasiswa: ".$baris['id_mhs'];
    echo "| Nama: ".$baris['nama_mhs'];
    echo "| Prodi: ".$baris['nama_prodi'];
    echo "| Alamat: ".$baris['alamat_mhs'];

}
?>