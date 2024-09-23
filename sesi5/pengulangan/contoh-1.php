<html>
    <head>
        <title>Membuat Script PHP menghitung Jumlah Karakter - Tutorial</title>
    </head>
    <body>
        <h2>Script PHP Menghitung Jumlah Karakter</h2>
        <h4>berapa jumlah karakter kalimat dibawah ini?</h4>
        <p>
            <?php 
                $kalimat = "1. Belajar PHP dari Dasar - Pengertian PHP";
            ?>
            Kalimat: <u><?php echo $kalimat?></u>
        </p>
        <p>
            <?php
                $jumlah_karakter = strlen($kalimat);
                echo "Jumlah Jumlah Karakter = $jumlah_karakter karakter";
            ?>
        </p>
    </body>
</html>