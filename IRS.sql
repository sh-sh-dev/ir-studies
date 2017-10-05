-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2017 at 02:24 PM
-- Server version: 5.6.31
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IRS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Heroes`
--

CREATE TABLE IF NOT EXISTS `Heroes` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pics`
--

CREATE TABLE IF NOT EXISTS `Pics` (
  `n` int(11) NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Setting`
--

CREATE TABLE IF NOT EXISTS `Setting` (
  `n` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Setting`
--

INSERT INTO `Setting` (`n`, `title`) VALUES
(1, 'ایران شناسی');

-- --------------------------------------------------------

--
-- Table structure for table `States`
--

CREATE TABLE IF NOT EXISTS `States` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `english` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `States`
--

INSERT INTO `States` (`n`, `name`, `english`, `description`) VALUES
(1, 'آذربایجان شرقی', 'azarbayjansharghi', ''),
(2, 'آذربایجان غربی', 'azarbayjangharbi', ''),
(3, 'اردبیل', 'ardebil', ''),
(4, 'اصفهان', 'esfehan', ''),
(5, 'ایلام', 'ilam', ''),
(6, 'بوشهر', 'booshehr', '');

-- --------------------------------------------------------

--
-- Table structure for table `Wonderful_Places`
--

CREATE TABLE IF NOT EXISTS `Wonderful_Places` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Heroes`
--
ALTER TABLE `Heroes`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `Pics`
--
ALTER TABLE `Pics`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `Setting`
--
ALTER TABLE `Setting`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `States`
--
ALTER TABLE `States`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `Wonderful_Places`
--
ALTER TABLE `Wonderful_Places`
  ADD PRIMARY KEY (`n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Heroes`
--
ALTER TABLE `Heroes`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Pics`
--
ALTER TABLE `Pics`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Setting`
--
ALTER TABLE `Setting`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `States`
--
ALTER TABLE `States`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
