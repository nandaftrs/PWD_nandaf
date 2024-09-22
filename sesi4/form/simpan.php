<?php 
    // pemroses data inputan form
    if (isset($_POST['spn'])) {
        $nama = $_POST['nm'];
        echo "Nama Anda: <b>$nama</b>";
    }
    ?>