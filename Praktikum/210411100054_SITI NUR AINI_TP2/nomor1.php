<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nomor 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
    echo "<h1>Modul V PHP Fungsi</h1><br>";
    echo"Nama/NIM : Siti Nur Aini/210411100054 <br><br>";

// membuat fungsi jumlah
function jumlah($x, $y){
    $penjumlahan = $x + $y;
    return $penjumlahan;
    }

// membuat fungsi kali
function kali($x, $y){
    $perkalian = $x * $y;
    return $perkalian;
    }

// membuat fungsi bagi
    function bagi($x, $y){
        $pembagian = $x / $y;
        return $pembagian;
    }

// memanggil fungsi jumlah()
echo "<strong>Pemanggilan fungsi jumlah()</strong><br>";
echo "Jumlah x + y : ".jumlah(6,6)."<br>";
echo "Jumlah x + y : ".jumlah(8,8)."<br>";
echo "Jumlah x + y : ".jumlah(3,4)."<br><br>";

// memanggil fungsi kali()
echo "<strong>Pemanggilan fungsi kali()</strong><br>";
echo "Jumlah x * y : ".kali(17,5)."<br>";
echo "Jumlah x * y : ".kali(81,5)."<br>";
echo "Jumlah x * y : ".kali(135,5)."<br><br>";

// memanggil fungsi bagi()
echo "<strong>Pemanggilan fungsi bagi()</strong><br>";
echo "Jumlah x / y : ".bagi(68,100)."<br>";
echo "Jumlah x / y : ".bagi(16,6)."<br>";
echo "Jumlah x / y : ".bagi(36,20)."<br>";



    ?>
    </body>
</html>