<?php
echo "<h1>Modul IV PHP Kondisional</h1>";
echo "Nama/NIM : Siti Nur Aini/210411100054 <br><br>";

// strftime() digunakan untuk mengkonversi datetime ke dalam teks dalam format tertentu
// A = nama hari secara penuh
// d = menampilkan tanggal 1-31
// B = nama lengkap bulan
// Y = menampilkan 4 digit tahun
// setlocale = mengganti lokalisasi pada php


setlocale(LC_ALL, 'id-ID', 'id_ID');
$hari = strftime("%A");
$tanggal = strftime("%d %B %Y" );
echo "<strong> Sekarang Hari $hari : Tanggal $tanggal </strong>";


?>
