-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2022 pada 02.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik_id_admin`, `sandi`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `perkerjaan`, `alamat`, `is_admin`) VALUES
('3214223312340002', '123', 'Ahmad Hilman Dani', '2002-05-27', 'pria', 'PNS', 'Sumenep', 0),
('3214223312340003', '123', 'Cagiva Chaedar BY', '2002-05-01', 'pria', 'PNS', 'Sumenep', 0),
('3529121109010002', '123', 'Triyono Rifan', '2001-09-11', 'pria', 'Mahasiswa', 'Ambunten', 1),
('3529121208020001', '123', 'Dian', '2012-10-26', 'wanita', 'Guru', 'Ambunten', 0),
('3529161209020012', '123', 'mardi', '2012-10-26', 'wanita', 'Guru', 'Ambunten', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksin`
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
-- Dumping data untuk tabel `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nik_user`, `dosis`, `nama_vaksin`, `nama_user`, `tanggal_vaksin`, `perkerjaan`) VALUES
(1, '3214223312340002', 'pertama', 'Sinovac-2', 'Ahmad Hilman Dani', '2022-10-06', 'PNS'),
(2, '3214223312340003', 'pertama', 'Sinovac-2', 'Cagiva Chaedar BY', '2022-10-06', 'PNS'),
(10, '3529121208020001', 'Pertama', 'Sinopharm', 'Dian', '2022-10-19', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksin_on_progress`
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
-- Dumping data untuk tabel `vaksin_on_progress`
--

INSERT INTO `vaksin_on_progress` (`nik_user`, `nama_user`, `dosis`, `nama_vaksin`, `tempat_vaksin`, `tanggal_vaksin`, `tanggal_vaksin_mulai`, `nomor_antrian`, `tanggal_vaksin_akhir`, `kuota`) VALUES
('-', '-', 'Pertama', 'Sinopharm', 'puskesmas pamolokan', '0000-00-00', '2022-10-15', 1, '2022-10-29', 23);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik_id_admin`);

--
-- Indeks untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indeks untuk tabel `vaksin_on_progress`
--
ALTER TABLE `vaksin_on_progress`
  ADD PRIMARY KEY (`nik_user`),
  ADD UNIQUE KEY `nomor_antrian` (`nomor_antrian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `vaksin_on_progress`
--
ALTER TABLE `vaksin_on_progress`
  MODIFY `nomor_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
