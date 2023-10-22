<?php
$koneksi = mysqli_connect("localhost","root","","output_7");


$sql= "SELECT * FROM tbl_prodi";

$hasil = mysqli_query($koneksi, $sql);
?>

<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Status</td>
    </tr>
    <?php
    while ($baris = mysqli_fetch_assoc($hasil)) {
    
    ?>
    <tr>
        <td> <?php echo $baris['id_prodi']; ?></td>
        <td> <?php echo $baris['nama_prodi']; ?></td>
        <td> <?php echo $baris['ket']; ?></td>
    </tr>
    <?php } ?>
</table>