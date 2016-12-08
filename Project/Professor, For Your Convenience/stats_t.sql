-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 08:45 PM
-- Server version: 5.6.27-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_372_course_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats_t`
--

CREATE TABLE `stats_t` (
  `StatID` int(11) NOT NULL,
  `Can1Poll` varchar(64) DEFAULT NULL,
  `Can2Poll` varchar(64) DEFAULT NULL,
  `Can3Poll` varchar(64) DEFAULT NULL,
  `DateOfRecord` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stats_t`
--

INSERT INTO `stats_t` (`StatID`, `Can1Poll`, `Can2Poll`, `Can3Poll`, `DateOfRecord`) VALUES
(1, '43%', '44%', '6%', '2016-11-04'),
(2, '42%', '45%', '5%', '2016-11-03'),
(3, '44%', '44%', '4%', '2016-11-02'),
(4, '46%', '45%', '3%', '2016-11-01'),
(5, '47%', '43%', 'No Data', '2016-10-31'),
(6, '45%', '46%', '4%', '2016-10-30'),
(7, '46%', '44%', 'No Data', '2016-10-29'),
(8, '46%', '44%', 'No Data', '2016-10-28'),
(9, '40%', '46%', '6%', '2016-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stats_t`
--
ALTER TABLE `stats_t`
  ADD PRIMARY KEY (`StatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats_t`
--
ALTER TABLE `stats_t`
  MODIFY `StatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
