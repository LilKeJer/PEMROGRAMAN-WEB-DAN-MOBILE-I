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
-- Database: `mhs_pl`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `bhs_pemrograman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `bhs_pemrograman`) VALUES
(11001, 'Eko Yanti Wibowo', 'Phyton'),
(11002, 'Guntur Suhendra Tanu', 'C++'),
(11003, 'Utami Cahaya Setiawa', 'Phyton'),
(11004, 'Teguh Ary Agusalim', 'Phyton'),
(11005, 'Murshid Istana', 'C++'),
(11006, 'Budi', 'PHP'),
(11007, 'Kasih Vera Sasmita', 'C++'),
(11008, 'Kaylee Madubun', 'C++'),
(11009, 'Michael Tambunan', 'PHP'),
(110010, 'Elisha Pohan', 'PHP'),
(110011, 'Laksmini', 'PHP'),
(110012, 'Budiono', 'C++'),
(110013, 'Veronika Dwi Tanudja', 'C++'),
(110014, 'Chandrawinata Renshu', 'PHP'),
(110015, 'Hengki Budi Lesmono', 'Phyton'),
(110016, 'Herman Hendra Johan', 'JavaScript'),
(110017, 'Sugiarto Susilo Makm', 'JavaScript'),
(110018, 'Susanti', 'Phyton'),
(110019, 'Stephen Masaro', 'JavaScript'),
(110020, 'Absolom Sibabiat', 'C++'),
(110021, 'Sharon Rambe', 'JavaScript'),
(110022, 'Sukarno', 'Phyton'),
(110023, 'Megawati', 'Java'),
(110024, 'Diana Parapat', 'Java'),
(110025, 'Raharjo Iman Cahyadi', 'Phyton'),
(110026, 'Sriningsih', 'Java'),
(110027, 'Josiah Doloksaribu', 'Phyton'),
(110028, 'Eko', 'JavaScript'),
(110029, 'Guntur', 'Phyton'),
(110030, 'Lydia Matanari', 'JavaScript');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
