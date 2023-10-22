<?php 
$koneksi = mysqli_connect("localhost","root","", "tugas");

$sql= "SELECT id_mhs,nama_mhs, nama_prodi, alamat_mhs
FROM tbl_mhs m, tbl_prodi p
WHERE m.id_prodi =p.id_prodi";

$hasil = mysqli_query($koneksi, $sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA FAKUTAS TEKNIK</h2>
  <button type="button" class="btn btn-sm btn-success">Tambah</button>
  <!-- <p>Contextual classes can be used to color the table, table rows or table cells. The classes that can be used are: .table-primary, .table-success, .table-info, .table-warning, .table-danger, .table-active, .table-secondary, .table-light and .table-dark:</p> -->
  <table class="table" table-striped>
    <thead>
      <tr class="table-primary">
        <th>ID MHS </th>
        <th>Nama MHS</th>
        <th>Nama Prodi</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while(($baris = mysqli_fetch_assoc($hasil))){
    ?>    
      <tr class="table-info">
        <td > <?php echo $baris['id_mhs']; ?></td>
        <td> <?php echo $baris['nama_mhs']; ?></td>
        <td> <?php echo $baris['nama_prodi']; ?></td>
        <td> <?php echo $baris['alamat_mhs']; ?></td>
        <td>
            <button type="button" class="btn btn-sm btn-info">EDIT</button>
            <button type="button" class="btn btn-sm btn-danger">DELETE</button>
        </td>

      </tr>
    <?php } ?>

      <!-- <tr class="table-success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="table-danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="table-info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="table-warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="table-active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
      <tr class="table-secondary">
        <td>Secondary</td>
        <td>Secondson</td>
        <td>sec@example.com</td>
      </tr>
      <tr class="table-light">
        <td>Light</td>
        <td>Angie</td>
        <td>angie@example.com</td>
      </tr>
      <tr class="table-dark">
        <td>Dark</td>
        <td>Bo</td>
        <td>bo@example.com</td>
      </tr> -->
    </tbody>
  </table>
</div>

</body>
</html>
