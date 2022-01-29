-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 06:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('YWRtaW4=', 'YnBuMTIzNDU2Nzg=');

-- --------------------------------------------------------

--
-- Table structure for table `data_tanah`
--

CREATE TABLE `data_tanah` (
  `nama` varchar(100) NOT NULL,
  `no_surat` int(5) NOT NULL,
  `no_hak_milik` varchar(100) NOT NULL,
  `luas` int(20) NOT NULL,
  `no_berkas` varchar(100) NOT NULL,
  `dftr_isian` varchar(100) NOT NULL,
  `tgl_arsip` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tanah`
--

INSERT INTO `data_tanah` (`nama`, `no_surat`, `no_hak_milik`, `luas`, `no_berkas`, `dftr_isian`, `tgl_arsip`) VALUES
('test', 1, 'test', 2, 'awdwa', 'wadawd', '2022-01-29'),
('wad', 3, 'wad', 6, 'wadwa', 'wad', '2022-01-29'),
('test', 4, 'test', 5, 'test', 'test', '2022-01-29'),
('wadwa', 6, 'wad', 1, 'wad', 'wad', '2022-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_tanah`
--
ALTER TABLE `data_tanah`
  ADD PRIMARY KEY (`no_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
