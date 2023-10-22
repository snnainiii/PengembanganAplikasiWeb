<?php
include "nomor2_koneksi.php";
$sql = "SELECT * FROM tbl_mahasiswa";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "query gagal";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        .table_mhs {
            border-collapse: collapse;
        }
        .table_mhs, th, td {
            border: 1px solid black;
            padding: 8px 20px; 
            
        }
        
        .button_tambah {
            background-color: #00bf00;
            border: 1px solid black;
            border-radius: 2px;
        }
        
        .button_edit {
            background-color: #1c8dff;
            border: 1px solid black;
            border-radius: 2px;
        }
        
        .button_delete {
            background-color: #ff0000;
            border: 1px solid black;
            border-radius: 2px;
        }

        button, a {
            text-decoration: none;
            color: white;
        }

    </style>
    </head>
    <body>
    <h1>Modul VI PHP & MySQL</h1>
    <p>Nama/NRP : Siti Nur Aini/210411100054</p>
    <hr>

    <table border="1"  class="table_mhs">
        <h1>Master Data Mahasiswa</h1>
        <button type="submit" class="button_tambah"><a href="nomor2_tambah.php">TAMBAH</a></button>
        <br><br>
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>NAMA</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Operasi</th>
        </tr>

        <?php
        while ($baris = mysqli_fetch_assoc($hasil)){
        
        ?>
        <tr>
            <td><?php echo $baris['id_mhs']; ?>  </td>
            <td><?php echo $baris['nrp_mhs']; ?>  </td>
            <td><?php echo $baris['nama_mhs']; ?>  </td>
            <td><?php echo $baris['email_mhs']; ?>  </td>
            <td><?php echo $baris['alamat_mhs']; ?>  </td>
            <td>
                <button type="submit" class="button_edit"><a href="nomor2_edit.php?id=<?php echo $baris['id_mhs']; ?>">EDIT</a></button> |
                <button type="submit" class="button_delete"><a href="nomor2_delete.php?id=<?php echo $baris['id_mhs']; ?>" onclick="return confirm('Yakin?')">DELETE</a></button>
                
            </td>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>