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
-- Table structure for table `candidates_t`
--

CREATE TABLE `candidates_t` (
  `CandidatesID` int(11) NOT NULL,
  `Candidate1` varchar(64) NOT NULL,
  `Candidate2` varchar(64) DEFAULT NULL,
  `Candidate3` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates_t`
--

INSERT INTO `candidates_t` (`CandidatesID`, `Candidate1`, `Candidate2`, `Candidate3`) VALUES
(1, 'Donald J. Trump', 'Hillary R. Clinton', 'Gary E. Johnson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates_t`
--
ALTER TABLE `candidates_t`
  ADD PRIMARY KEY (`CandidatesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates_t`
--
ALTER TABLE `candidates_t`
  MODIFY `CandidatesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
