<?php 
// koneksi db
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// update ke db
mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php")
?>