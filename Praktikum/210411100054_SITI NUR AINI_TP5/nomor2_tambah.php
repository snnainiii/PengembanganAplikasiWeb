<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>

        .judul{
            text-align: center;
        }
        
        .kotak_tambah{
            width: 300px;
            background: #f2fff2;
            margin: 80px auto;
            padding: 30px 20px;
            border: solid 1px black;
            border-radius: 10px;
        }
        input {
            border: solid 1px #00bf00;
            width:290px;
            height:25px;
        }
        .submit{
            width:200px;
            height:35px;
            background: #00bf00;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 17px;
            color: white;

        }
        </style>
    </head>
    <body>
        <div class="kotak_tambah">
        <h2 class="judul">Tambah Data Mahasiswa</h2>
        <form method="post" action="nomor2_action_tambah.php">
            <strong>NRP :</strong>
            <br>
            <input type="text" name="nrp_mhs" >
            <br><br>
            <strong>Nama :</strong>
            <br>
            <input type="text" name="nama_mhs" >
            <br><br>
            <strong>Email :</strong>
            <br>
            <input type="text" name="email_mhs" >
            <br><br>
            <strong>Alamat :</strong>
            <br> 
            <input type="text" name="alamat_mhs" >
            <br><br>
            <button type="submit" name="submit" class="submit">Tambah</button>
        </form>
        </div>
    </body>
</html>