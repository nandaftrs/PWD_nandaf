<?php
// Koneksi ke database sudah dilakukan di index.php, jadi tidak perlu diulangi di sini

// Query untuk mengambil data dari tabel mahasiswa sudah dilakukan di index.php
// $query sudah tersedia dari file index.php

// Tambahkan tag HTML untuk struktur yang lebih baik
include 'koneksi/koneksi.php';
$query = mysqli_query($connect, 'SELECT * FROM mahasiswa');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/pwd/pertemuan11/views/form.php">Tambah Mahasiswa</a>
    </nav>
    <h1>Data Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JK</th>
                <th>ALAMAT</th>
                <th>EDIT</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($query) > 0) {
                while ($result = mysqli_fetch_object($query)){
            ?>
            <tr class='text-black'>
                <td><?php echo htmlspecialchars($result->nis); ?></td>
                 <td><?php echo htmlspecialchars($result->nama); ?></td>
                <td><?php echo htmlspecialchars($result->kelas); ?></td>
                <td><?php echo htmlspecialchars($result->jk); ?></td>
                <td><?php echo htmlspecialchars($result->alamat); ?></td>
                <td><a href="/pwd/pertemuan11/views/edit.php?nis=<?php echo htmlspecialchars($result->nis); ?>">Edit</a> | <a href="/pwd/pertemuan11/views/hapus.php?nis=<?php echo htmlspecialchars($result->nis); ?>">Hapus</a></td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data yang ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>