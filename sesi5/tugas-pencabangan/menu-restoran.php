<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
        }
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
        }
        .menu-item {
            font-size: 18px;
            font-weight: bold;
        }
        .price {
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pilih Menu Restoran</h2>
        <form action="" method="POST">
            <label for="menu">Masukkan nomor pilihan (1-4):</label><br>
            <input type="number" id="menu" name="menu" min="1" max="4" required><br>
            <input type="submit" name="submit" value="Lihat Menu">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $menu = $_POST['menu'];
            
            switch ($menu) {
                case 1:
                    echo "<div class='result'><span class='menu-item'>Nasi Goreng</span><br><span class='price'>Rp. 15.000</span></div>";
                    break;
                case 2:
                    echo "<div class='result'><span class='menu-item'>Mie Goreng</span><br><span class='price'>Rp. 12.000</span></div>";
                    break;
                case 3:
                    echo "<div class='result'><span class='menu-item'>Ayam Bakar</span><br><span class='price'>Rp. 20.000</span></div>";
                    break;
                case 4:
                    echo "<div class='result'><span class='menu-item'>Ikan Bakar</span><br><span class='price'>Rp. 18.000</span></div>";
                    break;
                default:
                    echo "<div class='result'><span class='menu-item'>Pilihan tidak tersedia</span></div>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
