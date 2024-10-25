<table border="1">
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
            while ($result = mysqli_fetch_object($query)) {
            ?>
            <tr>
                <td><?php echo $result->NIS?></td>
                <td><?php echo $result->NAMA?></td>
                <td><?php echo $result->KELAS?></td>
                <td><?php echo $result->JK?></td>
                <td><?php echo $result->ALAMAT?></td>
            </tr>
            <?php
            }
            ?>
    </tbody>
</table>