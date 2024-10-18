<?php
$file = fopen("welcome.txt", "r");
?>

<?php
// buka file
$file = fopen("welcome.txt", "r");
// tutup file
fclose($file);
?>

<?php
// buka file
$file = fopen("welcome.txt", "r");
// baca isi file
echo fgetc($file);
// tutup file
fclose($file);
?>

<?php
// buka file
$file = fopen("welcome.txt", "r");
// baca file dengan fgets
echo fgets($file);
// tutup file
fclose($file);
?>

<?php
// buka file
$data = "welcome.txt";
$bukafile = fopen($data, "r");
if (!$bukafile) {
    print("File $data tidak dapat dibuka !");
    exit;
}
while (!feof($bukafile)) {
    // membaca file
    $data = fgets($bukafile);
    // menampilkan data
    print("data <br>");
}
// menutup file
fclose($bukafile);
?>