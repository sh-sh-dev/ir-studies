-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 09:02 AM
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
-- Table structure for table `History`
--

CREATE TABLE IF NOT EXISTS `History` (
  `n` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `date` date NOT NULL
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
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Setting`
--

INSERT INTO `Setting` (`n`, `title`, `url`) VALUES
(1, 'ایران شناسی', 'http://localhost/ir-studies');

-- --------------------------------------------------------

--
-- Table structure for table `States`
--

CREATE TABLE IF NOT EXISTS `States` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `city_center` text COLLATE utf8_persian_ci NOT NULL,
  `Population` bigint(20) NOT NULL DEFAULT '0',
  `ins_sentense` text COLLATE utf8_persian_ci NOT NULL,
  `english` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `States`
--

INSERT INTO `States` (`n`, `name`, `city_center`, `Population`, `ins_sentense`, `english`, `description`) VALUES
(1, 'آذربایجان شرقی', '', 0, '', 'East-Azerbaijan', ''),
(2, 'آذربایجان غربی', '', 0, '', 'West-Azerbaijan', ''),
(3, 'اردبیل', '', 0, '', 'Ardabil', ''),
(4, 'اصفهان', '', 0, '', 'Isfahan', ''),
(5, 'البرز', '', 0, '', 'Alborz', ''),
(6, 'ایلام', '', 0, '', 'Ilam', ''),
(7, 'بوشهر', '', 0, '', 'Bushehr', ''),
(8, 'تهران', 'تهران', 0, '', 'Tehran', ''),
(9, 'چهار محال و بختیاری', '', 0, '', 'Chaharmahal-and-Bakhtiari', ''),
(10, 'خراسان جنوبی', '', 0, '', 'South-Khorasan', ''),
(11, 'خراسان رضوی', '', 0, '', 'Razavi-Khorasan', ''),
(12, 'خراسان شمالی', '', 0, '', 'North-Khorasan', ''),
(13, 'خوزستان', '', 0, '', 'Khuzestan', ''),
(14, 'زنجان', '', 0, '', 'Zanjan', ''),
(15, 'سمنان', '', 0, '', 'Semnan', ''),
(16, 'سیستان و بلوچستان', '', 0, '', 'Sistan-and-Baluchestan', ''),
(17, 'فارسی', '', 0, '', 'Fars', ''),
(18, 'قزوین', '', 0, '', 'Qazvin', ''),
(19, 'قم', '', 0, '', 'Qom', ''),
(20, 'کردستان', '', 0, '', 'Kurdistan', ''),
(21, 'کرمان', '', 0, '', 'Kerman', ''),
(22, 'کرمانشاه', '', 0, '', 'Kermanshah', ''),
(23, 'کهگیلویه و بویر احمد', '', 0, '', 'Kohgiluyeh-and-Boyer-Ahmad', ''),
(24, 'گلستان', '', 0, '', 'Golestan', ''),
(25, 'گیلان', '', 0, '', 'Gilan', ''),
(26, 'لرستان', '', 0, '', 'Lorestan', ''),
(27, 'مازندران', '', 0, '', 'Mazandaran', ''),
(28, 'مرکزی', '', 0, '', 'Markazi', ''),
(29, 'هرمزگان', '', 0, '', 'Hormozgan', ''),
(30, 'همدان', '', 0, '', 'Hamadan', ''),
(31, 'یزد', '', 0, '', 'Yazd', '');

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
-- Indexes for table `History`
--
ALTER TABLE `History`
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
-- AUTO_INCREMENT for table `History`
--
ALTER TABLE `History`
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
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `Wonderful_Places`
--
ALTER TABLE `Wonderful_Places`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
