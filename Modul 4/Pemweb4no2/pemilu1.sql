-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 06:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` bigint(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Suara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `Nama`, `Suara`) VALUES
(1, 'Evan', 'Soaduon'),
(2, 'Mitchel', 'Jeremia'),
(3, 'Fauzan', 'Soaduon'),
(4, 'Satrya', 'Pasaribu'),
(5, 'Kevin', 'Kevin'),
(6, 'Abi', 'Soaduon'),
(7, 'Toni', 'Pasaribu'),
(8, 'KeJer', 'Jeremia'),
(9, 'Adi', 'Soaduon'),
(10, 'Nia', 'KeJer'),
(11, 'Lia', 'Soaduon'),
(12, 'Rio', 'Soaduon'),
(13, 'Putri', 'Soaduon'),
(14, 'Jeremia', 'KeJer'),
(15, 'Dina', 'Soaduon'),
(16, 'Soaduon', 'Soaduon'),
(17, 'Sadiah', 'KeJer'),
(18, 'Yunia', 'KeJer'),
(19, 'Pasaribu', 'Pasaribu'),
(20, 'Rere', 'Jeremia'),
(21, 'Boma', 'Pasaribu'),
(22, 'Andre', 'Soaduon'),
(23, 'Gabriel', 'KeJer'),
(24, 'Iman', 'Kevin'),
(25, 'Jose', 'Jeremia'),
(26, 'Wira', 'Kevin'),
(27, 'Listi', 'Pasaribu'),
(28, 'Adit', 'Pasaribu'),
(29, 'Pras', 'Kevin'),
(30, 'Astri', 'Jeremia'),
(31, 'Nelvit', 'KeJer'),
(32, 'Gamaliel', 'Soaduon'),
(33, 'Ribka', 'KeJer'),
(34, 'Budi', 'Kevin'),
(35, 'Akil', 'Soaduon'),
(36, 'Cakra', 'KeJer'),
(37, 'Yuli', 'Kevin'),
(38, 'Elsan', 'Pasaribu'),
(39, 'Arifin', 'KeJer'),
(40, 'Banu', 'KeJer'),
(41, 'Ardi', 'Kevin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
