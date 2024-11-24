<?php
// Mengaktifkan output buffering untuk mencegah masalah output sebelum header
ob_start();

// Tampilkan semua error untuk debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Pastikan path ke file koneksi.php benar dan file tersebut ada
include_once '../koneksi/koneksi.php'; // Sesuaikan path dengan struktur direktori Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nis_lama = $_POST['nis_lama'];  // NIS lama (sebelum diubah)
    $nis_baru = $_POST['nis'];       // NIS baru (bisa jadi nilainya sama)
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Debugging: Periksa apakah data POST telah diterima dengan benar
    echo "NIS Lama: $nis_lama, NIS Baru: $nis_baru, Nama: $nama, Kelas: $kelas, JK: $jk, Alamat: $alamat";

    // Siapkan query untuk mengubah data
    $query = "UPDATE `mahasiswa` SET `nis` = ?, `nama` = ?, `kelas` = ?, `jk` = ?, `alamat` = ? WHERE `nis` = ?";
    $stmt = mysqli_prepare($connect, $query);

    if ($stmt) {
        // Bind parameter ke dalam query
        mysqli_stmt_bind_param($stmt, "ssssss", $nis_baru, $nama, $kelas, $jk, $alamat, $nis_lama);

        // Eksekusi query
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil diubah.";
            // Redirect ke halaman lain setelah berhasil
            header('Location: ../index.php'); // Sesuaikan path
            exit();
        } else {
            // Tampilkan pesan error jika eksekusi gagal
            echo "Gagal mengubah data: " . mysqli_error($connect);
        }

        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        // Tampilkan pesan error jika query prepare gagal
        echo "Gagal menyiapkan query: " . mysqli_error($connect);
    }

    // Tutup koneksi ke database
    mysqli_close($connect);
} else {
    // Jika metode request bukan POST
    echo "Metode request tidak valid.";
}

// Mengakhiri output buffering
ob_end_flush();
?>
