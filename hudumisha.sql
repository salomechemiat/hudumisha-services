-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 10:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hudumisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `idno` int(32) NOT NULL,
  `phone` int(32) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `emp_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `idno` int(32) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(32) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(32) NOT NULL,
  `category` varchar(250) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`firstname`, `lastname`, `idno`, `dob`, `phone`, `email`, `password`, `category`, `userid`) VALUES
('Stacy', 'Omwando', 345678, '0000-00-00', 702987866, 'annaalice82@gmail.com', '$2y$10$95qdW1Qj3MerL/J1HC78Be59Z', '1', 1),
('Salome', 'Chemiat', 456789, '1997-08-17', 799664981, 'sally@gmail.com', '$2y$10$ZKh.uS2mx01wl7khPPTnHOz7z', '1', 2),
('Naftal', 'Kulukulu', 3456, '1997-06-26', 711601572, 'nkulukulu@gmail.com', '$2y$10$uHkvG2G73xF4MQGOaezKBOqWJ', 'customer', 3),
('Lisa', 'Maria', 12345, '2005-03-21', 70212345, 'lmaria@gmail.com', '$2y$10$NMJrHo0y6XZrh0Tk2fc/h.QcM', 'customer', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
