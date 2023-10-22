<?php 
$koneksi = mysqli_connect("localhost","root","", "output_6");

$sql= "SELECT * FROM tbl_mhs";

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
    <style>
        #tambahform a{
            text-decoration: none;
            color: white;   
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <h2>DATA MAHASISWA FAKUTAS TEKNIK</h2>
    <button type="submit" class="btn btn-sm btn-success" id="tambahform"><a href="form_mhs.php">Tambah</a></button>
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
                <button type="button" class="btn btn-sm btn-info">EDIT</button>
                <button type="button" class="btn btn-sm btn-danger">DELETE</button>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
