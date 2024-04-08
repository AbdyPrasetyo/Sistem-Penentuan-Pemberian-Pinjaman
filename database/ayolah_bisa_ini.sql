-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2022 pada 16.07
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayolah_bisa_ini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comen`
--

CREATE TABLE `comen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comen`
--

INSERT INTO `comen` (`id`, `nama`, `email`, `subject`, `message`) VALUES
(4, 'abdy', 'reza@gmail.com', 'tes', 'jadilah juara disetiap tantangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_testing`
--

CREATE TABLE `data_testing` (
  `id_data_testing` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `status_rumah` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `berkas_nasabah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_testing`
--

INSERT INTO `data_testing` (`id_data_testing`, `pekerjaan`, `jumlah_tanggungan`, `status_rumah`, `pendapatan`, `berkas_nasabah`) VALUES
(14, 2, 3, 3, 2, 1),
(15, 2, 5, 4, 1, 3),
(16, 2, 5, 4, 1, 3),
(17, 3, 1, 2, 1, 1),
(18, 2, 1, 2, 1, 1),
(49, 4, 2, 3, 1, 1),
(50, 1, 3, 3, 5, 5),
(51, 5, 5, 5, 5, 5),
(52, 5, 5, 5, 5, 5),
(53, 5, 5, 5, 5, 5),
(54, 1, 1, 2, 1, 1),
(55, 1, 1, 2, 1, 1),
(56, 1, 1, 2, 1, 1),
(57, 5, 5, 5, 5, 5),
(58, 3, 3, 4, 2, 3),
(59, 3, 2, 3, 2, 2),
(60, 5, 5, 5, 5, 5),
(61, 3, 2, 3, 2, 3),
(62, 3, 2, 3, 2, 3),
(63, 4, 3, 4, 2, 2),
(64, 5, 5, 5, 5, 5),
(65, 1, 1, 2, 1, 1),
(66, 1, 1, 2, 1, 1),
(67, 1, 1, 2, 1, 1),
(68, 1, 1, 2, 1, 1),
(69, 5, 5, 5, 5, 5),
(70, 5, 5, 2, 5, 5),
(71, 1, 1, 2, 2, 1),
(72, 5, 5, 5, 5, 5),
(73, 5, 2, 5, 4, 3),
(74, 4, 2, 2, 4, 4),
(75, 5, 4, 5, 4, 3),
(76, 4, 3, 3, 3, 4),
(77, 3, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id_data_training` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `status_rumah` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `berkas_nasabah` int(11) NOT NULL,
  `output` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id_data_training`, `pekerjaan`, `jumlah_tanggungan`, `status_rumah`, `pendapatan`, `berkas_nasabah`, `output`) VALUES
(56, 2, 2, 5, 3, 3, 'Memenuhi'),
(57, 2, 2, 3, 3, 3, 'Memenuhi'),
(58, 2, 3, 3, 2, 3, 'Tidak Memenuhi'),
(59, 2, 4, 3, 3, 3, 'Tidak Memenuhi'),
(60, 2, 4, 3, 3, 3, 'Memenuhi'),
(61, 5, 5, 5, 5, 5, 'Tidak Memenuhi'),
(62, 1, 1, 2, 1, 1, 'Tidak Memenuhi'),
(63, 1, 1, 2, 1, 1, 'Tidak Memenuhi'),
(64, 1, 1, 2, 1, 1, 'Tidak Memenuhi'),
(65, 1, 1, 2, 1, 1, 'Memenuhi'),
(66, 5, 5, 5, 5, 5, 'Memenuhi'),
(67, 5, 5, 2, 5, 5, 'Memenuhi'),
(68, 1, 1, 2, 2, 1, 'Memenuhi'),
(69, 5, 5, 5, 5, 5, 'Memenuhi'),
(70, 5, 2, 5, 4, 3, 'Memenuhi'),
(71, 4, 2, 2, 4, 4, 'Memenuhi'),
(72, 5, 4, 5, 4, 3, 'Memenuhi'),
(73, 4, 3, 3, 3, 4, 'Memenuhi'),
(74, 3, 1, 3, 1, 1, 'Memenuhi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sort`
--

CREATE TABLE `sort` (
  `id_sort` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `status_rumah` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `berkas_nasabah` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sort`
--

INSERT INTO `sort` (`id_sort`, `pekerjaan`, `jumlah_tanggungan`, `status_rumah`, `pendapatan`, `berkas_nasabah`, `hasil`, `status`) VALUES
(39, 0, 4, 1, 0, 4, '2.4494897427832', 'Memenuhi'),
(40, 0, 4, 1, 0, 4, '2.4494897427832', 'Memenuhi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_user`, `nama`, `username`, `email`, `password`, `level`) VALUES
(13, 'Fitri Lestari', 'fitri', 'fitri@admin.com', 'fitri', 'admin'),
(14, 'REZA ABDY PRASETYO', 'Apras', 'apras@admin.com', 'apras', 'admin'),
(15, 'fitri', 'fitri lestari', 'fitri@user.com', '534a0b7aa872ad1340d0071cbfa38697', 'admin'),
(18, 'ilham', 'ilham refo', 'ilham@admin.com', 'ilham', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sub_variabel`
--

CREATE TABLE `tb_sub_variabel` (
  `id_sub_variabel` int(11) NOT NULL,
  `id_variabel` int(11) NOT NULL,
  `nama_sub_variabel` varchar(60) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sub_variabel`
--

INSERT INTO `tb_sub_variabel` (`id_sub_variabel`, `id_variabel`, `nama_sub_variabel`, `bobot`) VALUES
(14, 1, 'Buruh', 1),
(15, 1, 'Wiraswasta', 3),
(16, 1, 'Pegawai Swasta', 4),
(17, 1, 'PNS', 5),
(18, 2, '>4', 1),
(19, 2, '4', 2),
(20, 2, '3', 3),
(21, 2, '2', 4),
(22, 2, '1', 5),
(23, 13, 'Kost/Kontrak', 2),
(24, 13, 'Milik Instansi', 3),
(25, 13, 'MIlik Orangtua', 4),
(26, 13, 'Milik Sendiri', 5),
(27, 14, '1.000.000 s/d 1.500.000', 1),
(28, 14, ' 1.500.000 s/d 2.500.000', 2),
(29, 14, '2.500.000 s/d 3.500.000', 3),
(30, 14, '3.500.000 s/d 4.500.000', 4),
(31, 14, '>4.500.000', 5),
(32, 15, 'Sangat Kurang', 1),
(33, 15, 'Kurang', 2),
(34, 15, 'Cukup', 3),
(35, 15, 'Baik', 4),
(36, 15, 'Sangat Baik', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_variabel`
--

CREATE TABLE `tb_variabel` (
  `id_variabel` int(11) NOT NULL,
  `nama_variabel` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_variabel`
--

INSERT INTO `tb_variabel` (`id_variabel`, `nama_variabel`) VALUES
(1, 'Pekerjaan'),
(2, 'Jumlah Tanggungan'),
(13, 'Status Rumah'),
(14, 'Pendapatan'),
(15, 'Berkas Nasabah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id_temp` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `status_rumah` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `berkas_nasabah` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comen`
--
ALTER TABLE `comen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_testing`
--
ALTER TABLE `data_testing`
  ADD PRIMARY KEY (`id_data_testing`);

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id_data_training`);

--
-- Indeks untuk tabel `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`id_sort`);

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_sub_variabel`
--
ALTER TABLE `tb_sub_variabel`
  ADD PRIMARY KEY (`id_sub_variabel`),
  ADD KEY `id_variabel` (`id_variabel`);

--
-- Indeks untuk tabel `tb_variabel`
--
ALTER TABLE `tb_variabel`
  ADD PRIMARY KEY (`id_variabel`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comen`
--
ALTER TABLE `comen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_testing`
--
ALTER TABLE `data_testing`
  MODIFY `id_data_testing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id_data_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `sort`
--
ALTER TABLE `sort`
  MODIFY `id_sort` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_sub_variabel`
--
ALTER TABLE `tb_sub_variabel`
  MODIFY `id_sub_variabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_variabel`
--
ALTER TABLE `tb_variabel`
  MODIFY `id_variabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=538;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_sub_variabel`
--
ALTER TABLE `tb_sub_variabel`
  ADD CONSTRAINT `tb_sub_variabel_ibfk_1` FOREIGN KEY (`id_variabel`) REFERENCES `tb_variabel` (`id_variabel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
