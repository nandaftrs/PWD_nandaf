<?php 
// membuat fungsi
function perkenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Nanda Fitri","Hi");

    echo "<hr/>";

    $saya = "Ajuy";
    $ucapSalam = "Selamat pagi";
    // memanggilnya lagi
    perkenalan($saya, $ucapSalam);
?>