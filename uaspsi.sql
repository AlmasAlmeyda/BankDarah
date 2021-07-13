-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2021 pada 04.25
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
-- Database: `uaspsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasidarah`
--

CREATE TABLE `donasidarah` (
  `goldar` varchar(10) DEFAULT NULL,
  `jml_donasi` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasidarah`
--

INSERT INTO `donasidarah` (`goldar`, `jml_donasi`, `tanggal`) VALUES
('O', 2, '2021-07-11'),
('A', 3, '2021-07-11'),
('O', 2, '2021-07-11'),
('B', 2, '2021-07-11'),
('B', 2, '2021-07-11'),
('B', 2, '2021-07-11'),
('AB', 3, '2021-07-11'),
('AB', 2, '2021-07-12'),
('A', 4, '2021-07-13'),
('AB', 2, '2021-07-13');

--
-- Trigger `donasidarah`
--
DELIMITER $$
CREATE TRIGGER `updatedarah` AFTER INSERT ON `donasidarah` FOR EACH ROW begin
update inventori set jumlah = jumlah + new.jml_donasi
where goldar = new.goldar;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donor`
--

CREATE TABLE `donor` (
  `NIK` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donor`
--

INSERT INTO `donor` (`NIK`, `Nama`, `Tanggal`) VALUES
(0, '', '0000-00-00'),
(0, '', '0000-00-00'),
(0, '', '0000-00-00'),
(12332243, 'sinta', '2021-07-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventori`
--

CREATE TABLE `inventori` (
  `goldar` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventori`
--

INSERT INTO `inventori` (`goldar`, `jumlah`) VALUES
('A', 20),
('B', 20),
('AB', 20),
('O', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdarah`
--

CREATE TABLE `orderdarah` (
  `nik` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orderdarah`
--

INSERT INTO `orderdarah` (`nik`, `nama`, `goldar`, `jumlah`) VALUES
(0, '', '', 0),
(211, 'Prima', 'B', 1),
(222, 'Debry', 'AB', 1),
(223, 'almas', 'AB', 1),
(224, 'Yogi', 'O', 2),
(225, 'Sugeng', 'AB', 3),
(226, 'Surya', 'B', 2),
(12332243, 'Putra', 'o', 3);

--
-- Trigger `orderdarah`
--
DELIMITER $$
CREATE TRIGGER `belidarah` AFTER INSERT ON `orderdarah` FOR EACH ROW begin
update inventori set jumlah = jumlah - new.jumlah
where goldar = new.goldar;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `golongan_darah` varchar(30) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `foto_diri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama_lengkap`, `password`, `alamat`, `email`, `golongan_darah`, `foto_ktp`, `foto_diri`) VALUES
('00000', 'Admin', 'admin1', 'Surabaya', 'admin@gmail.com', 'A', '_CV Indische.png', '_FOTO.jpg'),
('030303', 'Tardi', 'tardi1', 'Medaeng', 'tardi@gmail.com', 'A', '_asistensi.png', '_FOTO.jpg'),
('0821', 'Almas', 'almas1', 'Sidoarjo', 'almas@gmail.com', 'A', '_SDLC.png', '_FOTO.jpg'),
('1234', 'Prima Ganteng', 'prima1', 'kenjeran', 'primaganteng@gmail.com', 'B', '_asistensi.png', '_cah_ngganteng.png'),
('5555', 'User', 'user1', 'Bali', 'user@gmail.com', 'A', '_CV Indische.png', '_FOTO.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orderdarah`
--
ALTER TABLE `orderdarah`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
