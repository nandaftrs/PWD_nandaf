-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 09.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `tutorial`
-- Struktur dari tabel `user`
--
CREATE TABLE `user` (
`user_id` int(11) NOT NULL,
`user_nama` varchar(100) NOT NULL,
`user_kontak` varchar(15) NOT NULL,
`user_alamat` varchar(255) NOT NULL,
`user_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`);
--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;