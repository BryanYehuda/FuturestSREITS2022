-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 06:35 PM
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
-- Database: `futurest2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_climatechangecommunity`
--

CREATE TABLE `pendaftaran_climatechangecommunity` (
  `pendaftaranclimatechangecommunity_id` bigint(11) NOT NULL,
  `pendaftaranclimatechangecommunity_nama` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_instansi` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_foto` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranclimatechangecommunity_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_essaycompetition`
--

CREATE TABLE `pendaftaran_essaycompetition` (
  `pendaftaranessaycompetition_id` bigint(11) NOT NULL,
  `pendaftaranessaycompetition_nama` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_instansi` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_foto` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranessaycompetition_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_finaltalkshow`
--

CREATE TABLE `pendaftaran_finaltalkshow` (
  `pendaftaranfinaltalkshow_id` bigint(11) NOT NULL,
  `pendaftaranfinaltalkshow_nama` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_instansi` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_foto` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranfinaltalkshow_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_grandtalkshow`
--

CREATE TABLE `pendaftaran_grandtalkshow` (
  `pendaftarangrandtalkshow_id` bigint(11) NOT NULL,
  `pendaftarangrandtalkshow_nama` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_instansi` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_foto` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftarangrandtalkshow_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_re101`
--

CREATE TABLE `pendaftaran_re101` (
  `pendaftaranre101_id` bigint(11) NOT NULL,
  `pendaftaranre101_nama` varchar(255) NOT NULL,
  `pendaftaranre101_instansi` varchar(255) NOT NULL,
  `pendaftaranre101_foto` varchar(255) NOT NULL,
  `pendaftaranre101_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranre101_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranre101_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranre101_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_reinnovation`
--

CREATE TABLE `pendaftaran_reinnovation` (
  `pendaftaranreinnovation_id` bigint(11) NOT NULL,
  `pendaftaranreinnovation_nama` varchar(255) NOT NULL,
  `pendaftaranreinnovation_instansi` varchar(255) NOT NULL,
  `pendaftaranreinnovation_foto` varchar(255) NOT NULL,
  `pendaftaranreinnovation_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranreinnovation_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranreinnovation_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranreinnovation_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_webinar`
--

CREATE TABLE `pendaftaran_webinar` (
  `pendaftaranwebinar_id` bigint(11) NOT NULL,
  `pendaftaranwebinar_nama` varchar(255) NOT NULL,
  `pendaftaranwebinar_instansi` varchar(255) NOT NULL,
  `pendaftaranwebinar_foto` varchar(255) NOT NULL,
  `pendaftaranwebinar_kartuIdentitas` varchar(255) NOT NULL,
  `pendaftaranwebinar_buktiPembayaran` varchar(255) NOT NULL,
  `pendaftaranwebinar_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranwebinar_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_climatechangecommunity`
--
ALTER TABLE `pendaftaran_climatechangecommunity`
  ADD PRIMARY KEY (`pendaftaranclimatechangecommunity_id`);

--
-- Indexes for table `pendaftaran_essaycompetition`
--
ALTER TABLE `pendaftaran_essaycompetition`
  ADD PRIMARY KEY (`pendaftaranessaycompetition_id`);

--
-- Indexes for table `pendaftaran_finaltalkshow`
--
ALTER TABLE `pendaftaran_finaltalkshow`
  ADD PRIMARY KEY (`pendaftaranfinaltalkshow_id`);

--
-- Indexes for table `pendaftaran_grandtalkshow`
--
ALTER TABLE `pendaftaran_grandtalkshow`
  ADD PRIMARY KEY (`pendaftarangrandtalkshow_id`);

--
-- Indexes for table `pendaftaran_re101`
--
ALTER TABLE `pendaftaran_re101`
  ADD PRIMARY KEY (`pendaftaranre101_id`);

--
-- Indexes for table `pendaftaran_reinnovation`
--
ALTER TABLE `pendaftaran_reinnovation`
  ADD PRIMARY KEY (`pendaftaranreinnovation_id`);

--
-- Indexes for table `pendaftaran_webinar`
--
ALTER TABLE `pendaftaran_webinar`
  ADD PRIMARY KEY (`pendaftaranwebinar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
