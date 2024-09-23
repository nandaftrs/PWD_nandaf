<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Tarif Taksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Hitung Tarif Taksi</h1>
        <form method="post" action="" class="space-y-4">
            <div>
                <label for="distance" class="block text-gray-700 font-medium">Masukkan Jarak Tempuh (dalam km):</label>
                <input type="number" id="distance" name="distance" step="0.1" min="0" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300">Hitung Tarif</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $distance = $_POST["distance"];
            $tarif_awal = 5000;
            $tarif_total = 0;

            if ($distance <= 1) {
                $tarif_total = $tarif_awal;
            } else {
                $tarif_total = $tarif_awal + (2000 * ($distance - 1));
            }

            echo "<div class='result text-center text-lg font-bold mt-6'>Total Tarif: Rp. " . number_format($tarif_total, 0, ',', '.') . "</div>";
        }
        ?>
    </div>
</body>
</html>
