<?php 
// Memulai sesi login 
session_start();

// Mengecek apakah user atau admin sudah login
if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
    // Jika tidak ada sesi login, arahkan ke halaman login
    echo "<script>alert('Silahkan login terlebih dahulu!');window.location='akses/login.php';</script>";
    exit; // Berhenti menjalankan kode setelah redirect
}

// Jika user atau admin sudah login, maka tetap di halaman ini (index.php)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Margarine&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Digipustaka</title>
</head>
<body>
    <header id="home">
      <div class="overlay"></div>
      <div class="intro">
        <h3>Digipustaka</h3>
        <p>
          Temukan Dunia Novel yang Memesona Melalui Peminjaman Digital
        </p>
      </div>
      <div class="main-container">
        <div class="img-header">
           <div class="overlay"></div>
           <img src="asset/foto1.jpg">
           <img src="asset/foto2.jpg">
           <img src="asset/foto3.jpg">
           <img src="asset/foto4.jpg">
           <img src="asset/foto5.jpg">
           <img src="asset/foto6.jpg">
           <img src="asset/foto7.jpg">
           <img src="asset/foto8.jpg">
           <img src="asset/foto9.jpg">
           <img src="asset/foto10.jpg">
           <img src="asset/foto1.jpg">
           <img src="asset/foto2.jpg">
           <img src="asset/foto3.jpg">
           <img src="asset/foto4.jpg">
           <img src="asset/foto5.jpg">
           <img src="asset/foto6.jpg">
           <img src="asset/foto7.jpg">
           <img src="asset/foto8.jpg">
           <img src="asset/foto9.jpg">
           <img src="asset/foto10.jpg">
        </div>
    </header>
    <div class="menu-header">
      <a href="index.php">Beranda</a>
      <a href="daftar.php">Daftar Buku</a>
      <a href="peminjam.php">Peminjaman</a>
      <a href="galeri.php">Galeri</a>
      <a href="#kontak">Kontak Kami</a>
      <a href="logout.php">Logout</a>
    </div>
    <div class="search-bar-container">
      <form action="daftar.php" method="GET" class="search-form">
      <input type="text" name="search" placeholder="Cari judul novel, genre, dll." class="search-input" />
      <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Buku</title>
</head>
<body>
    <div class="book-list-container">
        <ul class="book-list">
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=The%20Chronicles%20of%20Narnia%20%231:%20The%20Magician%60s%20Nephew">
                    <img src="asset/foto1.jpg" alt="Buku 1">
                    <div class="book-title">The Chronicles of Narnia #1: The Magician's Nephew</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Oh%20My%20Savior%20%E2%80%93%20Washashira">
                    <img src="asset/foto2.jpg" alt="Buku 2">
                    <div class="book-title">Oh My Savior – Washashira</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Terpikat%20%E2%80%93%20Ghefira%20Zakhira">
                    <img src="asset/foto3.jpg" alt="Buku 3">
                    <div class="book-title">Terpikat – Ghefira Zakhira</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Funiculi%20Funicula%20(Before%20the%20Coffee%20Gets%20Cold)%20%E2%80%93%20Toshikazu%20Kawaguchi">
                    <img src="asset/foto4.jpg" alt="Buku 4">
                    <div class="book-title">Funiculi Funicula (Before the Coffee Gets Cold) – Toshikazu Kawaguchi</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=172%20Days%20%E2%80%93%20Nadzira%20Shafa">
                    <img src="asset/foto5.jpg" alt="Buku 5">
                    <div class="book-title">172 Days – Nadzira Shafa</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Ramai%20Yang%20Dulu%20Kita%20Bawa%20Pergi%20%E2%80%93%20Suci%20Berliana">
                    <img src="asset/foto6.jpg" alt="Buku 6">
                    <div class="book-title">Ramai Yang Dulu Kita Bawa Pergi – Suci Berliana</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Where%20Stories%20Begin%20%E2%80%93%20Wacaku">
                    <img src="asset/foto7.jpg" alt="Buku 7">
                    <div class="book-title">Where Stories Begin – Wacaku</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=I%20Think%20I%20Love%20You%20%E2%80%93%20Cha%20Mirae">
                    <img src="asset/foto8.jpg" alt="Buku 8">
                    <div class="book-title">I Think I Love You – Cha Mirae</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Majnun%20%E2%80%93%20Anton%20Kurnia">
                    <img src="asset/foto9.jpg" alt="Buku 9">
                    <div class="book-title">Majnun – Anton Kurnia</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Fur%20Immer%20Dein%20Ian%20%E2%80%93%20Valerie">
                    <img src="asset/foto10.jpg" alt="Buku 10">
                    <div class="book-title">Fur Immer Dein Ian – Valerie</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Merahnya%20Merah%20%E2%80%93%20Iwan%20Simatupang">
                    <img src="asset/foto11.jpg" alt="Buku 11">
                    <div class="book-title">Merahnya Merah – Iwan Simatupang</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=The%20Age%20Between%20Us%20%E2%80%93%20Kincirmainan">
                    <img src="asset/foto12.jpg" alt="Buku 12">
                    <div class="book-title">The Age Between Us – Kincirmainan</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Pintu%20Harmonika%20-%20Clara%20Ng%20dan%20Icha%20Rahmanti">
                    <img src="asset/foto13.jpg" alt="Buku 13">
                    <div class="book-title">Pintu Harmonika - Clara Ng dan Icha Rahmanti</div>
                </a>
            </li>
            <li class="book-item">
                <a href="tambah_peminjam.php?judul_buku=Harry%20Potter%20and%20The%20Philosopher%E2%80%99s%20Stone%20-%20JK%20Rowling">
                    <img src="asset/foto14.jpg" alt="Buku 14">
                    <div class="book-title">Harry Potter and The Philosopher’s Stone - JK Rowling</div>
                </a>
            </li>
        </ul>
    </div>
</body>
<footer id="kontak">
  <div class="footer">
    <div class="footer-logo">
      <a href="#"><img src="asset/logo-white.png" class="bawah" /></a>
    </div>
    <div class="row">
      <a href="https://www.facebook.com/profile.php?id=61563808479852"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/digipustaka.id/"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="copyright">
    Copyright © 2024 Digipustaka. All rights reserved 
    </div>
  </div>
</footer> 
</html>