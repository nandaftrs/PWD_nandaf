<!-- 
    * Pemrograman Web Dasar
    * bil_ganjil_genap.php
    * Nama : Nanda Fitri Safitriani
    * NIM : 43230287
    * Tanggal : 6 September 2024
    * Program Studi : Sistem Informasi
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Ganjil dan Genap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            color: #333;
        }
        .number-list {
            display: flex;
            flex-wrap: wrap;
        }
        .number {
            width: 50px;
            margin: 5px;
            padding: 10px;
            text-align: center;
            background-color: #e0e0e0;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bilangan Ganjil dan Genap (1 - 100)</h1>

    <!-- Bilangan Ganjil -->
    <div class="section">
        <h2>Bilangan Ganjil:</h2>
        <div class="number-list">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 2 != 0) {
                    echo "<div class='number'>$i</div>";
                }
            }
            ?>
        </div>
    </div>

    <!-- Bilangan Genap -->
    <div class="section">
        <h2>Bilangan Genap:</h2>
        <div class="number-list">
            <?php
            $i = 1;
            while ($i <= 100) {
                if ($i % 2 == 0) {
                    echo "<div class='number'>$i</div>";
                }
                $i++;
            }
            ?>
        </div>
    </div>

</div>

</body>
</html>
