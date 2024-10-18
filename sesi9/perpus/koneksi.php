<?php
$server =  "localhost";
$user = "root";
$pass = "";
$database = "dbpus";

$koneksi = mysqli_connect($server, $user, $pass, $dbpus);

if (!$koneksi) {
    echo "Koneksi gagal";
}
