-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2021 pada 13.47
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` varchar(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `jurusan`) VALUES
('JRSN00001', 'Rekayasa Perangkat Lunak'),
('JRSN00002', 'Sepeda Motor'),
('JRSN00003', 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_jurusan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
('KLS00001', 'X RPL', 'JRSN00001'),
('KLS00002', 'X SM', 'JRSN00002'),
('KLS00003', 'X MP', 'JRSN00003'),
('KLS00004', 'X KR', 'JRSN00003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(11) NOT NULL,
  `id_petugas` varchar(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` varchar(20) NOT NULL,
  `bulan_dibayar` varchar(10) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` varchar(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
('PMBYRN00001', 'PTG00001', '0027371772', '17 Juni 2020', 'Juli', '2020', 'SPP00001', 250000),
('PMBYRN00002', 'PTG00001', '0027371773', '26 Maret 2021', 'Juli', '2020', 'SPP00001', 250000),
('PMBYRN00003', 'PTG00001', '0027371773', '26 Maret 2021', 'Agustus', '2020', 'SPP00001', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` varchar(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`, `time`) VALUES
('PTG00001', 'admin', '$2y$10$NaizHqWfnk5FV4HBGrrtQO0rehAllUGY7i8rDDC.wTgilj0pn7Neq', 'Anto', 'Admin', 1582114134),
('PTG00002', 'petugas', '$2y$10$tL1GwIo2NGXEwD1ElNhlse6PDQTC9uUAd/RMLYHSuanD0c7zDxzWK', 'Budi', 'Petugas', 1582122872),
('PTG00003', 'acoji', '$2y$10$ySbmaE7t5KdO/1zzoLHwVOJzaG9Tf5sSu1OcVM55oQM8yAPLYWera', 'Aco`', 'Admin', 1584204296);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_spp` varchar(11) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`, `password`) VALUES
('0027371749', '178028', 'Nurdam', 'KLS00003', 'Jl. Pondok Gede', '085273845342', 'SPP00002', '$2y$10$3lniNxYhX.nYTWXVkexW.OWMQGUmJS6py9CvwAt.FNhfhuEnqtk4G'),
('0027371772', '178022', 'Trihadi', 'KLS00001', 'Jl.Baruga No.3', '080524013480', 'SPP00001', '$2y$10$Rc.YM7jOIHCEwjLmmgnvXOH5fjxN3exMyRkSeQtsKf8Ugref5jCym'),
('0027371773', '178021', 'Rivanky Valensius Bara', 'KLS00004', 'Jalan Toddopuli VI Stp 2 No 9', '085241276500', 'SPP00001', '$2y$10$NvLh/OmY6Avpfq9I7r4fkeGHIIodns8i7L4.5wymycRbXEmvr0jj6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `nominal_bulan` int(11) NOT NULL,
  `nominal_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `tahun`, `nominal_bulan`, `nominal_tahun`) VALUES
('SPP00001', '2020/2021', 250000, 3000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn_2` (`nisn`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `tb_siswa` (`id_spp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_pembayaran_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `tb_siswa` (`nisn`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
