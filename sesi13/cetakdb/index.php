<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Print Data dari Database dengan PHP - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <center>
            <h2>Cetak Print Data dari Database dengan PHP<br/>
                <a href="https://www.malasngoding.com" target="_blank">www.malasngoding.com</a>
            </h2>
            <?php
            include 'koneksi.php';
            ?>
            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($data['tanggal']); ?></td>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['jumlah']); ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <br/>
            <a href="cetak.php" target="_blank" class="btn btn-primary">Cetak</a>
        </center>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
