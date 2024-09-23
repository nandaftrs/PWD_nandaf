<!-- 
    * Pemrograman Web Dasar
    * array1DimensiCariNilai.php
    * Dibuat oleh: Nanda Fitri Safitriani
    * NIM: 43230287
    * Tanggal: 13 September 2024
    * Program Studi: Sistem Informasi
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Angka</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Cek Angka dalam Array</h1>
        <form action="" method="post">
            <div class="mb-4">
                <label for="angka" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Angka:</label>
                <input type="number" id="angka" name="angka" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Cek</button>
        </form>

        <?php
        // Buat array 1 dimensi
        $angkaArray = [10, 20, 30, 40, 50];

        // Tampilkan isi array dalam bentuk tabel
        echo "<h2 class='text-xl font-semibold mt-6 mb-4'>Daftar Angka dalam Array</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300 mb-6'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<th class='py-2 px-4 border'>Angka</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // Tampilkan isi array angka
        for ($i = 0; $i < count($angkaArray); $i++) {
            echo "<tr class='text-center'>";
            echo "<td class='py-2 px-4 border'>" . $angkaArray[$i] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        // Proses pencarian nilai dalam array jika form disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil angka dari formulir
            $nilaiDicari = isset($_POST['angka']) ? (int)$_POST['angka'] : 0;
            
            // Cek apakah nilai dicari ada dalam array
            $ada = in_array($nilaiDicari, $angkaArray);

            // Tampilkan hasil pencarian
            if ($ada) {
                echo "<p class='mt-4 text-green-500'>Nilai $nilaiDicari ditemukan dalam array.</p>";
            } else {
                echo "<p class='mt-4 text-red-500'>Nilai $nilaiDicari tidak ditemukan dalam array.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
