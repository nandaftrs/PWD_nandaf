<!-- 
    * Pemrograman Web Dasar
    * praktikum.php
    * Nama : Nanda Fitri Safitriani
    * NIM : 43230287
    * Tanggal : 30 Agustus 2024
    * Program Studi : Sistem Informasi
 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <h1>Formulir Pendaftaran Siswa</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Calon Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir"> <input type="text" name="tanggal_lahir" placeholder="dd / mm / yyyy"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>No Telp/Hp</td>
                    <td>:</td>
                    <td><input type="text" name="no_telp"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
                        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
                        <input type="checkbox" name="hobi[]" value="Menulis"> Menulis
                        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                    </td>
                </tr>
                <tr>
                    <td>Pas Foto</td>
                    <td>:</td>
                    <td><input type="file" name="pas_foto"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="SUBMIT">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>