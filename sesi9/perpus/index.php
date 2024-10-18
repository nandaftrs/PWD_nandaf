<?php
include "koneksi.php";
$tgl = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo-perpustakaan-container">
                <image id="logo-perpustakaan" src="img/logo-perpustakaan.png" alt="logo perpustakaan">
            </div>
            <div class="nama-alamat-perpustakaan-container">
                <div class="nama-alamat-perpustakaan">
                    <h1>Perpustakaan Umum</h1>
                </div>
                <div class="nama-alamat-perpustakaan">
                    <h4>Jl. Lemah Abang No 11, Telp: (120) 1234-5678</h4>
                </div>
            </div>
        </div>
        <div class="header-2">
            <div class="nama-user">Hai Admin !</div>
        </div>
        <div class="sidebar">
            <a href="index.php?p=beranda">Beranda</a>
            <p class="label-navigasi">Entry Data Dan Transaksi</p>
            <ul>
                <li><a href="index.php?p=anggota">Data Anggota</a></li>
                <li><a href="index.php?p=buku">Data Buku</a></li>
                <li><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
            </ul>
            <p class="label-navigasi">Laporan</p>
            <ul>
                <li><a href="cetak/cetak-anggota.php" target="_blank">Lap.Data Anggota</a></li>
                <li><a href="cetak/cetak-buku.php" target="_blank">Lap.Data Buku</a></li>
            </ul>
        </div>
        <div id="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                $pages_dir='pages';
                if(!empty($_GET['p'])){
                    $pages=scandir($pages_dir,0);
                    unset($pages[0], $pages[1]);
                    $p=$_GET['p'];
                    if(in_array($p.'.php', $pages)){
                        include($pages_dir.'/'.$p.'.php');
                    } else {
                        echo 'Halaman Tidak Ditemukan';
                    }
                } else {
                    include($pages_dir.'/beranda.php');
                }
            ?>
        </div>
        
        <div id="footer">
            <h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3>
        </div>
    </div>
</body>

</html>