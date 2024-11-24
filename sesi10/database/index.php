<?php
include 'koneksi/koneksi.php';

// Periksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel mahasiswa
$query = mysqli_query($connect, 'SELECT * FROM mahasiswa');

// Periksa apakah query berhasil dijalankan
if (!$query) {
    die("Error dalam query: " . mysqli_error($connect));
}

// Tampilkan data
include 'views/datasiswa.php';

// Tutup koneksi database
mysqli_close($connect);
?>