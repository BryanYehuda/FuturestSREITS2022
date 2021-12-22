-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 08:26 PM
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
  `pendaftaranclimatechangecommunity_name` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_email` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_domicile` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_major` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_batch` int(4) NOT NULL,
  `pendaftaranclimatechangecommunity_linkedin` varchar(2083) NOT NULL,
  `pendaftaranclimatechangecommunity_cv` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_motivation` text NOT NULL,
  `pendaftaranclimatechangecommunity_contribution` text NOT NULL,
  `pendaftaranclimatechangecommunity_prioritze` int(2) NOT NULL,
  `pendaftaranclimatechangecommunity_willingness` tinyint(1) NOT NULL,
  `pendaftaranclimatechangecommunity_committed` tinyint(1) NOT NULL,
  `pendaftaranclimatechangecommunity_followingfuturestig` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_followingsreig` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_sharestory` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_twibbon` varchar(255) NOT NULL,
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
  `pendaftaranfinaltalkshow_name` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_email` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_domicile` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_university` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_major` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_question` text NOT NULL,
  `pendaftaranfinaltalkshow_followingfuturestig` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_followingsreig` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_sharestory` varchar(255) NOT NULL,
  `pendaftaranfinaltalkshow_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranfinaltalkshow_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_grandtalkshow`
--

CREATE TABLE `pendaftaran_grandtalkshow` (
  `pendaftarangrandtalkshow_id` bigint(11) NOT NULL,
  `pendaftarangrandtalkshow_name` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_email` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_domicile` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_university` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_major` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_question` text NOT NULL,
  `pendaftarangrandtalkshow_followingfuturestig` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_followingsreig` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_sharestory` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftarangrandtalkshow_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_re101`
--

CREATE TABLE `pendaftaran_re101` (
  `pendaftaranre101_id` bigint(11) NOT NULL,
  `pendaftaranre101_name` varchar(255) NOT NULL,
  `pendaftaranre101_email` varchar(255) NOT NULL,
  `pendaftaranre101_domicile` varchar(255) NOT NULL,
  `pendaftaranre101_university` varchar(255) NOT NULL,
  `pendaftaranre101_major` varchar(255) NOT NULL,
  `pendaftaranre101_question` text NOT NULL,
  `pendaftaranre101_followingfuturestig` varchar(255) NOT NULL,
  `pendaftaranre101_followingsreig` varchar(255) NOT NULL,
  `pendaftaranre101_sharestory` varchar(255) NOT NULL,
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
