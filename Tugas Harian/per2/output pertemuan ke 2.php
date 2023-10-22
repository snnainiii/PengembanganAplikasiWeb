<?php
// membuat fungsi penghitung volume balok
function volumeBalok ($panjang, $lebar, $tinggi) {
    $volumeBalok = $panjang * $lebar * $tinggi;
    
    echo "Hitung Volume Balok Dengan "."<br>";
    echo "Panjang : ".$panjang. "<br>";
    echo "Lebar : ".$lebar. "<br>";
    echo "Tinggi : ".$tinggi. "<br>";
    echo "Rumus Volume Balok : panjang x lebar x tinggi <br>";
    echo "Volume Balok : ".$panjang ." x ".$lebar." x ".$tinggi."<br>";
    echo "Volume Balok : ". $volumeBalok." m<sup>3</sup> <br><br><br>";

    return $volumeBalok;
}

// memanggil fungsi
$balok1 = volumeBalok(3, 12, 6);
$balok2 = volumeBalok(41, 9, 15);
$balok3 = volumeBalok(13 ,36, 9);

?>
