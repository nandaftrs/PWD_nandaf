<?php
// Fungsi untuk membaca data dari file CSV
function bacaDataCSV($namaFile)
{
    $data = array();
    if (($file = fopen($namaFile, "r")) !== FALSE) {
        $header = fgetcsv($file, 1000, ";"); // Menggunakan titik koma sebagai delimiter
        while (($row = fgetcsv($file, 1000, ";")) !== FALSE) {
            $data[] = array_combine($header, $row); // Gabungkan header dengan data
        }
        fclose($file);
    } else {
        echo "Error: Tidak dapat membuka file CSV.";
    }
    return $data;
}

// Fungsi untuk menghitung jumlah baris dan kolom data CSV
function hitungBarisKolom($data)
{
    $jumlahBaris = count($data);
    $jumlahKolom = count($data[0]);
    echo "Jumlah baris: $jumlahBaris<br>";
    echo "Jumlah kolom: $jumlahKolom<br>";
}

// Fungsi untuk menampilkan data tertentu dari CSV
function tampilkanDataTertentu($data, $kolom, $nilai)
{
    echo "Data dengan kolom \"$kolom\" dan nilai \"$nilai\":<br>";
    foreach ($data as $row) {
        if (isset($row[$kolom]) && $row[$kolom] == $nilai) {
            echo implode(", ", $row) . "<br>"; // Menampilkan isi baris
        }
    }
}

// Nama file CSV
$namaFile = "data.csv";
// Membaca data dari file CSV
$data = bacaDataCSV($namaFile);
// Menghitung jumlah baris dan kolom
hitungBarisKolom($data);
// Menampilkan data dengan kolom "Nama" dan nilai "Budi"
tampilkanDataTertentu($data, "Nama", "Budi");
