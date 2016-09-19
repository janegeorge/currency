-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 11:53 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirfkeval`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `countryname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `countryname`) VALUES
(1, 'India'),
(2, 'Ireland');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `currency_id` int(11) NOT NULL,
  `currency` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`currency_id`, `currency`) VALUES
(1, 'EUR'),
(2, 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `USERID` int(11) NOT NULL,
  `CURRENCYFROM` varchar(200) DEFAULT NULL,
  `CURRENCYTO` varchar(200) DEFAULT NULL,
  `AMOUNTBUY` int(11) DEFAULT NULL,
  `RATE` int(11) DEFAULT NULL,
  `TIMEPLACED` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ORGINATINGCOUNTRY` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`USERID`, `CURRENCYFROM`, `CURRENCYTO`, `AMOUNTBUY`, `RATE`, `TIMEPLACED`, `ORGINATINGCOUNTRY`) VALUES
(1, 'EUR', 'ALL', 6665544, 88865, '2016-09-18 16:41:18', 'India'),
(2, 'EUR', 'ALL', 66655, 887766, '2016-09-18 16:44:14', 'India'),
(3, 'EUR', 'ALL', 766, 8887, '2016-09-18 16:48:16', 'India'),
(4, 'EUR', 'ALL', 9876655, 766588, '2016-09-18 16:50:29', 'India'),
(5, 'EUR', 'ALL', 77776, 66555, '2016-09-18 16:51:56', 'India'),
(6, 'EUR', 'EUR', 664, 345, '2016-09-18 17:10:59', 'India'),
(7, 'EUR', 'ALL', 7564, 87664, '2016-09-18 17:36:39', 'India'),
(8, 'EUR', 'ALL', 876, 6544, '2016-09-18 18:09:17', 'India'),
(9, 'EUR', 'ALL', 87665, 8765, '2016-09-18 21:58:49', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `first_name`, `last_name`, `user_name`, `password`, `email`, `phone`) VALUES
(1, 'jane susa', 'george', 'jane', '5844a15e76563fedd11840fd6f40ea7b', 'janesusa7@gmail.com', 976808765);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
