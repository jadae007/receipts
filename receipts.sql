-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 09:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receipts`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(4) NOT NULL,
  `listId` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amountMonth10` double(10,2) DEFAULT NULL,
  `amountMonth11` double(10,2) DEFAULT NULL,
  `amountMonth12` double(10,2) DEFAULT NULL,
  `amountMonth1` double(10,2) DEFAULT NULL,
  `amountMonth2` double(10,2) DEFAULT NULL,
  `amountMonth3` double(10,2) DEFAULT NULL,
  `amountMonth4` double(10,2) DEFAULT NULL,
  `amountMonth5` double(10,2) DEFAULT NULL,
  `amountMonth6` double(10,2) DEFAULT NULL,
  `amountMonth7` double(10,2) DEFAULT NULL,
  `amountMonth8` double(10,2) DEFAULT NULL,
  `amountMonth9` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(4) NOT NULL,
  `titleId` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amountMonth10` double(10,2) DEFAULT NULL,
  `amountMonth11` double(10,2) DEFAULT NULL,
  `amountMonth12` double(10,2) DEFAULT NULL,
  `amountMonth1` double(10,2) DEFAULT NULL,
  `amountMonth2` double(10,2) DEFAULT NULL,
  `amountMonth3` double(10,2) DEFAULT NULL,
  `amountMonth4` double(10,2) DEFAULT NULL,
  `amountMonth5` double(10,2) DEFAULT NULL,
  `amountMonth6` double(10,2) DEFAULT NULL,
  `amountMonth7` double(10,2) DEFAULT NULL,
  `amountMonth8` double(10,2) DEFAULT NULL,
  `amountMonth9` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(4) NOT NULL,
  `no` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toTitle` (`titleId`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `toTitle` FOREIGN KEY (`titleId`) REFERENCES `titles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
