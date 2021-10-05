-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 03:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `asal_sekolah` varchar(64) NOT NULL,
  `nilai` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `asal_sekolah`, `nilai`, `alamat`, `status`) VALUES
(194172456, 'Budi', 'Malang', '2000-09-23', 'Laki-laki', 'smp malang', 87, 'alamat', 'Diterima'),
(200395236, 'mutia', 'kediri', '2001-05-04', 'Perempuan', 'smpn 2', 0, '88', 'Menunggu Konfirmasi'),
(1941720145, 'Budi', 'Malang', '2000-09-23', 'Laki-laki', 'SMP5', 88, 'Mlang', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
