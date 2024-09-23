<?php 
function hitung_vocal ($kata) {
    $arr = str_split($kata);
    $vocal = ['a', 'i', 'u', 'e', 'o'];
    $found = array_intersect($arr, $vocal);
    $count = array_count_values($arr);
    $result = [];
    foreach ($found as $item) {
        $result[$item] = $count[$item];
    }
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung huruf vocal</title>
</head>
<body>
    <h1>Hitung Huruf Vocal</h1>
    <form method="post" action="<?php $PHP_SELF ?>">
        <p>
            Kata: <br>
            <input type="text" name="kata">
        </p>
        <p>
            <button type="submit">Hitung</button>
        </p>
    </form>

    <?php if ($_POST && isset($_POST["kata"])) ?>
        <hr>

        <table border="1">
            <?php foreach (hitung_vocal($_POST["kata"]) as $huruf => $jumlah): ?>
                <tr>
                    <td style="width: 100px"><?php echo $huruf ?></td>
                    <td style="width: 100px"><?php echo $jumlah ?></td>
                </tr>
            <?php endforeach ?>
        </table>
</body>
</html>