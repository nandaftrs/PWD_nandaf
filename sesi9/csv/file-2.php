<?php
// Fungsi untuk membaca data dari file CSV
function bacaDataCSV($namaFile)
{
    $data = array();
    if (($file = fopen($namaFile, "r")) !== FALSE) {
        while (($row = fgetcsv($file, 1000, ",")) !== FALSE) {
            $data[] = $row;
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
    echo "Jumlah baris: $jumlahBaris" . PHP_EOL;
    echo "Jumlah kolom: $jumlahKolom" . PHP_EOL;
}

// Fungsi untuk menampilkan data tertentu dari CSV
function tampilkanDataTertentu($data, $namaKolom, $nilai)
{
    // Cari indeks kolom yang sesuai dengan nama kolom
    $header = $data[0];
    $kolomIndex = array_search($namaKolom, $header);

    if ($kolomIndex === false) {
        echo "Kolom \"$namaKolom\" tidak ditemukan." . PHP_EOL;
        return;
    }

    echo "Data dengan kolom \"$namaKolom\" dan nilai \"$nilai\":" . PHP_EOL;
    $found = false;
    foreach ($data as $index => $row) {
        // Lewati header
        if ($index == 0) continue;

        if ($row[$kolomIndex] == $nilai) {
            echo implode(", ", $row) . PHP_EOL;
            $found = true;
        }
    }

    if (!$found) {
        echo "Tidak ada data yang sesuai." . PHP_EOL;
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
