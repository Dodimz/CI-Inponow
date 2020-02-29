-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2019 pada 02.44
-- Versi Server: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inponow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel-inponow`
--

CREATE TABLE `tabel-inponow` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel-inponow`
--

INSERT INTO `tabel-inponow` (`id`, `nama`, `no_induk`, `jurusan`) VALUES
(1, 'aldi', 'f2323', 'ICT'),
(2, 'aldi', 'f2323', 'ICT'),
(5, 'edwin', 'f2311', 'ICT'),
(8, 'yusuf', 'f2314', 'Akutansi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel-inponow`
--
ALTER TABLE `tabel-inponow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel-inponow`
--
ALTER TABLE `tabel-inponow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
