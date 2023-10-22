<?php
$koneksi = mysqli_connect("localhost","root","", "output_7");

$sql= "SELECT * FROM tbl_prodi ORDER BY nama_prodi";

$hasil = mysqli_query($koneksi, $sql);

if (!empty($_POST['kirim'])) {
    $prodi = $_POST['nama_prodi'];
    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $alamat = $_POST['alamat_mhs'];

    $hasil2 = mysqli_query($koneksi, "INSERT INTO tbl_mhs VALUE(NULL, $prodi, '$nama', $nim, '$alamat')");
    if ($hasil2) {
        header("location:data_mhs.php");
    }else {
        'gagal';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h2>Tambah Data Mahasiswa</h2>
            <form action="actiontambah.php" method="post" name="form_mhs">
                <!-- nama mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control"  placeholder="Masukkan Nama Mahasiswa" name="nama_mhs">
                </div>
                <!-- nim mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nim_mhs" class="form-label">NIM Mahasiswa</label>
                    <input type="text" class="form-control"  placeholder="Masukkan NIM Mahasiswa" name="nim_mhs">
                </div>
                <!-- prodi mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nama_prodi" class="form-label">Prodi Mahasiswa</label>
                    <select class="form-select" aria-label="Default select example" name="nama_prodi">
                        <option>Pilih Prodi</option>
                        <?php
                            while ($baris = mysqli_fetch_assoc($hasil)) 
                            {
                        ?> 
                        <option value= "<?php echo $baris['id_prodi'];?>" ><?php echo $baris['nama_prodi']; ?></option>
                        <?php } ?>    
                    </select>
                </div>
                <!-- alamat mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="alamat_mhs" class="form-label">Alamat Mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan Alamat Mahasiswa" name="alamat_mhs">
                </div> 
                <!-- submit -->
                <div class="mb-3 mt-3">
                    <input type="submit" value="Send" class="btn btn-primary" placeholder="Masukkan Alamat Mahasiswa" name="kirim">
                </div>
            </form>
        </div>
    </body>
</html>


