<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digipustaka</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
    session_start();
    include "../koneksi.php";
    ?>
    <div class="login-container">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <form method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter your email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>

            <button name="login" type="submit">Login</button>
            <p>Belum memiliki akun? <a href="register.php">Register</a></p>
        </form>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Cek login sebagai user
        $qry_user = $koneksi->query("SELECT * FROM db_user WHERE email='$email' AND password='$password'");
        $result_user = mysqli_num_rows($qry_user);

        if ($result_user == 1) {
            $data_user = $qry_user->fetch_assoc();
            $_SESSION['user'] = $data_user;
            echo "<script>alert('Login Berhasil sebagai User!');window.location='../index.php';</script>";
        } else {
            // Jika tidak ditemukan di tabel user, cek login sebagai admin
            $qry_admin = $koneksi->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
            $result_admin = mysqli_num_rows($qry_admin);
            if ($result_admin == 1) {
                $data_admin = $qry_admin->fetch_assoc();
                $_SESSION['admin'] = $data_admin;
                echo "<script>alert('Login Berhasil sebagai Admin!');window.location='../index.php';</script>";
            } else {
                echo "<script>alert('Login Gagal! Periksa kembali email dan password Anda.');window.location='login.php';</script>";
            }
        }
    }
    ?>
</body>
</html>
