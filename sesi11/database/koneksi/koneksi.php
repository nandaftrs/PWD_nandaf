<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "db_mahasiswa";

$connect = mysqli_connect($host, $username, $password, $db);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>