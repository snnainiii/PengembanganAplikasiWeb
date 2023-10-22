<?php

// variabel local
// variabel yang tidak dapat diakses dari manapun, hanya bisa diakses di scope dimana dia didefinisikan

function contohLocal () {
    $nama = "Siti Nur Aini";
    echo "Variabel di dalam function hasilnya adalah $nama";
}
contohLocal(); 
echo "Variabel di luar function hasilnya adalah $nama";



// variabel global
// variabel yang selalu bisa diakses kapanpun dan dimanapun

$nilai1 = 23;
$nilai2 = 54;

function contohGlobal() {
    global $nilai1, $nilai2, $hasil;
    $hasil = $nilai1 + $nilai2;
}

contohGlobal();
echo "$nilai1 + $nilai2 : $hasil"; 

?>