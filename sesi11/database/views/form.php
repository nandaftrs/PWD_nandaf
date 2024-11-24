<body>
    <h1>Tambah Siswa</h1>
    <form action="tambah.php" method="POST">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="NIS" maxlength="11" required></td>
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
                        <option value="P">Pertama</option>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="ALAMAT" maxlength="50" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
        </table>
    </form>
</body>