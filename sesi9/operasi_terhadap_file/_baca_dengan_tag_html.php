/**
    * Pemrograman Web Dasar
    * Nama : Nanda Fitri Safitriani
    * NIM : 43230287
    * Program Studi : Sistem Informasi
*/ 

<?php 
//? buka file
$file = fopen("welcome2.txt", "r");
//? baca file dengan fgetss
echo fgets($file);
//? tutup file
fclose($file);