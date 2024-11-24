<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="prosesedit.php" method="POST">
        <!-- Hidden field untuk menyimpan NIS lama -->
        <input type="hidden" name="nis_lama" value="<?php echo isset($data->nis) ? $data->nis : ''; ?>">

        <label for="nis">NIS:</label>
        <!-- NIS bisa diubah -->
        <input type="text" name="nis" value="<?php echo isset($data->nis) ? $data->nis : ''; ?>" required>
        <br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo isset($data->nama) ? $data->nama : ''; ?>" required>
        <br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" value="<?php echo isset($data->kelas) ? $data->kelas : ''; ?>" required>
        <br>

        <label for="jk">Jenis Kelamin:</label>
        <select id="jk" name="jk" required>
            <option value="L" <?php echo (isset($data->jk) && $data->jk == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="P" <?php echo (isset($data->jk) && $data->jk == 'P') ? 'selected' : ''; ?>>Perempuan</option>
        </select>
        <br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo isset($data->alamat) ? $data->alamat : ''; ?>" required>
        <br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
