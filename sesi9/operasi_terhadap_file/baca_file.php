/**
    * Pemrograman Web Dasar
    * Nama : Nanda Fitri Safitriani
    * NIM : 43230287
    * Program Studi : Sistem Informasi
*/ 

<?php 
//? buka file
$file = fopen("welcome.txt","r");
//? baca file
echo fgets($file);
//? tutup file
fclose($file);