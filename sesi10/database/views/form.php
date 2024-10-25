<html>
    <body>
        <h1>TAMBAH MAHASISWA</h1>
        <form action="tambah.php" method="post">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="number" name="NIS" maxlength="11" required></td>
                </tr>

                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="NAMA" maxlength="100" required></td>
                </tr>

                <tr>
                    <td>KELAS</td>
                    <td><input type="text" name="KELAS" maxlength="100" required></td>
                </tr>

                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <select name="JK">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>ALAMAT</td>
                    <td><textarea name="ALAMAT" required></textarea></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>