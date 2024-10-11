<!-- 
    * Pemrograman Web Dasar
    * bilangan_prima.php
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
    <title>Cari Bilangan Prima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cari Bilangan Prima</h1>

    <!-- Form untuk input rentang -->
    <form method="POST" action="">
        <input type="number" name="mulai" placeholder="Masukkan bilangan awal" required>
        <input type="number" name="akhir" placeholder="Masukkan bilangan akhir" required>
        <button type="submit" name="submit">Cari Bilangan Prima</button>
    </form>

    <?php
    // Fungsi untuk memeriksa apakah suatu bilangan prima
    function isPrima($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Jika form disubmit
    if (isset($_POST['submit'])) {
        $mulai = $_POST['mulai'];
        $akhir = $_POST['akhir'];
        
        echo "<div class='result'><strong>Bilangan Prima dari $mulai sampai $akhir:</strong><br>";

        // Mengiterasi bilangan dari $mulai hingga $akhir
        for ($i = $mulai; $i <= $akhir; $i++) {
            if (isPrima($i)) {
                echo "$i ";
            }
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
