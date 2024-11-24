<?php
include "koneksi/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM dosen");
include "views/datasiswa.php";
