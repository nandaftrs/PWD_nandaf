<?php
include "koneksi/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIS = $_POST['NIS'];
    $NAMA = $_POST['NAMA'];
    $KELAS = $_POST['KELAS'];
    $JK = $_POST['JK'];
    $ALAMAT = $_POST['ALAMAT'];

    $query = mysqli_query($conn, "INSERT INTO dosen (NIS, NAMA, KELAS, JK, ALAMAT) VALUES ('$NIS', '$NAMA', '$KELAS', '$JK', '$ALAMAT')");

    if ($query) {
        header("location: index.php");
    } else {
        echo '<script type="text/javascript">alert("Data gagal disimpan");</script>';
    }
}
include "views/form.php";
