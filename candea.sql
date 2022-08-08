-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 01:01 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `candea`
--
CREATE DATABASE IF NOT EXISTS `candea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `candea`;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `name` varchar(50) NOT NULL,
  `adress` varchar(40) NOT NULL,
  `tp` int(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`name`, `adress`, `tp`, `password`) VALUES
('', '', 0, ''),
('Aravinda', 'Kandy', 771234567, 'aravinda'),
('dinithi', 'kandy', 223, '123'),
('dsvs', 'dvsdv', 0, 'dvsvd'),
('kaveen', 'colombo', 716870257, '123'),
('malinda', 'kandy', 772222222, '123'),
('nuwan', 'kandy', 756040289, '123'),
('sss', 'no 12,kandy', 775372100, '111');

-- --------------------------------------------------------

--
-- Table structure for table `od`
--

CREATE TABLE IF NOT EXISTS `od` (
  `name` varchar(50) NOT NULL,
  `itemno` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `od`
--

INSERT INTO `od` (`name`, `itemno`, `Telephone`, `Address`) VALUES
('kv', 'fghj', 'aravinda', '123'),
('kv', 'fghj', 'aravinda', '123'),
('kaveen', '2', 'aravinda', 'aravinda'),
('kavidu', '002', 'aravinda', 'aravinda'),
('pubudu', 'sand011', '232242', 'ffssf44'),
('nuwan', '003', '0123654789', 'kandy'),
('kavindu', 'sand11', '0772425777', 'kandy'),
('sss', '4TB96UT#ABA', '0775372100', 'no 12,jjj'),
('nuwan', 'sand11', '0123654789', 'colombo'),
('malinda', '4TB96UT#ABA ', '0772222222', 'kandy'),
('dinithi', 'X3U18AV_MB', '0772222222', 'kandy');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `name` varchar(50) NOT NULL,
  `itemno` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






 /*   "insert into cart values('$name','$itemNo','$price1')"; */