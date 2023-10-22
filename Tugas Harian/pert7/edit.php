<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_mhs WHERE id_mhs = $id";
    $hasil = mysqli_query($koneksi, $sql);
    
    if (!$hasil) {
        echo "query salah";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
            // menselect data yang akan diubah
            while ($row = mysqli_fetch_array($hasil)) {
                ?>

        <div class="container mt-3">
            <h2>EDIT Data Mahasiswa</h2>
            <form action="actionedit.php" method="post" name="form_mhs">
                <!-- id mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="id_mhs" class="form-label"></label>
                    <input type="hidden" class="form-control"  name="id_mhs" value="<?php echo $id ?>">
                </div>
                <!-- nama mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nama_mhs" class="form-label" >Nama Mahasiswa</label>
                    <input type="text" class="form-control" value="<?php echo $row['nama_mhs']?>" name="nama_mhs">
                </div>
                <!-- 9nim mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nim_mhs" class="form-label">NIM Mahasiswa</label>
                    <input type="text" class="form-control"  value="<?php echo $row['nim_mhs']?>" name="nim_mhs">
                </div>
                <!-- prodi mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="nama_prodi" class="form-label">Prodi Mahasiswa</label>
                    <select class="form-control input-color" name="nama_prodi">
                        <?php 
                        $hasil2 = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
                        while($row2 = mysqli_fetch_assoc($hasil2)) { ?>

                        <?php if ($row['id_prodi'] == $row2['id_prodi']) {?>
                                <option value="<?php echo $row2['id_prodi'] ?>" selected><?php echo $row2['nama_prodi'] ?></option>
                        <?php }else { ?>
                                <option value="<?php echo $row2['id_prodi'] ?>"><?php echo $row2['nama_prodi'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <!-- alamat mahasiswa -->
                <div class="mb-3 mt-3">
                    <label for="alamat_mhs" class="form-label">Alamat Mahasiswa</label>
                    <input type="text" class="form-control" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>">
                </div>
                <!-- submit -->
                <div class="mb-3 mt-3">
                    <input type="submit" value="Update" class="btn btn-primary" name="kirim">
                </div>
            </form>
        </div>

        <?php } ?>
        
    </body>
</html>