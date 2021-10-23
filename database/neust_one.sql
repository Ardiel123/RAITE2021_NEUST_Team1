-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 23, 2021 at 10:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neust_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(25) NOT NULL,
  `admin_fname` varchar(25) NOT NULL,
  `admin_lname` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `crew_id` int(25) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `rank_id` int(25) NOT NULL,
  `ship_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`crew_id`, `fname`, `surname`, `rank_id`, `ship_id`) VALUES
(4, 'ardiel', 'salatamos', 2, 11),
(5, 'karl', 'pacheco', 6, 12),
(6, 'Juan', 'Dela cruz', 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `departure`
--

CREATE TABLE `departure` (
  `departure_id` int(25) NOT NULL,
  `ship_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departure`
--

INSERT INTO `departure` (`departure_id`, `ship_id`) VALUES
(7, 10),
(6, 11),
(8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(25) NOT NULL,
  `rank_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`rank_id`, `rank_name`) VALUES
(1, 'Master'),
(2, 'ChiefMate'),
(3, 'ThirdMate'),
(4, 'DeckCadet'),
(5, 'ChiefEngineer'),
(6, 'SecondEngineer'),
(7, 'ThirdEngineeer'),
(8, 'FourthEngineer'),
(9, 'EngineCadet'),
(10, 'Electrician'),
(11, 'Boatswain'),
(12, 'Pump Man'),
(13, 'Able-Bodied-Seaman'),
(14, 'Ordinary Seaman'),
(15, 'Fitter'),
(16, 'Oiler'),
(17, 'Wiper'),
(18, 'Chief Cook'),
(19, 'Steward');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(25) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `destination`, `distance`) VALUES
(1, 'cebu', 100),
(2, 'Manila', 233);

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `ship_id` int(50) NOT NULL,
  `ship_name` varchar(25) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `knots` float NOT NULL,
  `route_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`ship_id`, `ship_name`, `speed`, `knots`, `route_id`) VALUES
(2, 'Ship100', 'Extra Slow Streaming', 16.5, 2),
(10, 'ship2', 'Slow Streaming', 19, 1),
(11, 'ship3', 'Extra Slow Streaming', 16.5, 1),
(12, 'Ship4', 'Extra Slow Streaming', 16.5, 1),
(13, 'big one', 'Minimal Costs', 13.5, 2),
(14, 'Ship5', 'Normal', 23, 1),
(15, 'Ship10', 'Extra Slow Streaming', 16.5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`crew_id`),
  ADD KEY `rank_id` (`rank_id`),
  ADD KEY `ship_id` (`ship_id`);

--
-- Indexes for table `departure`
--
ALTER TABLE `departure`
  ADD PRIMARY KEY (`departure_id`),
  ADD KEY `ship` (`ship_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`ship_id`),
  ADD KEY `route_id` (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `crew_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departure`
--
ALTER TABLE `departure`
  MODIFY `departure_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ship_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crew`
--
ALTER TABLE `crew`
  ADD CONSTRAINT `rank_id` FOREIGN KEY (`rank_id`) REFERENCES `rank` (`rank_id`),
  ADD CONSTRAINT `ship_id` FOREIGN KEY (`ship_id`) REFERENCES `ship` (`ship_id`) ON UPDATE CASCADE;

--
-- Constraints for table `departure`
--
ALTER TABLE `departure`
  ADD CONSTRAINT `ship` FOREIGN KEY (`ship_id`) REFERENCES `ship` (`ship_id`);

--
-- Constraints for table `ship`
--
ALTER TABLE `ship`
  ADD CONSTRAINT `route_id` FOREIGN KEY (`route_id`) REFERENCES `route` (`route_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
