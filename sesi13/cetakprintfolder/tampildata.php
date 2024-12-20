<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Laporan PDF Dengan PHP dan MySQLi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <center>
            <h2>Membuat Laporan PDF Dengan PHP dan MySQLi</h2>
        </center>
        <br>
        <div class="float-right">
            <a href="karyawan_pdf.php" target="_blank" class="btn btn-success">
                <i class="fa fa-file-pdf-o"></i> &nbsp; PRINT
            </a>
            <br><br>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">Nomor</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Alamat</th>
                    <th style="text-align: center;">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_karyawan");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($d['karyawan_nama']); ?></td>
                        <td><?php echo htmlspecialchars($d['karyawan_alamat']); ?></td>
                        <td><?php echo htmlspecialchars($d['karyawan_email']); ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
