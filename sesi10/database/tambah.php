<?php
ob_start(); // Memulai output buffering
include 'koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    // Debug: Periksa data yang dikirimkan dari form
    var_dump($_POST);
    
    $query = "INSERT INTO `mahasiswa`(`id`, `nis`, `nama`, `kelas`, `jk`, `alamat`) VALUES (NULL, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $nis, $nama, $kelas, $jk, $alamat);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil ditambahkan";
            header('Location: index.php');
            exit();
        } else {
            // Debug: Tampilkan error dari eksekusi statement
            echo "Error eksekusi: " . mysqli_error($connect);
        }
    } else {
        // Debug: Tampilkan error dari persiapan statement
        echo "Error prepare: " . mysqli_error($connect);
    }
}

include 'views/form.php';
ob_end_flush(); // Mengirim output dan menonaktifkan buffering
?>
