<?php 
include 'koneksi/koneksi.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $NIS = $_POST['NIS'];
    $NAMA = $_POST['NAMA'];
    $KELAS = $_POST['KELAS'];
    $JK = $_POST['JK'];
    $ALAMAT = $_POST['ALAMAT'];

    $query = "INSERT INTO t_siswa VALUES ('',
    '$NIS', '$NAMA', '$KELAS', '$JK', '$ALAMAT')";


    $result = mysqli_query($connect, $query) 
    or die (mysqli_error($connect));

    if($result){
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }

}

include 'views/form.php';
?>

<a href="index.php">Kembali</a>