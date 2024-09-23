<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kelulusan Ujian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Hitung Kelulusan Ujian</h1>
        <form method="post" action="" class="space-y-4">
            <div>
                <label for="score" class="block text-gray-700 font-medium">Masukkan Nilai Ujian (0-100):</label>
                <input type="number" id="score" name="score" min="0" max="100" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transition duration-300">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = $_POST["score"];
            $status = "";

            // Tentukan status kelulusan dan predikat
            if ($score >= 80) {
                $status = "Lulus (Predikat A)";
            } elseif ($score >= 70) {
                $status = "Lulus (Predikat B)";
            } elseif ($score >= 60) {
                $status = "Lulus (Predikat C)";
            } else {
                $status = "Tidak Lulus";
            }

            echo "<div class='mt-6 text-lg font-semibold text-center text-gray-800'>Nilai: $score<br>Status: $status</div>";
        }
        ?>
    </div>
</body>
</html>
