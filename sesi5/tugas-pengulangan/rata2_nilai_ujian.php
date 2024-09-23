<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-rata Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
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
    <h1>Hitung Rata-rata Nilai Ujian</h1>

    <!-- Form untuk input nilai -->
    <form method="POST" action="">
        <?php
        // Meminta input nilai dari 5 siswa
        $i = 1;
        do {
            echo '<input type="number" name="nilai[]" placeholder="Masukkan nilai siswa ' . $i . '" required>';
            $i++;
        } while ($i <= 5);
        ?>
        <button type="submit" name="submit">Hitung Rata-rata</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $totalNilai = 0;
        $jumlahSiswa = count($nilai);

        // Menghitung total nilai menggunakan looping for
        for ($i = 0; $i < $jumlahSiswa; $i++) {
            $totalNilai += $nilai[$i];
        }

        // Menghitung rata-rata
        $rataRata = $totalNilai / $jumlahSiswa;

        // Menampilkan hasil rata-rata
        echo "<div class='result'><strong>Rata-rata Nilai Ujian: </strong>" . round($rataRata, 2) . "</div>";
    }
    ?>
</div>

</body>
</html>
