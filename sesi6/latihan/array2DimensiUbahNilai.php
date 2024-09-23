<!-- 
Program : array2DimensiUbahNilai
Dibuat Oleh : Nanda Fitri Safitriani
NIM : 43230287
Prodi : Sistem Informasi
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-center">Nilai Ujian</h2>

        <?php
        // Buat array 2 dimensi
        $nilaiUjian = [
            ["Matematika", 80, 75],
            ["Fisika", 90, 85],
            ["Kimia", 75, 80]
        ];

        // Jika form disubmit, update nilai berdasarkan input
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilaiUjian[0][1] = $_POST['matematika_uts'];
            $nilaiUjian[0][2] = $_POST['matematika_uas'];
            $nilaiUjian[1][1] = $_POST['fisika_uts'];
            $nilaiUjian[1][2] = $_POST['fisika_uas'];
            $nilaiUjian[2][1] = $_POST['kimia_uts'];
            $nilaiUjian[2][2] = $_POST['kimia_uas'];
        }

        // Tampilkan isi array
        echo "<table class='table-auto w-full mb-6'>";
        echo "<thead><tr><th>Mata Pelajaran</th><th>UTS</th><th>UAS</th></tr></thead><tbody>";
        foreach ($nilaiUjian as $nilai) {
            echo "<tr>";
            echo "<td class='border px-4 py-2'>" . $nilai[0] . "</td>";
            echo "<td class='border px-4 py-2'>" . $nilai[1] . "</td>";
            echo "<td class='border px-4 py-2'>" . $nilai[2] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
        ?>

        <form method="POST" class="space-y-4">
            <h3 class="text-xl font-semibold mb-2">Ubah Nilai:</h3>

            <div>
                <label for="matematika_uts" class="block text-sm font-medium text-gray-700">Matematika UTS</label>
                <input type="number" name="matematika_uts" id="matematika_uts" value="<?php echo $nilaiUjian[0][1]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="matematika_uas" class="block text-sm font-medium text-gray-700">Matematika UAS</label>
                <input type="number" name="matematika_uas" id="matematika_uas" value="<?php echo $nilaiUjian[0][2]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="fisika_uts" class="block text-sm font-medium text-gray-700">Fisika UTS</label>
                <input type="number" name="fisika_uts" id="fisika_uts" value="<?php echo $nilaiUjian[1][1]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="fisika_uas" class="block text-sm font-medium text-gray-700">Fisika UAS</label>
                <input type="number" name="fisika_uas" id="fisika_uas" value="<?php echo $nilaiUjian[1][2]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="kimia_uts" class="block text-sm font-medium text-gray-700">Kimia UTS</label>
                <input type="number" name="kimia_uts" id="kimia_uts" value="<?php echo $nilaiUjian[2][1]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="kimia_uas" class="block text-sm font-medium text-gray-700">Kimia UAS</label>
                <input type="number" name="kimia_uas" id="kimia_uas" value="<?php echo $nilaiUjian[2][2]; ?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Nilai</button>
        </form>
    </div>
</body>
</html>