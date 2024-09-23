<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kelulusan Ujian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Hitung Kelulusan Ujian</h1>
        <form method="post" action="" class="space-y-4">
            <div>
                <label for="attendance" class="block text-gray-700 font-medium">Nilai Kehadiran (0-100):</label>
                <input type="number" id="attendance" name="attendance" min="0" max="100" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="assignment" class="block text-gray-700 font-medium">Nilai Tugas (0-100):</label>
                <input type="number" id="assignment" name="assignment" min="0" max="100" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="midterm" class="block text-gray-700 font-medium">Nilai UTS (0-100):</label>
                <input type="number" id="midterm" name="midterm" min="0" max="100" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="final" class="block text-gray-700 font-medium">Nilai UAS (0-100):</label>
                <input type="number" id="final" name="final" min="0" max="100" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300">Hitung Nilai Akhir</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $attendance = $_POST["attendance"];
            $assignment = $_POST["assignment"];
            $midterm = $_POST["midterm"];
            $final = $_POST["final"];

            // Hitung Nilai Akhir
            $final_score = (0.1 * $attendance) + (0.2 * $assignment) + (0.3 * $midterm) + (0.4 * $final);

            // Tentukan status kelulusan dan predikat
            if ($final_score >= 85) {
                $status = "Lulus (Predikat A)";
            } elseif ($final_score >= 75) {
                $status = "Lulus (Predikat B)";
            } elseif ($final_score >= 65) {
                $status = "Lulus (Predikat C)";
            } else {
                $status = "Remedial";
            }

            echo "<div class='result text-center text-lg font-bold mt-6'>Nilai Akhir: " . number_format($final_score, 2, ',', '.') . "<br>Status: $status</div>";
        }
        ?>
    </div>
</body>
</html>
