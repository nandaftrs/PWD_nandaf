<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Jumlah Hari</title>
</head>
<body>
    <h2>Menghitung Jumlah Hari</h2>
    <form method="POST" action="">
        Bulan: <input type="number" name="bulan" min="1" max="12" required> 
        Tahun: <input type="number" name="tahun" min="1" required>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $hari = 0;

        switch ($bulan) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                $hari = 31;
                break;
            case 4: case 6: case 9: case 11:
                $hari = 30;
                break;
            case 2:
                if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                    $hari = 29; // Tahun kabisat
                } else {
                    $hari = 28;
                }
                break;
            default:
                echo "Bulan tidak valid.";
                break;
        }

        if ($hari > 0) {
            echo "<h2>Jumlah hari pada bulan $bulan tahun $tahun adalah $hari hari.</h2>";
        }
    }
    ?>
</body>
</html>
