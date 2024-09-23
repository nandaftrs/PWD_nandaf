<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Diskon</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 font-sans leading-normal tracking-normal">

    <!-- Navbar Start -->
    <nav class="bg-blue-900 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="text-2xl font-bold text-white">sey<span class="text-blue-400">mart</span>.</a>
            <div class="space-x-4">
                <a href="#home" class="text-white hover:text-blue-400">Home</a>
                <a href="#about" class="text-white hover:text-blue-400">Tentang Kami</a>
                <a href="https://www.instagram.com/wxlliamj.mnf" target="_blank" class="text-white hover:text-blue-400">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container mx-auto mt-10 p-6 bg-gray-100 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">Hitung Pembayaran</h1>

        <!-- Form Start -->
        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="total_belanja" class="block text-gray-700">Total Belanja:</label>
                <input type="text" name="total_belanja" id="total_belanja" placeholder="Masukkan Total Belanja..." required class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-lg">Hitung</button>
        </form>
        <!-- Form End -->

        <?php
            function hitung_discount($total_belanja) {
                $discount = 0;
                if ($total_belanja >= 100000) {
                    $discount = $total_belanja * 0.1;
                } else if ($total_belanja >= 50000) {
                    $discount = $total_belanja * 0.05;
                }
                return $discount;
            }

            if ($_POST) {
                $total_belanja = $_POST['total_belanja'];
                $nilai_discount = hitung_discount($total_belanja);
                $bayar = $total_belanja - $nilai_discount;
        ?>
        
        <!-- Output Start -->
        <section class="mt-8 bg-gray-50 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Hasil Perhitungan</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="p-4 bg-gray-100 rounded-lg">
                    <p class="text-gray-700">Total Belanja:</p>
                    <p class="text-xl font-bold text-gray-800">Rp. <?php echo number_format($total_belanja, 0, ',', '.'); ?></p>
                </div>

                <div class="p-4 bg-gray-100 rounded-lg">
                    <p class="text-gray-700">Diskon:</p>
                    <p class="text-xl font-bold text-green-600">Rp. <?php echo number_format($nilai_discount, 0, ',', '.'); ?></p>
                </div>

                <div class="col-span-2 p-4 bg-gray-200 rounded-lg">
                    <p class="text-gray-700">Total Bayar:</p>
                    <p class="text-2xl font-bold text-blue-900">Rp. <?php echo number_format($bayar, 0, ',', '.'); ?></p>
                </div>
            </div>
        </section>
        <!-- Output End -->
        
        <?php } ?>
    </div>

    <!-- Footer Start -->
    <footer class="bg-blue-900 text-white text-center py-4 mt-16">
        <p>&copy; 2024 SeyMart. All rights reserved.</p>
        <p>Made By &copy; Nanda F</p>
    </footer>
    <!-- Footer End -->

</body>
</html>
