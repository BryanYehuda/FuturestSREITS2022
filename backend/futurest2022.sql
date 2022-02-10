-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 07:42 PM
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
-- Database: `futurest_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_oldid` int(11) NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(70) NOT NULL,
  `account_role` varchar(30) NOT NULL,
  `account_table` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_oldid`, `account_username`, `account_password`, `account_role`, `account_table`) VALUES
(1, 1, 'FuturestNationalEssay', '$2y$10$NUsuOOTYmmJZA6yHN1alSu6USYd5xOw.PZYbt4pca.2nF4g0I5dl.', 'admin', 'pendaftaran_essaycompetition'),
(2, 1, 'FuturestREInnovation', '$2y$10$92vhGK8Ja6j9zuWbSJrOoOSIJk3qvNSNTIfRrUgxYGK7Wstm73.26', 'admin', 'pendaftaran_reinnovation'),
(3, 1, 'FuturestGrandTalkshow', '$2y$10$VIgXobkWjwivkG9NeM1.6OD9Hsmxt9VxVSAYFzkTPAfft5riTLMKi', 'admin', 'pendaftaran_grandtalkshow'),
(4, 1, 'FuturestRE101', '$2y$10$bepOt0sWWmW.8XsLkmzyd.eM8K5h.XI8VDYl2LhU2QENGic65KTwi', 'admin', 'pendaftaran_re101'),
(5, 1, 'FuturestClimateChangeCommunity', '$2y$10$UXa3eW1tsrBdG97PbNyh0.I1hgOzMzFILokYK4Q7KwSeZNYWplmRC', 'admin', 'pendaftaran_climatechangecommunity'),
(6, 1, 'FuturestAwardingNight', '$2y$10$.dftyg3k0xPcdyS0SSKfFuLsP6VMvDEScAd7D0cPLmcAVL0SmK0hS', 'admin', 'pendaftaran_awardingnight'),
(7, 1, 'FuturestFinalTalkshow', '$2y$10$f7yka8gQH9iMVthWu2XYGeVKJ.Z6NHYLftRKKNmlJsxy8oSb3e8rO', 'admin', 'pendaftaran_finaltalkshow');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_awardingnight`
--

CREATE TABLE `pendaftaran_awardingnight` (
  `pendaftaranawardingnight_id` bigint(11) NOT NULL,
  `pendaftaranawardingnight_nama` varchar(255) NOT NULL,
  `pendaftaranawardingnight_instansi` varchar(255) NOT NULL,
  `pendaftaranawardingnight_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranawardingnight_dataUpdated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_climatechangecommunity`
--

CREATE TABLE `pendaftaran_climatechangecommunity` (
  `pendaftaranclimatechangecommunity_id` bigint(11) NOT NULL,
  `pendaftaranclimatechangecommunity_name` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_email` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_domicile` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_university` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_major` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_batch` int(4) NOT NULL,
  `pendaftaranclimatechangecommunity_linkedin` varchar(2083) NOT NULL,
  `pendaftaranclimatechangecommunity_cv` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_motivation` text NOT NULL,
  `pendaftaranclimatechangecommunity_contribution` text NOT NULL,
  `pendaftaranclimatechangecommunity_prioritize` int(2) NOT NULL,
  `pendaftaranclimatechangecommunity_willingness` varchar(5) NOT NULL,
  `pendaftaranclimatechangecommunity_committed` varchar(5) NOT NULL,
  `pendaftaranclimatechangecommunity_followingfuturestig` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_followingsreig` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_sharestory` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_twibbon` varchar(255) NOT NULL,
  `pendaftaranclimatechangecommunity_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranclimatechangecommunity_dataUpdated` datetime DEFAULT NULL,
  `pendaftaranclimatechangecommunity_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_essaycompetition`
--

CREATE TABLE `pendaftaran_essaycompetition` (
  `pendaftaranessaycompetition_id` bigint(11) NOT NULL,
  `pendaftaranessaycompetition_teamname` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_name` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_age` int(11) NOT NULL,
  `pendaftaranessaycompetition_1_college` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_major` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_card` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_activestudent` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_photo` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_phone` varchar(20) NOT NULL,
  `pendaftaranessaycompetition_1_email` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_1_follow` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_name` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_age` int(11) NOT NULL,
  `pendaftaranessaycompetition_2_college` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_major` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_card` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_activestudent` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_photo` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_phone` varchar(20) NOT NULL,
  `pendaftaranessaycompetition_2_email` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_2_follow` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_esai` varchar(255) DEFAULT NULL,
  `pendaftaranessaycompetition_payment` varchar(255) NOT NULL,
  `pendaftaranessaycompetition_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranessaycompetition_dataUpdated` datetime DEFAULT NULL,
  `pendaftaranessaycompetition_status` tinyint(1) NOT NULL DEFAULT 0
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
  `pendaftaranfinaltalkshow_batch` int(11) NOT NULL,
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
  `pendaftarangrandtalkshow_batch` int(11) NOT NULL,
  `pendaftarangrandtalkshow_question` text NOT NULL,
  `pendaftarangrandtalkshow_followingfuturestig` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_followingsreig` varchar(255) NOT NULL,
  `pendaftarangrandtalkshow_twibbon` varchar(255) DEFAULT NULL,
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
  `pendaftaranre101_batch` int(11) NOT NULL,
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
  `pendaftaranreinnovation_teamname` varchar(255) NOT NULL,
  `pendaftaranreinnovation_college` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_name` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_major` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_batch` int(11) NOT NULL,
  `pendaftaranreinnovation_1_card` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_activestudent` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_photo` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_phone` varchar(20) NOT NULL,
  `pendaftaranreinnovation_1_email` varchar(255) NOT NULL,
  `pendaftaranreinnovation_1_follow` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_name` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_major` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_batch` int(11) NOT NULL,
  `pendaftaranreinnovation_2_card` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_activestudent` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_photo` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_phone` varchar(20) NOT NULL,
  `pendaftaranreinnovation_2_email` varchar(255) NOT NULL,
  `pendaftaranreinnovation_2_follow` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_name` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_major` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_batch` int(11) NOT NULL,
  `pendaftaranreinnovation_3_card` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_activestudent` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_photo` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_phone` varchar(20) NOT NULL,
  `pendaftaranreinnovation_3_email` varchar(255) NOT NULL,
  `pendaftaranreinnovation_3_follow` varchar(255) NOT NULL,
  `pendaftaranreinnovation_abstract` varchar(255) DEFAULT NULL,
  `pendaftaranreinnovation_fullpaper` varchar(255) DEFAULT NULL,
  `pendaftaranreinnovation_ppt` varchar(255) DEFAULT NULL,
  `pendaftaranreinnovation_payment` varchar(255) NOT NULL,
  `pendaftaranreinnovation_dataCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `pendaftaranreinnovation_dataUpdated` datetime DEFAULT NULL,
  `pendaftaranreinnovation_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestion_id` int(11) NOT NULL,
  `suggestion_email` varchar(255) NOT NULL,
  `suggestion_message` text NOT NULL,
  `suggestion_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `pendaftaran_awardingnight`
--
ALTER TABLE `pendaftaran_awardingnight`
  ADD PRIMARY KEY (`pendaftaranawardingnight_id`);

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
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaftaran_climatechangecommunity`
--
ALTER TABLE `pendaftaran_climatechangecommunity`
  MODIFY `pendaftaranclimatechangecommunity_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran_essaycompetition`
--
ALTER TABLE `pendaftaran_essaycompetition`
  MODIFY `pendaftaranessaycompetition_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaftaran_finaltalkshow`
--
ALTER TABLE `pendaftaran_finaltalkshow`
  MODIFY `pendaftaranfinaltalkshow_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran_grandtalkshow`
--
ALTER TABLE `pendaftaran_grandtalkshow`
  MODIFY `pendaftarangrandtalkshow_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `pendaftaran_re101`
--
ALTER TABLE `pendaftaran_re101`
  MODIFY `pendaftaranre101_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran_reinnovation`
--
ALTER TABLE `pendaftaran_reinnovation`
  MODIFY `pendaftaranreinnovation_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
