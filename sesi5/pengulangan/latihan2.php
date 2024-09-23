<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Jumlah Huruf</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-center mb-5">Hitung Jumlah Huruf</h1>
        
        <form method="POST" action="" class="flex flex-col items-center">
            <div class="mb-3">
                <label class="text-lg mr-2">Masukkan Kalimat:</label>
                <input type="text" name="kalimat" class="border border-gray-400 rounded px-2 py-1" value="<?php echo isset($_POST['kalimat']) ? $_POST['kalimat'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label class="text-lg mr-2">Pilih huruf:</label>
                <input type="radio" name="huruf" value="a" <?php if (isset($_POST['huruf']) && $_POST['huruf'] == 'a') echo 'checked'; ?> required> a
                <input type="radio" name="huruf" value="i" <?php if (isset($_POST['huruf']) && $_POST['huruf'] == 'i') echo 'checked'; ?>> i
                <input type="radio" name="huruf" value="u" <?php if (isset($_POST['huruf']) && $_POST['huruf'] == 'u') echo 'checked'; ?>> u
                <input type="radio" name="huruf" value="e" <?php if (isset($_POST['huruf']) && $_POST['huruf'] == 'e') echo 'checked'; ?>> e
                <input type="radio" name="huruf" value="o" <?php if (isset($_POST['huruf']) && $_POST['huruf'] == 'o') echo 'checked'; ?>> o
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Hitung</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kalimat = $_POST['kalimat'];
            $huruf = $_POST['huruf'];

            // Menghitung jumlah huruf yang dipilih
            $jumlah_huruf = substr_count(strtolower($kalimat), $huruf);

            echo "<div class='mt-5 text-center'>";
            echo "<p class='text-lg'>Jumlah huruf <strong>$huruf</strong> pada kalimat <strong>$kalimat</strong> adalah <strong>$jumlah_huruf</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>