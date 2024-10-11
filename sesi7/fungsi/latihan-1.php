<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Mata Uang</title>
</head>
<body>
    <center>

    <h1>MONEY CHANGER</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Mata Uang Asing</th>
                <th>Mata Uang Indonesia</th>
            </tr>
            <tr>
                <td>Dollar Amerika</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>Dollar Singapur</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>Yen</td>
                <td>4000</td>
            </tr>
            <tr>
                <td>Won</td>
                <td>11</td>
            </tr>
        </table>

        <h2>TRANSAKSI</h2>
        
        <form method="POST" action="">
            <label>Uang Dalam Rupiah Rp. </label>
            <input type="number" name="rupiah" value="1000000">
            <select name="currency">
                <option value="Dollar Amerika">Dollar Amerika</option>
                <option value="Dollar Singapur">Dollar Singapur</option>
                <option value="Yen">Yen</option>
                <option value="Won">Won</option>
            </select>
            <input type="submit" name="convert" value="Konversi">
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $rupiah = $_POST['rupiah'];
            $currency = $_POST['currency'];

            $rates = [
                'Dollar Amerika' => 12000,
                'Dollar Singapur' => 7000,
                'Yen' => 4000,
                'Won' => 11,
            ];

            $result = $rupiah / $rates[$currency];

            echo "<p>Rp. " . number_format($rupiah) . " = " . number_format($result) . " $currency</p>";
        }
        ?>
    </center>
</body>
</html>