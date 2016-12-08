-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 08:44 PM
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
-- Table structure for table `states_t`
--

CREATE TABLE `states_t` (
  `StateTableID` int(8) NOT NULL,
  `Alabama` varchar(3) DEFAULT NULL,
  `Alaska` varchar(3) DEFAULT NULL,
  `Arizona` varchar(3) DEFAULT NULL,
  `Arkansas` varchar(3) DEFAULT NULL,
  `California` varchar(3) DEFAULT NULL,
  `Colorado` varchar(3) DEFAULT NULL,
  `Connecticut` varchar(3) DEFAULT NULL,
  `Delaware` varchar(3) DEFAULT NULL,
  `Florida` varchar(3) DEFAULT NULL,
  `Georgia` varchar(3) DEFAULT NULL,
  `Hawaii` varchar(3) DEFAULT NULL,
  `Idaho` varchar(3) DEFAULT NULL,
  `Illinois` varchar(3) DEFAULT NULL,
  `Indiana` varchar(3) DEFAULT NULL,
  `Iowa` varchar(3) DEFAULT NULL,
  `Kansas` varchar(3) DEFAULT NULL,
  `Kentucky` varchar(3) DEFAULT NULL,
  `Louisiana` varchar(3) DEFAULT NULL,
  `Maine` varchar(3) DEFAULT NULL,
  `Maryland` varchar(3) DEFAULT NULL,
  `Massachusetts` varchar(3) DEFAULT NULL,
  `Michigan` varchar(3) DEFAULT NULL,
  `Minnesota` varchar(3) DEFAULT NULL,
  `Mississippi` varchar(3) DEFAULT NULL,
  `Missouri` varchar(3) DEFAULT NULL,
  `Montana` varchar(3) DEFAULT NULL,
  `Nebraska` varchar(3) DEFAULT NULL,
  `Nevada` varchar(3) DEFAULT NULL,
  `New_Hampshire` varchar(3) DEFAULT NULL,
  `New_Jersey` varchar(3) DEFAULT NULL,
  `New_Mexico` varchar(3) DEFAULT NULL,
  `New_York` varchar(3) DEFAULT NULL,
  `North_Carolina` varchar(3) DEFAULT NULL,
  `North_Dakota` varchar(3) DEFAULT NULL,
  `Ohio` varchar(3) DEFAULT NULL,
  `Oklahoma` varchar(3) DEFAULT NULL,
  `Oregon` varchar(3) DEFAULT NULL,
  `Pennsylvania` varchar(3) DEFAULT NULL,
  `Rhode_Island` varchar(3) DEFAULT NULL,
  `South_Carolina` varchar(3) DEFAULT NULL,
  `South_Dakota` varchar(3) DEFAULT NULL,
  `Tennessee` varchar(3) DEFAULT NULL,
  `Texas` varchar(3) DEFAULT NULL,
  `Utah` varchar(3) DEFAULT NULL,
  `Vermont` varchar(3) DEFAULT NULL,
  `Virginia` varchar(3) DEFAULT NULL,
  `Washington` varchar(3) DEFAULT NULL,
  `West_Virginia` varchar(3) DEFAULT NULL,
  `Wisconsin` varchar(3) DEFAULT NULL,
  `Wyoming` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states_t`
--
ALTER TABLE `states_t`
  ADD PRIMARY KEY (`StateTableID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states_t`
--
ALTER TABLE `states_t`
  MODIFY `StateTableID` int(8) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
