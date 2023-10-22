<?php
function coba($jumlah, $nama) {
    for ($i=0; $i < $jumlah ; $i++) { 
        echo("<br>selamat datang ".$nama);
    }
}
coba(4, 'Aini');
echo('<br> line baru');
coba(4, 'Siti Nur Aini');

?>