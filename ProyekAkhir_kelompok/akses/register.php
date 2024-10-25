<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Digipustaka</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <?php include '../koneksi.php'; ?>
    
    <div class="register-container">
        <div class="register-header">
            <h2>Register</h2>
        </div>
        <form method="post">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama" required><br>

            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required><br>

            <label for="email">Email</label>
            <input type="email" name="Email" placeholder="Masukkan email" required><br>

            <label for="password">Password</label>
            <input type="password" name="Password" placeholder="Masukkan password" required><br>

            <button name="register" type="submit">Register</button>
            <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
        </form>

        <?php
        if (isset($_POST['register'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            $query = $koneksi->query("INSERT INTO db_user(id, nama, username, Email, Password) VALUES ('', '$nama', '$username', '$Email', '$Password')");
            if ($query) {
                echo "<script>alert('Register Berhasil!');window.location = 'login.php';</script>";
            } else {
                echo "<script>alert('Register Gagal!');window.location = 'register.php';</script>";
            }
        }
        ?>
    </div>
</body>
</html>
