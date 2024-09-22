<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Elemen Form</title>
</head>
<body>
    <fieldset>
        <h1>Formulir Pendaftaran Siswa</h1>
        <form action="" method="post">
            <div>
                Nama Calon Siswa : <input type="text" name="nama" size="20">
            </div>
            <div>
                Tempat Tanggal Lahir :
                <input type="text" name="tempat" size="20">
                <input type="date" name="ttl" size="20">
            </div>
            <div>
                Agama :
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="buddha">Buddha</option>
                    <option value="hindu">Hindu</option>
                    <option value="konghuchu">Konghuchu</option>
                </select>
            </div>
            <div>
                Alamat :
                <textarea name="alamat" cols="50" rows="5"></textarea>
            </div>
            <div>
                No. Telp/HP :
                <input type="text" name="nohp" size="20">
            </div>
            <div>
                Jenis Kelamin :
                <input type="radio" name="jk" value="pria">Pria 
                <input type="radio" name="jk" value="wanita">Wanita
            </div>
            <div>
                Hobi :
                <input type="checkbox" name="hobi1" value="baca">Membaca
                <input type="checkbox" name="hobi2" value="nulis">Menulis
                <input type="checkbox" name="hobi3" value="ol">Olahraga
            </div>
            <div>
                Pas Foto :
                <input type="file" name="pasft" value="browse">
            </div>
        </form>
        <input type="submit" value="SUBMIT">
    </fieldset>
</body>
</html>