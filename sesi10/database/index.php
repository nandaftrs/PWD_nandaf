<a href="tambah.php">Tambah Mahasiswa</a>
<br>
<br>

<?php 
include 'koneksi/koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM t_siswa");
include 'views/datasiswa.php';
?>

