<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Kategori Umur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Penentuan Kategori Umur</h1>
        <form method="post" action="" class="space-y-4">
            <div>
                <label for="age" class="block text-gray-700 font-medium">Masukkan Usia:</label>
                <input type="number" id="age" name="age" min="0" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300">Tentukan Kategori</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = $_POST["age"];
            $category = "";

            // Tentukan kategori umur
            if ($age < 17) {
                $category = "Anak-anak";
            } elseif ($age >= 17 && $age <= 30) {
                $category = "Remaja";
            } elseif ($age >= 31 && $age <= 59) {
                $category = "Dewasa";
            } else {
                $category = "Lansia";
            }

            echo "<div class='result text-center text-lg font-bold mt-6'>Kategori Umur: $category</div>";
        }
        ?>
    </div>
</body>
</html>
