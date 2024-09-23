<!-- 
    * Pemrograman Web Dasar
    * array1DimensiTambahElemen.php
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
    <title>Tambah Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Tambah Kota ke dalam Array</h1>

        <?php
        // Buat array 1 dimensi
        $kota = ["Bandung", "Jakarta", "Semarang"];

        // Tampilkan isi array sebelum menambahkan kota baru
        echo "<h2 class='text-xl font-semibold mb-2'>Daftar Kota yang Tersedia:</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300 mb-6'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<th class='py-2 px-4 border'>No</th>";
        echo "<th class='py-2 px-4 border'>Nama Kota</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // Tampilkan isi array kota yang sudah ada
        for ($i = 0; $i < count($kota); $i++) {
            echo "<tr class='text-center'>";
            echo "<td class='py-2 px-4 border'>" . ($i + 1) . "</td>";
            echo "<td class='py-2 px-4 border'>" . $kota[$i] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>

        <!-- Form untuk menambahkan kota baru -->
        <form action="" method="post">
            <div class="mb-4">
                <label for="kota" class="block text-gray-700 text-sm font-bold mb-2">Masukkan Nama Kota:</label>
                <input type="text" id="kota" name="kota" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Tambah</button>
        </form>

        <?php
        // Tambah kota baru ke dalam array jika form disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kotaBaru = isset($_POST['kota']) ? trim($_POST['kota']) : '';

            if (!empty($kotaBaru)) {
                array_push($kota, $kotaBaru);
            }

            // Tampilkan kembali isi array setelah ditambahkan
            echo "<h2 class='text-xl font-semibold mt-6 mb-2'>Daftar Kota Setelah Penambahan:</h2>";
            echo "<table class='min-w-full bg-white border border-gray-300'>";
            echo "<thead>";
            echo "<tr class='bg-gray-200'>";
            echo "<th class='py-2 px-4 border'>No</th>";
            echo "<th class='py-2 px-4 border'>Nama Kota</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            // Tampilkan isi array yang sudah diperbarui
            for ($i = 0; $i < count($kota); $i++) {
                echo "<tr class='text-center'>";
                echo "<td class='py-2 px-4 border'>" . ($i + 1) . "</td>";
                echo "<td class='py-2 px-4 border'>" . $kota[$i] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
