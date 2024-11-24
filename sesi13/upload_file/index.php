<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.malasngoding.com - Upload File Menggunakan PHP MySQLi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data User</h2>
        <br>

        <?php if (isset($_GET['alert'])): ?>
            <?php if ($_GET['alert'] == 'gagal_ekstensi'): ?>
                <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan!</h4>
                    Ekstensi tidak diperbolehkan.
                </div>
            <?php elseif ($_GET['alert'] == 'gagal_ukuran'): ?>
                <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan!</h4>
                    Ukuran file terlalu besar.
                </div>
            <?php elseif ($_GET['alert'] == 'berhasil'): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                    File berhasil disimpan.
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <br>
        <a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="20%">Nama</th>
                    <th width="20%">Kontak</th>
                    <th width="40%">Alamat</th>
                    <th width="20%">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM user");
                while ($d = mysqli_fetch_array($data)):
                ?>
                <tr>
                    <td><?= htmlspecialchars($d['user_nama']); ?></td>
                    <td><?= htmlspecialchars($d['user_kontak']); ?></td>
                    <td><?= htmlspecialchars($d['user_alamat']); ?></td>
                    <td><img src="gambar/<?= htmlspecialchars($d['user_foto']); ?>" width="35" height="40" alt="User Foto">
</td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
