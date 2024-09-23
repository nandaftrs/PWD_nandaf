<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Kumpulan Latihan Array</title>
    <style>
        /* Ensure the button is pushed to the bottom */
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-content {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar Start -->
    <nav class="bg-gray-700 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="text-2xl font-bold text-white">wxlliamj_<span class="text-blue-400">mnf</span></a>
            <div class="space-x-4">
                <a href="#home" class="text-white hover:text-blue-400">Home</a>
                <a href="#about" class="text-white hover:text-blue-400">Tentang Kami</a>
                <a href="https://www.instagram.com/wxlliamj.mnf" target="_blank" class="text-white hover:text-blue-400">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-gray-900 mb-10">Kumpulan Latihan Array</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <!-- Array 1 Dimensi: Menampilkan nilai array -->
            <div class="bg-white p-6 rounded-lg shadow-xl text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 1 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menampilkan isi Array</h3>
                </div>
                <a href="array1Dimensi.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Lihat</a>
            </div>

            <!-- Array 1 Dimensi: Cari Nilai -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 1 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Mencari Nilai Tertentu dalam Array</h3>
                </div>
                <a href="array1DimensiCariNilai.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Lihat</a>
            </div>
            
            <!-- Array 1 Dimensi: Menambahkan Elemen -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 1 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menambahkan Elemen dalam Array</h3>
                </div>
                <a href="array1DimensiTambahElemen.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Lihat</a>
            </div>

            <!-- Array 1 Dimensi: Menghapus Elemen dari Array -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 1 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menghapus Elemen dalam Array</h3>
                </div>
                <a href="array1DimensiHapusElemen.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 1 Dimensi: Ubah Nilai -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 1 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Mengubah Nilai Array</h3>
                </div>
                <a href="array1DimensiUbahNilai.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 2 Dimensi: Menampilkan Isi Array -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 2 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menampilkan Isi Array</h3>
                </div>
                <a href="array2Dimensi.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 2 Dimensi: Mencari Elemen Tertentu dalam Array -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 2 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Mencari Elemen Tertentu dalam Array</h3>
                </div>
                <a href="array2DimensiCariElemen.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 2 Dimensi: Menambahkan Elemen ke Array 2 Dimensi -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 2 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menambahkan Elemen ke dalam Array 2 Dimensi</h3>
                </div>
                <a href="array2DimensiTambahElemen.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 2 Dimensi: Menghapus Elemen dalam Array -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 2 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Menghapus Elemen dalam Array</h3>
                </div>
                <a href="array2DimensiHapusElemen.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>

            <!-- Array 2 Dimensi: Mengubah Nilai Array -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center card">
                <div class="card-content">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Array 2 Dimensi</h3>
                    <h3 class="text-md font-medium text-gray-600 mb-4">Mengubah Nilai dalam Array 2 Dimensi</h3>
                </div>
                <a href="array2DimensiUbahNilai.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Lihat</a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-gray-700 text-white py-6 mt-8">
      <div class="container mx-auto text-center">
        <p class="text-lg font-semibold">
          Nanda Fitri Safitriani &copy; 2024. All Rights Reserved.
        </p>
        <p class="mt-2">Temukan kami di media sosial:</p>
        <div class="flex justify-center mt-4 space-x-6">
        <!-- Instagram Icon -->
        <a href="https://www.instagram.com/wxlliamj.mnf" target="_blank" class="text-white hover:text-red-400">
            <i class="fab fa-instagram fa-2x"></i>
        </a>

        <!-- Twitter Icon -->
        <a href="https://twitter.com/eajeanlv" target="_blank" class="text-white hover:text-blue-400">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        </div>
      </div>
    </footer>
</body>
</html>
