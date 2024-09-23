<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Nilai dalam Array</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-fit">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h1 class="text-2xl font-bold mb-4">Cari Nilai Mata Pelajaran</h1>
        <form action="" method="post" class="mb-6">
            <div class="mb-4">
                <label for="nilaiDicari" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Nilai yang Dicari:</label>
                <input type="number" id="nilaiDicari" name="nilaiDicari" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Cari Nilai</button>
        </form>

        <?php
        // Array 2 dimensi berisi nama mata pelajaran dan dua nilai
        $nilai = [
            ["Matematika", 80, 75],
            ["Fisika", 90, 85],
            ["Kimia", 75, 80]
        ];

        // Jika form disubmit, cari nilai dalam array
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilaiDicari = isset($_POST['nilaiDicari']) ? (int)$_POST['nilaiDicari'] : null;
            $ada = false;

            if ($nilaiDicari !== null) {
                for ($i = 0; $i < count($nilai); $i++) {
                    for ($j = 1; $j < count($nilai[$i]); $j++) { // Mulai dari indeks 1 untuk memeriksa nilai
                        if ($nilai[$i][$j] == $nilaiDicari) {
                            $ada = true;
                            break;
                        }
                    }
                    if ($ada) break;
                }

                if ($ada) {
                    echo "<p class='text-green-500 font-bold mt-4'>Nilai $nilaiDicari ditemukan dalam array.</p>";
                } else {
                    echo "<p class='text-red-500 font-bold mt-4'>Nilai $nilaiDicari tidak ditemukan dalam array.</p>";
                }
            }
        }

        // Tampilkan data nilai dalam bentuk tabel
        echo "<h2 class='text-xl font-semibold mt-6 mb-4'>Daftar Nilai Mata Pelajaran</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300'>";
        echo "<thead class='bg-gray-200'>";
        echo "<tr>";
        echo "<th class='py-2 px-4 border'>Mata Pelajaran</th>";
        echo "<th class='py-2 px-4 border'>Nilai 1</th>";
        echo "<th class='py-2 px-4 border'>Nilai 2</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // Tampilkan isi array
        for ($i = 0; $i < count($nilai); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($nilai[$i]); $j++) {
                echo "<td class='py-2 px-4 border'>" . $nilai[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
</body>
</html>
