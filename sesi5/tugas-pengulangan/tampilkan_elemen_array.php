<!-- 
    * Pemrograman Web Dasar
    * tampilkan_elemen_array.php
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
    <title>Tampilkan Elemen Array</title>
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
        .array-container {
            margin-bottom: 20px;
        }
        .array-container h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .array-elements {
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 4px;
        }
        .element {
            padding: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tampilkan Elemen Array</h1>

    <!-- Tampilkan elemen array bilangan -->
    <div class="array-container">
        <h2>Array Bilangan:</h2>
        <div class="array-elements">
            <?php
            $bilangan = array(10, 20, 30, 40, 50);
            foreach ($bilangan as $value) {
                echo "<div class='element'>Bilangan: $value</div>";
            }
            ?>
        </div>
    </div>

    <!-- Tampilkan elemen array kata -->
    <div class="array-container">
        <h2>Array Kata:</h2>
        <div class="array-elements">
            <?php
            $kata = array("Merah", "Kuning", "Hijau", "Biru", "Ungu");
            foreach ($kata as $value) {
                echo "<div class='element'>Kata: $value</div>";
            }
            ?>
        </div>
    </div>

    <!-- Tampilkan elemen array data -->
    <div class="array-container">
        <h2>Array Data:</h2>
        <div class="array-elements">
            <?php
            $data = array(1, "Belajar", 3.14, true, false);
            foreach ($data as $value) {
                echo "<div class='element'>Data: " . (is_bool($value) ? ($value ? 'True' : 'False') : $value) . "</div>";
            }
            ?>
        </div>
    </div>

</div>

</body>
</html>
