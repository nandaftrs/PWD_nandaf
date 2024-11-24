DROP DATABASE IF EXISTS db_karyawan;
CREATE DATABASE db_karyawan;
USE db_karyawan;
DROP TABLE IF EXISTS tbl_karyawan;
CREATE TABLE tbl_karyawan (
karyawan_id int(11) NOT NULL,
karyawan_nama varchar(100) DEFAULT NULL,
karyawan_alamat varchar(100) DEFAULT NULL,
karyawan_email varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Dumping data untuk tabel "tbl_karyawan"
INSERT INTO tbl_karyawan (karyawan_id, karyawan_nama,
karyawan_alamat, karyawan_email) VALUES
(6, "Desi Mursalina", "Pakjo Palembang", "[email
protected]"),
(7, "Lana Aldillah", "Bukit ", "[email protected]"),
(8, "Ramadhona Utama", "Komp. Sentaraland Jln. Palem Putri
No. 7", "[email protected]"),
(9, "Ahmad Alqayyum SA", "Jln. Komering Blok P No. 3
Palembang", "[email protected]"),
(10, "Muhammad Ilham Ismail", "Komp. Alam Raya Residence
Blok E.", "[email protected]"),
(11, "Zafran Arif Satriadi", "Komp. Sangkuriang Indah SMP 53
Palembang", "[email protected]"),
(12, "Muhammad Maturidi", "12 Ulu Palembang", "[email
protected]");
-- Indeks untuk tabel "tbl_karyawan"
--
ALTER TABLE tbl_karyawan
ADD PRIMARY KEY (karyawan_id);
--
-- AUTO_INCREMENT untuk tabel "tbl_karyawan"
--
ALTER TABLE tbl_karyawan
MODIFY karyawan_id int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT=13;
COMMIT;