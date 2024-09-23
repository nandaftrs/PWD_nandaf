<?php 
function tampil_identitas($nama, $kelas, $alamat) {
    echo "Nama Saya ". $nama . "<br/>";
    echo "Kelas Saya ". $kelas . "<br/>";
    echo "Alamat Saya di ". $alamat . "<br/>";
}

tampil_identitas("Nanda Fitri Safitriani", "SI-2023-KIP-P2", "Jl. Sukasari Gang 9");

function hitung_umur($tahun_lahir, $tahun_sekarang) {
    return $tahun_sekarang - $tahun_lahir;

}


hitung_umur(2003, 2024);
?>