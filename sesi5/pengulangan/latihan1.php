<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5">
        <h1 class="text-center text-2xl font-bold mb-5">Form Input Data Siswa</h1>

        <form method="POST" action="">
            <div class="flex justify-center mb-5">
                <label class="text-lg font-semibold mr-2">Masukkan jumlah Siswa</label>
                <input type="number" name="jumlah_siswa" class="border border-gray-400 rounded px-2" required>
                <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-1 rounded">OK</button>
            </div>
        </form>

        <?php
        if (isset($_POST['jumlah_siswa'])) {
            $jumlah_siswa = $_POST['jumlah_siswa'];
        ?>

        <form method="POST" action="proses.php">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">NIS</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= $jumlah_siswa; $i++) { ?>
                        <tr>
                            <td class="px-4 py-2 border text-center"><?php echo $i; ?></td>
                            <td class="px-4 py-2 border">
                                <input type="text" name="nis[]" class="w-full border border-gray-400 rounded px-2 py-1">
                            </td>
                            <td class="px-4 py-2 border">
                                <input type="text" name="nama[]" class="w-full border border-gray-400 rounded px-2 py-1">
                            </td>
                            <td class="px-4 py-2 border">
                                <input type="text" name="alamat[]" class="w-full border border-gray-400 rounded px-2 py-1">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="flex justify-center mt-5">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">Submit</button>
            </div>
        </form>

        <?php
        }
        ?>

    </div>
</body>
</html>