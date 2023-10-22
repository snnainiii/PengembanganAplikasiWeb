<?php 
$koneksi = mysqli_connect("localhost","root","", "output_7");

$sql= "SELECT * FROM tbl_mhs
INNER JOIN tbl_prodi ON tbl_mhs.id_prodi = tbl_prodi.id_prodi";

$hasil = mysqli_query($koneksi, $sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA MAHASISWA FAKUTAS TEKNIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2 align="center">DATA MAHASISWA FAKULTAS TEKNIK</h2>
    <a href="tambah.php" class = "btn btn-success btn-sm">Tambah</a>
    <table class=" table table-striped table-bordered">
        <thead>
        <tr class="table-primary">
            <th>ID MHS </th>
            <th>Prodi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while(($baris = mysqli_fetch_assoc($hasil))){
        ?>    
        <tr class="table-primary">
            <td> <?php echo $baris['id_mhs']; ?></td>
            <td> <?php echo $baris['nama_prodi']; ?></td>
            <td> <?php echo $baris['nama_mhs']; ?></td>
            <td> <?php echo $baris['nim_mhs']; ?></td>
            <td> <?php echo $baris['alamat_mhs']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $baris['id_mhs']; ?>"  class = "btn btn-info btn-sm">EDIT</a>
                <a href="hapus.php?id=<?php echo $baris['id_mhs']; ?>" onclick="return confirm('Yakin?')" class = "btn btn-danger btn-sm">DELETE</a>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>

