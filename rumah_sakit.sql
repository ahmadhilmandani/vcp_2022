-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 02:16 PM
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
('3214223312340002', '123', 'Ahmad Hilman Dani', '2002-05-27', 'pria', 'PNS', 'Sumenep', 0),
('3214223312340003', '123', 'Cagiva Chaedar BY', '2002-05-01', 'pria', 'PNS', 'Sumenep', 0),
('3529121109010002', '123', 'Triyono Rifan', '2001-09-11', 'pria', 'Mahasiswa', 'Ambunten', 1),
('3529121208020001', '123', 'Dian', '2012-10-26', 'wanita', 'Guru', 'Ambunten', 0),
('3529161209020012', '123', 'mardi', '2012-10-26', 'wanita', 'Guru', 'Ambunten', 0);

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
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nik_user`, `dosis`, `nama_vaksin`, `nama_user`, `tanggal_vaksin`, `perkerjaan`) VALUES
(10, '3529121208020001', 'Pertama', 'Sinopharm', 'Dian', '2022-10-19', 'Guru');

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
  `tanggal_vaksin_mulai` date NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `tanggal_vaksin_akhir` date NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaksin_on_progress`
--

INSERT INTO `vaksin_on_progress` (`nik_user`, `nama_user`, `dosis`, `nama_vaksin`, `tempat_vaksin`, `tanggal_vaksin`, `tanggal_vaksin_mulai`, `nomor_antrian`, `tanggal_vaksin_akhir`, `kuota`) VALUES
('-', '-', 'pertama', 'sinopharm', 'puskesmas pamolokan', '0000-00-00', '2022-10-19', 0, '2022-10-22', 50);

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
  ADD PRIMARY KEY (`nik_user`);

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
