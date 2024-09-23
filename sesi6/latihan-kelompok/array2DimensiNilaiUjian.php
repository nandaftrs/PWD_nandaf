<!-- 
    * Pemrograman Web Dasar
    * array2DimensiNilaiUjian.php
    * Dibuat oleh: Nanda Fitri Safitriani
    * NIM: 43230287
    * Tanggal: 13 September 2024
    * Program Studi: Sistem Informasi
 -->


 <html>
<head>
    <title>Pengolahan Nilai Ujian</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Data nilai ujian dalam bentuk array 2 dimensi
    $nilaiUjian = [
        ["Mata Pelajaran", "Matematika", "Bahasa Inggris", "IPA", "IPS"],
        ["Siswa 1", 80, 85, 90, 70],
        ["Siswa 2", 75, 80, 85, 60],
        ["Siswa 3", 90, 85, 95, 75]
    ];

    // Menghitung rata-rata nilai ujian setiap mata pelajaran
    $rataRataMataPelajaran = [];
    for ($i = 1; $i < count($nilaiUjian[0]); $i++) {
        $total = 0;
        for ($j = 1; $j < count($nilaiUjian); $j++) {
            $total += $nilaiUjian[$j][$i];
        }
        $rataRataMataPelajaran[] = $total / (count($nilaiUjian) - 1);
    }

    // Menghitung rata-rata nilai ujian setiap siswa
    $rataRataSiswa = [];
    for ($i = 1; $i < count($nilaiUjian); $i++) {
        $total = 0;
        for ($j = 1; $j < count($nilaiUjian[$i]); $j++) {
            $total += $nilaiUjian[$i][$j];
        }
        $rataRataSiswa[] = $total / (count($nilaiUjian[$i]) - 1);
    }
    ?>

    <h2>Rata-rata Nilai Ujian</h2>
    <table>
        <tr>
            <th>Siswa/Mata Pelajaran</th>
            <?php for ($i = 1; $i < count($nilaiUjian[0]); $i++) {
                echo "<th>" . $nilaiUjian[0][$i] . "</th>";
            } ?>
            <th>Rata-rata Siswa</th>
        </tr>
        <?php for ($i = 1; $i < count($nilaiUjian); $i++) {
            echo "<tr>";
            echo "<td>" . $nilaiUjian[$i][0] . "</td>";
            for ($j = 1; $j < count($nilaiUjian[$i]); $j++) {
                echo "<td>" . $nilaiUjian[$i][$j] . "</td>";
            }
            echo "<td>" . number_format($rataRataSiswa[$i - 1], 2) . "</td>";
            echo "</tr>";
        } ?>
        <tr>
            <td><b>Rata-rata Pelajaran</b></td>
            <?php for ($i = 0; $i < count($rataRataMataPelajaran); $i++) {
                echo "<td>" . number_format($rataRataMataPelajaran[$i], 2) . "</td>";
            } ?>
            <td>-</td>
        </tr>
    </table>
</body>
</html>
