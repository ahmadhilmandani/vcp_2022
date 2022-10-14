-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
('3214223312340002', '123', 'Ahmad Hilman Dani', '2002-05-27', 'pria', 'PNS', 'Sumenep', 0),
('3214223312340003', '123', 'Cagiva Chaedar BY', '2002-05-01', 'pria', 'PNS', 'Sumenep', 0);

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
  `tanggal_vaksin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nik_user`, `dosis`, `nama_vaksin`, `nama_user`, `tanggal_vaksin`) VALUES
(1, '3214223312340002', 'pertama', 'Sinovac-2', 'Ahmad Hilman Dani', '2022-10-06'),
(2, '3214223312340003', 'pertama', 'Sinovac-2', 'Cagiva Chaedar BY', '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin_on_progress`
--

CREATE TABLE `vaksin_on_progress` (
  `nik_user` varchar(50) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `nama_vaksin` varchar(50) NOT NULL,
  `tempat_vaksin` varchar(150) NOT NULL,
  `tanggal_vaksin` date NOT NULL,
  `nomor_antrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin_on_progress`
--

INSERT INTO `vaksin_on_progress` (`nik_user`, `nama_user`, `dosis`, `nama_vaksin`, `tempat_vaksin`, `tanggal_vaksin`, `nomor_antrian`) VALUES
('-', '-', 'kedua', 'Sinopharm', 'puskesmas pamolokan', '0000-00-00', 0),
('3214223312340002', 'Ahmad Hilman Dani', 'kedua', 'Sinopharm', 'puskesmas pamolokan', '2022-10-31', 25),
('3214223312340003', 'Cagiva Chaedar BY', 'kedua', 'Sinopharm', 'puskesmas pamolokan', '2022-10-31', 22);

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
-- Indexes for table `vaksin_on_progress`
--
ALTER TABLE `vaksin_on_progress`
  ADD PRIMARY KEY (`nik_user`),
  ADD UNIQUE KEY `nomor_antrian` (`nomor_antrian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaksin_on_progress`
--
ALTER TABLE `vaksin_on_progress`
  MODIFY `nomor_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
