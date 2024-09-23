<!-- 
Program : array2DimensiHapusElemen
Dibuat Oleh : Nanda Fitri Safitriani
NIM : 43230287
Prodi : Sistem Informasi
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-fit">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-2xl font-bold mb-4">Input Data Peserta</h1>
        
        <!-- Form untuk input data peserta -->
        <form action="" method="post" class="mb-6">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Peserta:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="umur" class="block text-gray-700 text-sm font-bold mb-2">Umur:</label>
                <input type="number" id="umur" name="umur" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="kota" class="block text-gray-700 text-sm font-bold mb-2">Kota:</label>
                <input type="text" id="kota" name="kota" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Tambahkan Peserta</button>
        </form>

        <?php
        // Array 2 dimensi awal berisi data peserta
        $peserta = [
            ["Andi", 21, "Malang"],
            ["Budi", 22, "Surabaya"],
            ["Caca", 20, "Yogyakarta"],
            ["Doni", 23, "Semarang"]
        ];

        // Jika form disubmit, tambahkan data peserta baru
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['hapus'])) {
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $umur = isset($_POST['umur']) ? (int)$_POST['umur'] : 0;
            $kota = isset($_POST['kota']) ? $_POST['kota'] : '';

            if (!empty($nama) && $umur > 0 && !empty($kota)) {
                $peserta[] = [$nama, $umur, $kota];  // Tambahkan data ke array
            }
        }

        // Hapus peserta tertentu dari array
        if (isset($_POST['hapus'])) {
            $namaHapus = $_POST['hapus'];
            foreach ($peserta as $key => $p) {
                if ($p[0] == $namaHapus) {
                    unset($peserta[$key]);  // Hapus peserta
                }
            }
            // Reindex array setelah penghapusan
            $peserta = array_values($peserta);
        }

        // Tampilkan data peserta dalam bentuk tabel
        echo "<h2 class='text-xl font-semibold mt-6 mb-4'>Daftar Peserta</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300 mb-6'>";
        echo "<thead class='bg-gray-200'>";
        echo "<tr>";
        echo "<th class='py-2 px-4 border'>Nama</th>";
        echo "<th class='py-2 px-4 border'>Umur</th>";
        echo "<th class='py-2 px-4 border'>Kota</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // Tampilkan isi array peserta
        foreach ($peserta as $p) {
            echo "<tr>";
            echo "<td class='py-2 px-4 border'>" . htmlspecialchars($p[0]) . "</td>";
            echo "<td class='py-2 px-4 border'>" . htmlspecialchars($p[1]) . "</td>";
            echo "<td class='py-2 px-4 border'>" . htmlspecialchars($p[2]) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        // Tampilkan form pilihan peserta untuk dihapus
        if (!empty($peserta)) {
            echo "<h2 class='text-xl font-semibold mb-4'>Hapus Peserta</h2>";
            echo "<form action='' method='post'>";
            echo "<div class='mb-4'>";
            echo "<label for='hapus' class='block text-gray-700 text-sm font-bold mb-2'>Pilih Peserta untuk Dihapus:</label>";
            echo "<select id='hapus' name='hapus' class='border border-gray-300 rounded-lg p-2 w-full' required>";
            foreach ($peserta as $p) {
                echo "<option value='" . htmlspecialchars($p[0]) . "'>" . htmlspecialchars($p[0]) . "</option>";
            }
            echo "</select>";
            echo "</div>";
            echo "<button type='submit' class='bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600'>Hapus Peserta Terpilih</button>";
            echo "</form>";
        } else {
            echo "<p class='mt-4 text-gray-500'>Tidak ada peserta untuk dihapus.</p>";
        }
        ?>
    </div>
</body>
</html>
