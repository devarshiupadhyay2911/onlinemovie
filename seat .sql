-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2021 at 10:23 AM
-- Server version: 8.0.26
-- PHP Version: 7.3.29-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `sid` int NOT NULL,
  `seat_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0,1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`sid`, `seat_no`, `status`) VALUES
(1, 'A1', '0,1'),
(2, 'A2', '0,1'),
(3, 'A3', '0,1'),
(4, 'A4', '0,1'),
(5, 'A5', '0,1'),
(6, 'A6', '0,1'),
(7, 'A7', '0,1'),
(8, 'A8', '0,1'),
(9, 'B1', '0,1'),
(10, 'B2', '0,1'),
(11, 'B3', '0,1'),
(12, 'B4', '0,1'),
(13, 'B5', '0,1'),
(14, 'B6', '0,1'),
(15, 'B7', '0,1'),
(16, 'B8', '0,1'),
(17, 'C1', '0,1'),
(18, 'C2', '0,1'),
(19, 'C3', '0,1'),
(20, 'C4', '0,1'),
(21, 'C5', '0,1'),
(22, 'C6', '0,1'),
(23, 'C7', '0,1'),
(24, 'C8', '0,1'),
(25, 'D1', '0,1'),
(26, 'D2', '0,1'),
(27, 'D3', '0,1'),
(28, 'D4', '0,1'),
(29, 'D5', '0,1'),
(30, 'D6', '0,1'),
(31, 'D7', '0,1'),
(32, 'D8', '0,1'),
(33, 'E1', '0,1'),
(34, 'E2', '0,1'),
(35, 'E3', '0,1'),
(36, 'E4', '0,1'),
(37, 'E5', '0,1'),
(38, 'E6', '0,1'),
(39, 'E7', '0,1'),
(40, 'E8', '0,1'),
(41, 'F1', '0,1'),
(42, 'F2', '0,1'),
(43, 'F3', '0,1'),
(44, 'F4', '0,1'),
(45, 'F5', '0,1'),
(46, 'F6', '0,1'),
(47, 'F7', '0,1'),
(48, 'F8', '0,1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
