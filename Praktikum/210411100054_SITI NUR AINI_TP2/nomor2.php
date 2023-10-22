<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nomor 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php

    echo "<h1>Modul II PHP FPB</h1><br>";
    echo"Nama/NIM : Siti Nur Aini/210411100054 <br><br>";

    // fungsi untuk faktorisasi bilangan
    function faktorisasi($angka){
    $faktor = [];
    for ($i = 1; $i <= $angka; $i++) {
        if ($angka % $i == 0) {
            array_push($faktor, $i);
            }
        }
    return $faktor;
    }

    $bil1 =  50;
    echo "Bilangan 1 = $bil1 <br>";
    $bil2 = 100; 
    echo "Bilangan 2 = $bil2 <br>";

    echo "Faktor pembagi $bil1 = ";
    $hasil = print_r(faktorisasi($bil1));
    echo " <br> Faktor pembagi $bil2 = ";
    $hasil = print_r(faktorisasi($bil2));
    
    // menentukan faktor yang sama dan FPB
    if ($bil1 < $bil2) {
        $terkecil = $bil1;
    }else {
        $terkecil = $bil2;
    }
    
    $faktorsama = [];            
    for ($sama = 1 ; $sama <= $terkecil ; $sama++) { 
        if ($bil1 % $sama == 0 && $bil2 % $sama == 0) {
            array_push($faktorsama, $sama);
                    
        }
    }      
    echo "<br> Faktor yang sama = ";
    $hasilakhir = print_r($faktorsama);

    echo "<br> Faktor Persekutuan Terbesar = $terkecil";

?>

    </body>
</html>