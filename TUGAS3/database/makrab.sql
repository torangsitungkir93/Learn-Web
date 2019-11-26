-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2019 pada 17.33
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makrab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_makrab`
--

CREATE TABLE `peserta_makrab` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta_makrab`
--

INSERT INTO `peserta_makrab` (`id`, `nama`, `email`, `jk`, `agama`, `umur`, `alamat`) VALUES
(1, 'Torangto Situngkir', 'torangsitungkir93@gmail.com', 'L', 'Kristen', 19, 'Jln Dirgantara 3 no 77'),
(2, 'Kari Ayam', 'KariWSmith@teleworm.us', 'P', 'Buddha', 19, 'Jln Nologaten xxi'),
(3, 'Nino ', 'DerekRMyers@rhyta.com', 'L', 'Konghucu', 21, 'Malioboro KM'),
(5, 'Laura ', 'LauraBaer@dayrep.com', 'P', 'Islam', 20, 'Jln Magelang 97'),
(6, 'Julian Wicaksono', 'JulianWicaksono@yahoo.co.id', 'L', 'Khatolik', 19, 'Jln KI Hajar Dewantara'),
(7, 'Axel Frans', 'axelfrans93@gmail.com', 'L', 'Khatolik', 20, 'Blok 5 Komplek Yadara no 77'),
(8, 'Simon Sianturi', 'Simonsianturi@yahoo.co.id', 'L', 'Kristen', 19, 'Jln Bangun no 21'),
(9, 'Sthepani Poetri', 'Stepszzz77@gmail.com', 'P', 'Islam', 25, 'Jln Godean no 87'),
(10, 'Siti Nurbaya', 'SitiNurbaya69@yahoo.co.id', 'P', 'Islam', 12, 'Jln Ahmad Dahlan no 69'),
(19, 'Joker', 'JokerMagician@yahoo.co..id', 'L', 'Buddha', 20, 'Jln Gedung putih no 00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta_makrab`
--
ALTER TABLE `peserta_makrab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta_makrab`
--
ALTER TABLE `peserta_makrab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
