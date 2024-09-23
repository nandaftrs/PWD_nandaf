<?php
if (isset($_POST['nis']) && isset($_POST['nama']) && isset($_POST['alamat'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    echo "<h2>Data Siswa yang Diinput:</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>No</th><th>NIS</th><th>Nama</th><th>Alamat</th></tr>";

    for ($i = 0; $i < count($nis); $i++) {
        echo "<tr>";
        echo "<td>".($i + 1)."</td>";
        echo "<td>".$nis[$i]."</td>";
        echo "<td>".$nama[$i]."</td>";
        echo "<td>".$alamat[$i]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data yang diinput.";
}
?>