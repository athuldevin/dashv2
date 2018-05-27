-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 04:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malanad_tyres`
--
CREATE DATABASE IF NOT EXISTS `malanad_tyres` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `malanad_tyres`;

-- --------------------------------------------------------

--
-- Table structure for table `sails`
--

CREATE TABLE `sails` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHNO` int(11) NOT NULL,
  `VEHICLENO` varchar(20) NOT NULL,
  `TNAME` varchar(25) NOT NULL,
  `SIZE` int(11) NOT NULL,
  `SERIALNO` varchar(25) NOT NULL,
  `DATE` date NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `SELLING_PRICE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `sails`
--
DELIMITER $$
CREATE TRIGGER `new_update` BEFORE INSERT ON `sails` FOR EACH ROW UPDATE stock
   set stock.QTY = stock.QTY-NEW.QTY
   where SERIALNO = new.SERIALNO
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `SIZE` int(11) NOT NULL,
  `SERIALNO` varchar(25) NOT NULL,
  `DATE` date NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `MRP` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NAME`, `PASSWORD`) VALUES
('ADMIN', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sails`
--
ALTER TABLE `sails`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sails`
--
ALTER TABLE `sails`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
