CREATE DATABASE db_mahasiswa;
USE db_mahasiswa;
CREATE TABLE t_siswa (
    ID int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NIS varchar(11) NOT NULL,
    NAMA varchar(100) NOT NULL,
    KELAS varchar(10) NOT NULL,
    JK varchar(1),
    ALAMAT text NOT NULL
    );