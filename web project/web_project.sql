-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 01:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web project`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`name`, `email`, `PhoneNo`, `subject`, `message`) VALUES
('moniara', 'moniara15-896@diu.edu.bd', 1983734750, 'website', 'good'),
('', '', 0, '', ''),
('reshma', 'resh15@gamil.com', 2147483647, 'train', ''),
('moni', 'moni15-896@diu.edu.bd', 2147483647, 'train', ''),
('sharmin', 'moni15-896@diu.edu.bd', 2147483647, 'website', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `mmmm`
--

CREATE TABLE `mmmm` (
  `tttttt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mmm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ggg` int(11) NOT NULL,
  `jjj` int(11) NOT NULL,
  `njj` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mmmm`
--

INSERT INTO `mmmm` (`tttttt`, `mmm`, `ggg`, `jjj`, `njj`) VALUES
('chattala', 'dhaka-comilla', 10, 200, 'friday'),
('chattala', 'dhaka-comilla', 10, 200, 'friday'),
('chattala', 'dhaka-comilla', 10, 200, 'friday');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Title`, `Type`) VALUES
('chottola', 'Intercity Train'),
('', ''),
('mahanagar', 'Intercity Train'),
('mb', 's'),
('mahanagar', 'Intercity Train'),
('mahanagar', 'Intercity Train'),
('', ''),
('', ''),
('', ''),
('', ''),
('mahanagar', 'Intercity Train'),
('mahanagar', 'Intercity Train');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `UserName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UserName`, `Age`, `Email`, `Password`, `Phone`) VALUES
('moniara', 18, 'moniara15-896@diu.edu.bd', '123', 1962796006),
('moni', 12, 'moni15-896@diu.edu.bd', '44', 1962796006),
('sharmin', 22, 'sharmin15-875@diu.edu.bd', '123', 1962796006),
('', 0, 'moniara15-896@diu.edu.bd', '', 0),
('reshma', 22, 'sharmin15-875@diu.edu.bd', '999', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `tname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `st` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `off` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tname`, `ft`, `st`, `fare`, `off`) VALUES
('chottala', 'dhaka', 12, 200, 'friday'),
('chottala', 'dhaka', 12, 200, 'friday'),
('chottala', 'dhaka', 12, 200, 'friday'),
('chottala', 'dhaka', 12, 200, 'friday'),
('chottala', 'dhaka-bbaria', 12, 200, 'friday'),
('chottala', 'dhaka-bbaria', 12, 200, 'friday'),
('chottala', 'dhaka-bbaria', 12, 200, 'friday'),
('chottala', 'dhaka', 12, 200, 'friday');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
