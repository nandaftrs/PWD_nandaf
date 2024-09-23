<!-- 
Program : array2Dimensi
Dibuat Oleh : Nanda Fitri Safitriani
NIM : 43230287
Prodi : Sistem Informasi
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Data Mahasiswa</h1>
        
        <?php
        // Array 2 dimensi awal berisi data mahasiswa
        $mahasiswa = [
            ["Budi", 23, "Teknik Informatika"],
            ["Ani", 21, "Desain Komunikasi Visual"],
            ["Caca", 22, "Manajemen"]
        ];

        // Tampilkan data mahasiswa dalam bentuk tabel
        echo "<table class='min-w-full bg-white border-collapse border border-gray-300'>";
        echo "<thead>";
        echo "<tr class='bg-blue-500 text-white'>";
        echo "<th class='py-3 px-6 border'>Nama</th>";
        echo "<th class='py-3 px-6 border'>Umur</th>";
        echo "<th class='py-3 px-6 border'>Jurusan</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // Tampilkan isi array mahasiswa dengan perulangan
        for ($i = 0; $i < count($mahasiswa); $i++) {
            // Tambahkan class untuk zebra striping pada baris
            $rowClass = ($i % 2 == 0) ? 'bg-gray-100' : 'bg-gray-200';
            echo "<tr class='$rowClass'>";
            for ($j = 0; $j < count($mahasiswa[$i]); $j++) {
                echo "<td class='py-3 px-6 border text-center'>" . $mahasiswa[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
</body>
</html>
