<?php
include "../koneksi.php";

$id_anggota = $_GET["idanggota"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jeniskelamin"];
$alamat = $_POST["alamat"];

if (isset($_POST["simpan"])) {
    mysqli_query($db, "UPDATE tbanggota SET nama='$nama', jeniskelamin='$jenis_kelamin', alamat='$alamat' WHERE idanggota='$id_anggota'");
    header("location: index.php?p=anggota");
}
