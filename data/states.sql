-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `states`
--
CREATE DATABASE IF NOT EXISTS `states` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `states`;

-- --------------------------------------------------------

--
-- Table structure for table `stateinfo`
--

CREATE TABLE `stateinfo` (
  `Name` varchar(64) NOT NULL,
  `MurderRate` float NOT NULL,
  `GradRate` float NOT NULL,
  `AvgIncome` smallint(6) NOT NULL,
  `IllitRate` float NOT NULL,
  `LifeExpect` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stateinfo`
--

INSERT INTO `stateinfo` (`Name`, `MurderRate`, `GradRate`, `AvgIncome`, `IllitRate`, `LifeExpect`) VALUES
('Alabama', 15.1, 41.3, 3624, 2.1, 69.05),
('Alaska', 11.3, 66.7, 6315, 1.5, 69.31),
('Arizona', 7.8, 58.1, 4530, 1.8, 70.55),
('Arkansas', 10.1, 39.9, 3378, 1.9, 70.66),
('California', 10.3, 62.6, 5114, 1.1, 71.71),
('Colorado', 6.8, 63.9, 4884, 0.7, 72.06),
('Connecticut', 3.1, 56, 5348, 1.1, 72.48),
('Delaware', 6.2, 54.6, 4809, 0.9, 70.06),
('Florida', 10.7, 52.6, 4815, 1.3, 70.66),
('Georgia', 13.9, 40.6, 4091, 2, 68.54),
('Hawaii', 6.2, 61.9, 4963, 1.9, 73.6),
('Idaho', 5.3, 59.5, 4119, 0.6, 71.87),
('Illinois', 10.3, 52.6, 5107, 0.9, 70.14),
('Indiana', 7.1, 52.9, 4458, 0.7, 70.88),
('Iowa', 2.3, 59, 4628, 0.5, 72.56),
('Kansas', 4.5, 59.9, 4669, 0.6, 72.58),
('Kentucky', 10.6, 38.5, 3712, 1.6, 70.1),
('Louisiana', 13.2, 42.2, 3545, 2.8, 68.76),
('Maine', 2.7, 54.7, 3694, 0.7, 70.39),
('Maryland', 8.5, 52.3, 5299, 0.9, 70.22),
('Massachusetts', 3.3, 58.5, 4755, 1.1, 71.83),
('Michigan', 11.1, 52.8, 4751, 0.9, 70.63),
('Minnesota', 2.3, 57.6, 4675, 0.6, 72.96),
('Mississippi', 12.5, 41, 3098, 2.4, 68.09),
('Missouri', 9.3, 48.8, 4254, 0.8, 70.69),
('Montana', 5, 59.2, 4347, 0.6, 70.56),
('Nebraska', 2.9, 59.3, 4508, 0.6, 72.6),
('Nevada', 11.5, 65.2, 5149, 0.5, 69.03),
('NewHampshire', 3.3, 57.6, 4281, 0.7, 71.23),
('NewJersey', 5.2, 52.5, 5237, 1.1, 70.93),
('NewMexico', 9.7, 55.2, 3601, 2.2, 70.32),
('NewYork', 10.9, 52.7, 4903, 1.4, 70.55),
('NorthCarolina', 11.1, 38.5, 3875, 1.8, 69.21),
('NorthDakota', 1.4, 50.3, 5087, 0.8, 72.78),
('Ohio', 7.4, 53.2, 4561, 0.8, 70.82),
('Oklahoma', 6.4, 51.6, 3983, 1.1, 71.42),
('Oregon', 4.2, 60, 4660, 0.6, 72.13),
('Pennsylvania', 6.1, 50.2, 4449, 1, 70.43),
('RhodeIsland', 2.4, 46.4, 4558, 1.3, 71.9),
('SouthCarolina', 11.6, 37.8, 3635, 2.3, 67.96),
('SouthDakota', 1.7, 53.3, 4167, 0.5, 72.08),
('Tennessee', 11, 41.8, 3821, 1.7, 70.11),
('Texas', 12.2, 47.4, 4188, 2.2, 70.9),
('Utah', 4.5, 67.3, 4022, 0.6, 72.9),
('Vermont', 5.5, 57.1, 3907, 0.6, 71.64),
('Virginia', 9.5, 47.8, 4701, 1.4, 70.08),
('Washington', 4.3, 63.5, 4864, 0.6, 71.72),
('WestVirginia', 6.7, 41.6, 3617, 1.4, 69.48),
('Wisconsin', 3, 54.5, 4468, 0.7, 72.48),
('Wyoming', 6.9, 62.9, 4566, 0.6, 70.29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stateinfo`
--
ALTER TABLE `stateinfo`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;