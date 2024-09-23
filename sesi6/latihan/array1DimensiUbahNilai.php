<!-- 
Program : array1DimensiUbahNilai
Dibuat Oleh : Nanda Fitri Safitriani
NIM : 43230287
Prodi : Sistem Informasi
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Nilai Array</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Ubah Nilai Elemen Array</h1>

        <?php
        // Buat array 1 dimensi
        $bilangan = [1, 2, 3, 4, 5];

        // Tampilkan isi array sebelum perubahan
        echo "<h2 class='text-xl font-semibold mb-2'>Isi Array Sebelum Diubah:</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300 mb-6'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<th class='py-2 px-4 border'>Indeks</th>";
        echo "<th class='py-2 px-4 border'>Nilai</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($bilangan as $key => $value) {
            echo "<tr class='text-center'>";
            echo "<td class='py-2 px-4 border'>$key</td>";
            echo "<td class='py-2 px-4 border'>$value</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>

        <!-- Form untuk mengubah nilai elemen array -->
        <form action="" method="post">
            <div class="mb-4">
                <label for="index" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Indeks Elemen (0-4):</label>
                <input type="number" id="index" name="index" min="0" max="4" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="nilai" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Nilai Baru:</label>
                <input type="number" id="nilai" name="nilai" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Ubah</button>
        </form>

        <?php
        // Proses perubahan nilai elemen array jika form disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil indeks dan nilai baru dari formulir
            $index = isset($_POST['index']) ? (int)$_POST['index'] : 0;
            $nilaiBaru = isset($_POST['nilai']) ? (int)$_POST['nilai'] : 0;

            // Ubah nilai elemen array pada indeks yang ditentukan
            if ($index >= 0 && $index < count($bilangan)) {
                $bilangan[$index] = $nilaiBaru;
            }

            // Tampilkan isi array setelah diubah
            echo "<h2 class='text-xl font-semibold mt-6 mb-2'>Isi Array Setelah Diubah:</h2>";
            echo "<table class='min-w-full bg-white border border-gray-300'>";
            echo "<thead>";
            echo "<tr class='bg-gray-200'>";
            echo "<th class='py-2 px-4 border'>Indeks</th>";
            echo "<th class='py-2 px-4 border'>Nilai</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($bilangan as $key => $value) {
                echo "<tr class='text-center'>";
                echo "<td class='py-2 px-4 border'>$key</td>";
                echo "<td class='py-2 px-4 border'>$value</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
