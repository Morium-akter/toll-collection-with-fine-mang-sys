-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 07:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toll`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridge_1`
--

CREATE TABLE `bridge_1` (
  `Vehicle_no` varchar(50) NOT NULL,
  `Bridge_no` varchar(50) NOT NULL,
  `Vehicle_type` varchar(50) NOT NULL,
  `Deposit_amount` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Due` varchar(50) NOT NULL,
  `Total_amnt` varchar(50) NOT NULL,
  `Tk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bridge_1`
--

INSERT INTO `bridge_1` (`Vehicle_no`, `Bridge_no`, `Vehicle_type`, `Deposit_amount`, `Date`, `Due`, `Total_amnt`, `Tk`) VALUES
('2', '1', 'car', '200', '10-2-19', '', '50', '50'),
('5', '1', 'car', '100', '10-2-19', '', '', '50');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `car` varchar(50) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `track` varchar(50) NOT NULL,
  `bike` varchar(50) NOT NULL,
  `CNG` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`car`, `bus`, `track`, `bike`, `CNG`, `others`) VALUES
('50', '80', '100', '20', '40', '20');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE `temporary` (
  `No` varchar(50) NOT NULL,
  `Deposit_amount` varchar(50) NOT NULL,
  `Due` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporary`
--

INSERT INTO `temporary` (`No`, `Deposit_amount`, `Due`) VALUES
('1', '50', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridge_1`
--
ALTER TABLE `bridge_1`
  ADD PRIMARY KEY (`Vehicle_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
