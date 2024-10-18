<div class="label-page"><h3>Tampil Data Anggota</h3></div>
<div class="content">
    <p class="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
    <table class="tabel-tampil">
        <tr>
            <th class="label-tampil-no">No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th class="label-opsi">Opsi</th>
        </tr>
        <?php
        $sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
        $q_tampil_anggota = mysqli_query($db, $sql);
        $nomor=1;
        while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
            <td><?php echo $r_tampil_anggota['nama']; ?></td>
            <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
            <td>
                <div class="tombol-opsi-container"><a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a></div>
                <div class="tombol-opsi-container"><a href="index.php?p=anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Hapus</a></div>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>