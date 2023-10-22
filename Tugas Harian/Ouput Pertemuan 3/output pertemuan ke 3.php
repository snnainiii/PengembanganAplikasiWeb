
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Output Pertemuan Ke 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="hasil.php" method="post" enctype="multipart/form-data">
            <table border="0" cellpadding="2" bgcolor="#d1cfe2">
                <tr >
                    <td colspan="2"><strong>Nama :</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" size="35" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><strong>NIM :</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="number" name="nim" placeholder="Masukkan NIM" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Prodi :</strong></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="prodi" placeholder="Masukkan Prodi" size="35">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="gander" value="Laki-laki" id="male">
                        <label for="male">Laki-laki</label>
                        <br>
                        <input type="radio" name="gander" value="Perempuan" id="female">
                        <label for="male">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td><strong>Pasfoto</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="file">Pilih File :</label>
                        <input type="file" name="pasfoto" value="pasfoto" id="pasfoto">
                        <br><br>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>

        </form>

    </body>
</html>

