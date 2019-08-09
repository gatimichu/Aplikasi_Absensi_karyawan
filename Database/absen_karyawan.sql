-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jul 2019 pada 12.58
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `ket_hadir` varchar(15) NOT NULL,
  `jam_masuk` varchar(10) NOT NULL,
  `jam_pulang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `tanggal`, `nip`, `ket_hadir`, `jam_masuk`, `jam_pulang`) VALUES
(67, '2018-11-03', 'NIP00005', 'H', '11:58:27 a', '11:58:30 a'),
(68, '03-11-2018', 'NIP00005', '', '11:58:27 a', '11:58:30 a'),
(69, '2018-11-04', 'NIP00001', 'H', '12:07:06 p', '12:07:09 p'),
(70, '03-11-2018', 'NIP00001', '', '12:07:06 p', '12:07:09 p'),
(71, '2018-11-04', 'NIP00002', 'H', '12:07:17 p', '12:07:20 p'),
(72, '03-11-2018', 'NIP00002', '', '12:07:17 p', '12:07:20 p'),
(73, '2018-11-03', 'NIP00002', 'H', '', ''),
(74, '2018-11-03', 'NIP00001', 'H', '', ''),
(75, '2019-02-13', 'NIP00005', 'S', '', ''),
(76, '2019-02-16', 'NIP00005', 'S', '', ''),
(77, '2019-02-16', 'NIP00001', 'I', '', ''),
(78, '2019-03-11', 'NIP00005', 'H', '', ''),
(79, '2019-03-17', 'NIP00005', 'H', '', ''),
(80, '2019-03-17', 'NIP00001', 'I', '', ''),
(81, '2019-03-17', 'NIP00002', 'A', '', ''),
(82, '2019-07-03', 'NIP00001', 'I', '', ''),
(83, '2019-07-03', 'NIP00002', 'H', '', ''),
(84, '2019-07-03', 'NIP00003', 'H', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'User', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_karyawan`
--

CREATE TABLE `tambah_karyawan` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tambah_karyawan`
--

INSERT INTO `tambah_karyawan` (`nip`, `nama`, `jabatan`, `agama`, `alamat`, `no_tlp`) VALUES
('NIP00001', 'Mutiara Pardede', 'IT Development', 'kristen', 'jl.Soreang', '089454366554'),
('NIP00002', 'Patricia Martha olivia', 'IT Development', 'kristen', 'jl.Soreang', '087243354545'),
('NIP00003', 'Renita Apriliana', 'IT Development', 'islam', 'Jl.Kopo Permai', '08989543534'),
('NIP00005', 'Baud m002', '2000', 'islam', 'Jl.Sukamanah', '0987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah_karyawan`
--
ALTER TABLE `tambah_karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
