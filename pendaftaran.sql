-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.22
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `jeniskelamin` varchar(35) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nama`, `nim`, `kelas`, `jeniskelamin`, `fakultas`, `hobi`, `alamat`) VALUES
('Chandraliaow', '2147483647', 'D3MI4101', 'Laki-laki', 'FIT', 'Nonton', 'Bandung'),
('Della Sukma', '6701170031', 'D3MI4101', 'Laki-laki', 'FIT', 'Nonton', 'Surakrta'),
('hcfth', '6701170036', 'D3MI4101', 'Laki-laki', 'FIK', 'Nonton', '361464'),
('RezaArap', '6701170044', 'D3MI4101', 'Laki-laki', 'FIT', 'Walking', 'Surakarta'),
('6701170044', 'Della Sukm', 'D3MI4101', 'Laki-laki', 'FIT', 'Nonton', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
