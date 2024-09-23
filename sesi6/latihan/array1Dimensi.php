<!-- 
    * Pemrograman Web Dasar
    * array1Dimensi.php
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
    <title>Daftar Buah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Daftar Buah</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="py-2 px-4 border">Nama Buah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Buat array 1 dimensi
                $buah = ["Apel", "Mangga", "Pisang", "Jeruk"];
                
                // Tampilkan isi array dengan perulangan for
                for ($i = 0; $i < count($buah); $i++) {
                    echo "<tr class='bg-gray-100 text-center'>";
                    echo "<td class='py-2 px-4 border'>" . $buah[$i] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
                