-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 02:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbaspirasi`
--

CREATE TABLE `tbaspirasi` (
  `id_pelaporan` int(11) NOT NULL,
  `id` varchar(5) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `laporan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `jenis_aspirasi` enum('Keamanan','Keadilan','Kesehatan') NOT NULL,
  `status` enum('Belum di Proses','Sudah di Proses') NOT NULL,
  `tanggapan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbaspirasi`
--

INSERT INTO `tbaspirasi` (`id_pelaporan`, `id`, `nis`, `laporan`, `tanggal`, `lokasi`, `gambar`, `jenis_aspirasi`, `status`, `tanggapan`) VALUES
(2, 'AIojn', '20208867', 'iergbhebg', '2022-11-13', 'krgbjeg', 'Desain tanpa judul (6).png', 'Keamanan', 'Belum di Proses', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `nis` varchar(8) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`nis`, `username`, `password`) VALUES
('20208867', 'auraa', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbaspirasi`
--
ALTER TABLE `tbaspirasi`
  ADD PRIMARY KEY (`id_pelaporan`),
  ADD KEY `fk_nis` (`nis`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbaspirasi`
--
ALTER TABLE `tbaspirasi`
  MODIFY `id_pelaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbaspirasi`
--
ALTER TABLE `tbaspirasi`
  ADD CONSTRAINT `fk_nis` FOREIGN KEY (`nis`) REFERENCES `tbsiswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
