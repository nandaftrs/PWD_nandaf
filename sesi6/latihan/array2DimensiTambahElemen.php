<!-- 
Program : array2DimensiTambahElemen
Dibuat Oleh : Ibnu Akil
NIM : 43230287
Prodi : Sistem Informasi
-->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h1 class="text-2xl font-bold mb-4">Input Data Mahasiswa</h1>
        
        <!-- Formulir untuk input data baru -->
        <form action="" method="post" class="mb-6">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM:</label>
                <input type="text" id="nim" name="nim" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="jurusan" class="block text-gray-700 text-sm font-bold mb-2">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" class="border border-gray-300 rounded-lg p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Tambahkan Data</button>
        </form>

        <?php
        // Array 2 dimensi awal berisi data mahasiswa
        $data = [
            ["Nama", "NIM", "Jurusan"],
            ["Budi", "A12345", "Teknik Informatika"],
            ["Ani", "B23456", "Desain Komunikasi Visual"],
        ];

        // Jika form disubmit, tambahkan data baru
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
            $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';

            // Pastikan semua data terisi
            if (!empty($nama) && !empty($nim) && !empty($jurusan)) {
                $dataBaru = [$nama, $nim, $jurusan];
                array_push($data, $dataBaru);  // Tambahkan data baru ke array
            }
        }

        // Tampilkan data mahasiswa dalam bentuk tabel
        echo "<h2 class='text-xl font-semibold mt-6 mb-4'>Daftar Mahasiswa</h2>";
        echo "<table class='min-w-full bg-white border border-gray-300'>";
        echo "<thead class='bg-gray-200'>";
        echo "<tr>";
        echo "<th class='py-2 px-4 border'>Nama</th>";
        echo "<th class='py-2 px-4 border'>NIM</th>";
        echo "<th class='py-2 px-4 border'>Jurusan</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        // Tampilkan isi array
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td class='py-2 px-4 border'>" . $cell . "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
</body>
</html>

