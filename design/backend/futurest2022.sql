-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 05:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futurest2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran1`
--

CREATE TABLE `pendaftaran1` (
  `pendaftaran1_id` bigint(11) NOT NULL,
  `pendaftaran1_nama` varchar(255) NOT NULL,
  `pendaftaran1_instansi` varchar(255) NOT NULL,
  `pendaftaran1_foto` varchar(255) NOT NULL,
  `pendaftaran1_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaran1_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaran1_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaran1_dateUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran2`
--

CREATE TABLE `pendaftaran2` (
  `pendaftaran2_id` bigint(11) NOT NULL,
  `pendaftaran2_nama` varchar(255) NOT NULL,
  `pendaftaran2_instansi` varchar(255) NOT NULL,
  `pendaftaran2_foto` varchar(255) NOT NULL,
  `pendaftaran2_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaran2_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaran2_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaran2_dateUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran1`
--
ALTER TABLE `pendaftaran1`
  ADD PRIMARY KEY (`pendaftaran1_id`);

--
-- Indexes for table `pendaftaran2`
--
ALTER TABLE `pendaftaran2`
  ADD PRIMARY KEY (`pendaftaran2_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran1`
--
ALTER TABLE `pendaftaran1`
  MODIFY `pendaftaran1_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran2`
--
ALTER TABLE `pendaftaran2`
  MODIFY `pendaftaran2_id` bigint(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
