<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nama Hari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
        }
        .day-name {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
        .error {
            font-size: 18px;
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Menentukan Nama Hari</h2>
        <form action="" method="POST">
            <label for="day">Masukkan nomor hari (1-7):</label><br>
            <input type="number" id="day" name="day" min="1" max="7" required><br>
            <input type="submit" name="submit" value="Cek Hari">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $day = $_POST['day'];

            switch ($day) {
                case 1:
                    echo "<div class='result'><span class='day-name'>Minggu</span></div>";
                    break;
                case 2:
                    echo "<div class='result'><span class='day-name'>Senin</span></div>";
                    break;
                case 3:
                    echo "<div class='result'><span class='day-name'>Selasa</span></div>";
                    break;
                case 4:
                    echo "<div class='result'><span class='day-name'>Rabu</span></div>";
                    break;
                case 5:
                    echo "<div class='result'><span class='day-name'>Kamis</span></div>";
                    break;
                case 6:
                    echo "<div class='result'><span class='day-name'>Jumat</span></div>";
                    break;
                case 7:
                    echo "<div class='result'><span class='day-name'>Sabtu</span></div>";
                    break;
                default:
                    echo "<div class='result'><span class='error'>Nomor hari tidak valid! Masukkan angka 1-7.</span></div>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
