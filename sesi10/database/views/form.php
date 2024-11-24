<?php
include 'koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tambah Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Formulir Tambah Siswa</h1>
    <form action="/pwd/pertemuan11/tambah.php" method="POST">
        <label for="nis">NIS:</label>
        <input type="text" id="nis" name="nis" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>

        <label for="jk">Jenis Kelamin:</label>
        <select id="jk" name="jk" required>
            <option value="L">L</option>
            <option value="P">P</option>
        </select>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <input type="submit" value="Tambah Siswa">
    </form>
</body>
</html>
