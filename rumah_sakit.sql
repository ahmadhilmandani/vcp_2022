-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 07:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik_id_admin` varchar(150) NOT NULL,
  `sandi` varchar(300) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `perkerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik_id_admin`, `sandi`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `perkerjaan`, `alamat`, `is_admin`) VALUES
('3214223312340002', '$2y$10$e8X0jiW1ONfUDDn9RtOGCeD1Y6TdqaNq8cQu/F.FVwfk/ODopf9MO', 'Ahmad Hilman Dani', '2002-05-27', 'l', 'pns', 'Sumenep', 0),
('3214223312340003', '$2y$10$llCYApoUIsXIolxHVr1F..gL3QYeeGaIegsoG4ahpe3ETRVPkQ/W.', 'Triyono Rifan', '2001-09-11', 'l', 'tenaga medis', 'Ambunten', 0),
('3214223312340004', '$2y$10$1zgHy6cn5vv3W2HjV6Y8w.Yt0CSBjf9MyYPPTBn/GdK3sU4LrTq8i', 'Syafiqur Rahmah', '2002-01-27', 'l', 'guru', 'Sumenep', 0),
('3529121109010005', '$2y$10$pJrcy4SJ4okPFQzFup1lgOkmgAS6.mZeU3TmLkGUpUC92gZOTndrO', 'Sandika Galih', '2002-05-27', 'l', 'guru', 'Bandung', 1),
('3529121109010006', '$2y$10$A9I/gREazRLWAYO0h1TO/.ZOSPfud3MlT7u3KlHVHw8a21Aevrfu.', 'Mardi', '2022-10-20', 'l', 'lainnya', 'Surabaya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `nik_user` varchar(150) NOT NULL,
  `dosis` varchar(30) NOT NULL,
  `nama_vaksin` varchar(30) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `tanggal_vaksin` date NOT NULL,
  `perkerjaan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik_id_admin`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
