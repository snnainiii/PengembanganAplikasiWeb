<?php

$nama = $_POST['nama'];
echo "Nama: ".$nama."<br>";

$nim = $_POST['nim'];
echo "nim: ".$nim."<br>";

$prodi = $_POST['prodi'];
echo "prodi: ".$prodi."<br>";

$gander= $_POST['gander'];
echo "Jenis Kelamin: ".$gander."<br>";

// folder tempat menyimpan file
$nama_folder = "foto/"; 
$foto = $nama_folder . basename($_FILES['pasfoto']['name']);
echo "<img src='$foto ' height ='400'>";

?>
