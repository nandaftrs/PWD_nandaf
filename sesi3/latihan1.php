<html>
    <head>
        <title>Latihan Pertama</title>
    </head>
    <body>
        <h1>Data Pribadi Saya</h1>
        <?php 
        // Deklarasi Variabel
        $nama_saya = "Nanda Fitri Safitriani";
        $jurusan = "Sistem Informasi";
        $semester = "III";
        $nim = "43230287";
        $umur = "20";
        $berat_badan = 70;

        /* di bawah ini adalah script untuk menampilkan data yang
        telah dideklarasikan di atas*/
        
        echo ("Nama saya $nama_saya<br>");
        echo "Sekarang semester $semester di Prodi $jurusan dan nim saya $nim<br>";
        echo "Umur saya $umur Sekarang adalah ' . $umur . ' tahun<br>";
        echo "Berat badan saya $berat_badan kg<br>";
        ?>
    </body>
</html>