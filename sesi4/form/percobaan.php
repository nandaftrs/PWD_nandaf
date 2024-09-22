<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan Latihan Form</title>
</head>
<body>
    <form action="" name="login" method="post">
        Password:
        <input type="password" name="psw" size="15" maxlength="10">
        <input type="submit" name="tlogin" value="login">

        <?php 
        if (isset($_POST['tlogin'])) {
            if ($_POST['psw']=="admin") {
                echo "Login sukses";
            }else {
                echo "Anda tidak berhak menggunakan sistem";
            }
            }
        ?>
    </form>
</body>
</html>