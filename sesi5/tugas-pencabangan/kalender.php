<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Jumlah Hari Dalam Sebulan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
        }
        .month-info {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
        .error {
            font-size: 18px;
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Menentukan Jumlah Hari</h2>
        <form action="" method="POST">
            <label for="month">Masukkan nomor bulan (1-12):</label><br>
            <input type="number" id="month" name="month" min="1" max="12" required><br><br>
            <label for="year">Masukkan tahun (untuk bulan Februari):</label><br>
            <input type="number" id="year" name="year" required><br><br>
            <input type="submit" name="submit" value="Cek Jumlah Hari">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $month = $_POST['month'];
            $year = $_POST['year'];
            $days = 0;
            $month_name = "";

            switch ($month) {
                case 1:
                    $days = 31;
                    $month_name = "Januari";
                    break;
                case 2:
                    // Cek tahun kabisat
                    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                        $days = 29;
                        $month_name = "Februari (Kabisat)";
                    } else {
                        $days = 28;
                        $month_name = "Februari";
                    }
                    break;
                case 3:
                    $days = 31;
                    $month_name = "Maret";
                    break;
                case 4:
                    $days = 30;
                    $month_name = "April";
                    break;
                case 5:
                    $days = 31;
                    $month_name = "Mei";
                    break;
                case 6:
                    $days = 30;
                    $month_name = "Juni";
                    break;
                case 7:
                    $days = 31;
                    $month_name = "Juli";
                    break;
                case 8:
                    $days = 31;
                    $month_name = "Agustus";
                    break;
                case 9:
                    $days = 30;
                    $month_name = "September";
                    break;
                case 10:
                    $days = 31;
                    $month_name = "Oktober";
                    break;
                case 11:
                    $days = 30;
                    $month_name = "November";
                    break;
                case 12:
                    $days = 31;
                    $month_name = "Desember";
                    break;
                default:
                    echo "<div class='result'><span class='error'>Nomor bulan tidak valid! Masukkan angka 1-12.</span></div>";
                    exit();
            }

            if ($days > 0) {
                echo "<div class='result'><span class='month-info'>$month_name memiliki $days hari.</span></div>";
            }
        }
        ?>
    </div>
</body>
</html>
