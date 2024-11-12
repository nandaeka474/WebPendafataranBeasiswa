-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 11:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_beasiswa`
--

CREATE TABLE `pendaftaran_beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `beasiswa` varchar(50) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL,
  `status_ajuan` varchar(50) DEFAULT NULL,
  `ipk` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran_beasiswa`
--

INSERT INTO `pendaftaran_beasiswa` (`id`, `nama`, `email`, `nomor_hp`, `semester`, `beasiswa`, `berkas`, `status_ajuan`, `ipk`) VALUES
(82, 'rrrr', 'r@g.c', '123123123123', 5, 'Beasiswa Akademik', 'Screenshot 2024-09-15 054429.png', 'terverifikasi', 3.4),
(83, 'rerere', 'nek@s.c', '123412341234', 2, 'Beasiswa Non Akademik', 'logo.png', 'belum terverifikasi', 3.4),
(84, 'jkjt', 'd@g.co', '123412341234', 2, 'Beasiswa Akademik', 'logo.png', 'terverifikasi', 3.4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_beasiswa`
--
ALTER TABLE `pendaftaran_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_beasiswa`
--
ALTER TABLE `pendaftaran_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
