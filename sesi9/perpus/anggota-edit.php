<?php
$id_anggota = $_GET["idanggota"];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_assoc($q_tampil_anggota);
?>

<div id="label-page">
    <h3>Edit Data Anggota</h3>
</div>
<div id="content">
    <form action="proses/anggota-edit-proses.php" method="post">
        <table id="tabel-input">
            <tr>
                <td class="label-formulir">ID Anggota</td>
                <td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota["idanggota"]; ?>" readonly class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
            </tr>
            <tr>
                <td class="label-formulir">Nama</td>
                <td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota["nama"]; ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Jenis Kelamin</td>
                <td class="isian-formulir"><input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota["jeniskelamin"]; ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Alamat</td>
                <td class="isian-formulir"><input type="text" name="alamat" value="<?php echo $r_tampil_anggota["alamat"]; ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
        </table>
    </form>
</div>