<table>
    <thead>
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JK</th>
            <th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_object($query)) {
        ?>
            <tr>
                <td><?php echo $row->nis ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->kelas ?></td>
                <td><?php echo $row->jk ?></td>
                <td><?php echo $row->alamat ?></td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>