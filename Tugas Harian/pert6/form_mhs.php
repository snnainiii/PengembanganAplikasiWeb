<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Tambah Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1 align="center">Form Tambah Mahasiswa</h1>
        <form method="post" action="action.php">
            <h4>Id Mahasiswa : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id_mhs"></h4>
            <h4>Nama Prodi : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nama_prodi"></h4>
            <h4>Nama Mahasiswa : &nbsp;&nbsp;&nbsp;<input type="text" name="nama_mhs"></h4>
            <h4>NIM Mahasiswa : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="nim_mhs"> </h4> 
            <h4>Alamat Mahasiswa : <input type="text" name="alamat_mhs"> </h4>
            <button type="submit">Kirim </button>
        </form>
    </body>
</html>

