<!DOCTYPE html>
<html>
<head>
    <title>Cetak Print Data dari Database dengan PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
    <center>
        <h2>Data Laporan Barang</h2>
        <h4>www.malasngoding.com</h4>
    </center>

    <?php
    include 'koneksi.php';
    ?>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th width="1%">No</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th width="5%">Jumlah</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>
