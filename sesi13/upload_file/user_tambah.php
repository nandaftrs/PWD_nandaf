<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai - Upload file menggunakan PHP MySQLi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Data Pegawai</h2>
        
        <form action="user_act.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="number" class="form-control" id="kontak" placeholder="Masukkan Kontak" name="kontak" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto" required>
                <small class="form-text text-muted">Ekstensi yang diperbolehkan: .png, .jpg, .jpeg, .gif</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
