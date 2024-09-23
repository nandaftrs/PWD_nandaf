<!-- 
Program : array1DimensiHapusElemen
Dibuat Oleh : Nanda Fitri Safitriani
NIM : 43230287
Prodi : Sistem Informasi
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Elemen Array</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Hapus Elemen dari Array</h1>

        <?php
        // Buat array 1 dimensi
        $huruf = ["A", "B", "C", "D", "E"];

        // Tampilkan tabel berisi elemen array sebelum penghapusan
        echo "<h2 class='text-xl font-semibold mb-2'>Isi Array Sebelum Dihapus:</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300 mb-6'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<th class='py-2 px-4 border'>Indeks</th>";
        echo "<th class='py-2 px-4 border'>Nilai</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($huruf as $key => $value) {
            echo "<tr class='text-center'>";
            echo "<td class='py-2 px-4 border'>$key</td>";
            echo "<td class='py-2 px-4 border'>$value</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>

        <!-- Form untuk menghapus elemen berdasarkan indeks -->
        <form action="" method="post">
            <div class="mb-4">
                <label for="index" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Indeks Elemen (0-4):</label>
                <input type="number" id="index" name="index" min="0" max="4" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Hapus</button>
        </form>

        <?php
        // Jika form disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil indeks dari input
            $index = isset($_POST['index']) ? (int)$_POST['index'] : -1;

            // Hapus elemen dari array pada indeks yang ditentukan
            if ($index >= 0 && $index < count($huruf)) {
                unset($huruf[$index]);

                // Urutkan ulang array setelah penghapusan
                $huruf = array_values($huruf);
            }

            // Tampilkan tabel berisi elemen array setelah penghapusan
            echo "<h2 class='text-xl font-semibold mt-6 mb-2'>Isi Array Setelah Dihapus:</h2>";
            echo "<table class='min-w-full bg-white border border-gray-300'>";
            echo "<thead>";
            echo "<tr class='bg-gray-200'>";
            echo "<th class='py-2 px-4 border'>Indeks</th>";
            echo "<th class='py-2 px-4 border'>Nilai</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($huruf as $key => $value) {
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
