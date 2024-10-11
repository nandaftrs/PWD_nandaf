<!-- 
    * Pemrograman Web Dasar
    * ubah_huruf_ke_kapital.php
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
    <title>Ubah Huruf ke Kapital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
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
        input[type="text"] {
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
    <h1>Ubah Huruf Menjadi Kapital</h1>

    <!-- Form input string -->
    <form method="POST" action="">
        <input type="text" name="input_string" placeholder="Masukkan string di sini" required>
        <button type="submit" name="submit">Ubah ke Huruf Kapital</button>
    </form>

    <?php
    // Jika form disubmit
    if (isset($_POST['submit'])) {
        $input_string = $_POST['input_string'];
        $result_string = '';
        $i = 0;

        // Looping while untuk mengubah huruf menjadi kapital
        while ($i < strlen($input_string)) {
            $result_string .= strtoupper($input_string[$i]);
            $i++;
        }

        // Menampilkan hasil
        echo "<div class='result'><strong>Hasil:</strong> " . $result_string . "</div>";
    }
    ?>

</div>

</body>
</html>
