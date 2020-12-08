-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 10:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeerecords`
--

CREATE TABLE `employeerecords` (
  `eid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeerecords`
--

INSERT INTO `employeerecords` (`eid`, `username`, `password`, `Name`) VALUES
(2, 'puneet', 'sahni', 'Puneet');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecord`
--

CREATE TABLE `patientrecord` (
  `pid` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `refDoctor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`pid`, `firstName`, `lastName`, `gender`, `DOB`, `address`, `city`, `province`, `postalCode`, `phone`, `email`, `medication`, `allergies`, `refDoctor`) VALUES
(1271, 'Jos', 'Buttler', 'Male', '2006-10-04', '3188 Jinnies Way', 'LONDON', 'Ontario', 'N6L 0B5', '5489685688', 'jos@yahoo.com', 'medication1,medication3', 'allergey, sun,', 'Jacob'),
(3434, 'Puneet', 'Sahni', 'Female', '1995-10-01', 'Street 7', 'London', 'Ontario', 'N5V0A2', '5483881787', 'puneet@gmail.com', 'aaa,bbb,ggg', 'dummy1,dumm2', 'Steve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeerecords`
--
ALTER TABLE `employeerecords`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `patientrecord`
--
ALTER TABLE `patientrecord`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeerecords`
--
ALTER TABLE `employeerecords`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
