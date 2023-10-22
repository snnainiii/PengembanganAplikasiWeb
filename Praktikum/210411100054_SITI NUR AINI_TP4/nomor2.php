<?php
session_start();

if(!isset($_SESSION['log'])){
    header('location: nomor1.php');
}

$mahasiswa = [
    ['Alfia Nurul Rdaus', 120411100056, 'Kediri'],
    ['Ahmad Fauzi', 120411100043, 'Sumenep'],
    ['Sinta Nuraini', 120411100087, 'Bangkalan']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
    .tablemhs {
        border-collapse: collapse;
    }
    .tablemhs, th, td {
        border: 1px solid black;
        padding: 8px 20px; 
    }

    </style>
</head>
<body>
        <h2>Daftar Mahasiswa</h2>
        <table class="tablemhs" width= "70%";>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Alamat</th>
            </tr>
            <?php for ($i=0; $i < count($mahasiswa); $i++):?>
            <tr>
                <td>
                    <?php echo $mahasiswa[$i][0]; ?>
                </td>
                <td>
                    <?php echo $mahasiswa[$i][1]; ?>
                </td>
                <td>
                    <?php echo $mahasiswa[$i][2]; ?>
                </td>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
    <br>
    <a href="logout.php"><button type="submit" >Logout</button></a>

</body>
</html>