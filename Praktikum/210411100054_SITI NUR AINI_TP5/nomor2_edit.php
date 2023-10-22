<?php
include "nomor2_koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_mahasiswa where id_mhs = $id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "query gagal";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
                <style>
        .judul{
            text-align: center;
        }
        
        .kotak_edit{
            width: 300px;
            background: #d9ecff;
            margin: 80px auto;
            padding: 30px 20px;
            border: solid 1px black;
            border-radius: 10px;
        }

        input {
            border: solid 1px #0080ff;
            width:290px;
            height:25px;
        }
        .submit{
            width:200px;
            height:35px;
            background: #0080ff;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 17px;
            color: white;

        }
        </style>
    </head>
    <body>
        <?php 
        while ($baris = mysqli_fetch_array($hasil)) {

        ?>
        <div class="kotak_edit">
        <h2 class="judul">Edit Data Mahasiswa</h2>
        <form method="post" action="nomor2_action_edit.php">
            <input type="hidden" name="id_mhs" value="<?php echo $baris['id_mhs']; ?>">
            <strong>NRP :</strong>
            <br>
            <input type="text" name="nrp_mhs" value="<?php echo $baris['nrp_mhs']; ?>">
            <br><br>
            <strong>Nama :</strong>
            <br>
            <input type="text" name="nama_mhs" value="<?php echo $baris['nama_mhs']; ?>">
            <br><br>
            <strong>Email :</strong>
            <br>
            <input type="text" name="email_mhs" value="<?php echo $baris['email_mhs']; ?>">
            <br><br>
            <strong>Alamat :</strong>
            <br> 
            <input type="text" name="alamat_mhs" value="<?php echo $baris['alamat_mhs']; ?>">
            <br><br>
            <button type="submit" name="submit" class="submit">Update</button>
        </form>
        </div>
        <?php } ?>
    </body>
</html>