<div class="label-page"><h3>Input Data Anggota</h3></div>
<div class="content">
    <form action="proses/anggota-input-proses.php" method="post">
        <table class="tabel-input">
            <tr>
                <td class="label-formulir">ID Anggota</td>
                <td class="isian-formulir isian-formulir-border"><input type="text" name="id_anggota" class="isian-formulir"></td>
            </tr>
            <tr>
                <td class="label-formulir">Nama</td>
                <td class="isian-formulir isian-formulir-border"><input type="text" name="nama" class="isian-formulir"></td>
            </tr>
            <tr>
                <td class="label-formulir">Jenis Kelamin</td>
                <td class="isian-formulir isian-formulir-border"><input type="radio" name="jenis_kelamin" value="Pria">Pria</td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir isian-formulir-border"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
            </tr>
            <tr>
                <td class="label-formulir">alamat</td>
                <td class="isian-formulir"><textarea name="alamat" class="isian-formulir isian-formulir-border" cols="40" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
            </tr>
        </table>
    </form>
</div>