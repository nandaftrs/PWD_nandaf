<html>
    <head>
        <title>Latihan Membuat Form</title>
    </head>

    <body>
        <form action="" method="get" name="myform">
            Nama: <input type="text" name="nm" size="25">
            <input type="submit" value="simpan" name="simpan">
        </form>

    <?php 
    // pemroses data inputan form
    if (isset($_GET['spn'])) {
        $nama = $_GET['nm'];
        echo "Nama Anda: <b>$nama</b>";
    }
    ?>
    </body>
</html>