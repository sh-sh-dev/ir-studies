-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 12:30 PM
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
-- Table structure for table `Facts`
--

CREATE TABLE IF NOT EXISTS `Facts` (
  `n` int(11) NOT NULL,
  `location` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `icon` text COLLATE utf8_persian_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Facts`
--

INSERT INTO `Facts` (`n`, `location`, `description`, `icon`, `active`) VALUES
(1, 'اندیمشک', '   تنها شهر دارای سه سد جهانی در ایران', 'flash_on', 1),
(2, 'پاوه', 'شهری بدون حتی یک چراغ قرمز!', 'traffic', 1),
(3, 'چالدران', 'شهر بدون کولر!', 'ac_unit', 1),
(4, 'اردکان', 'پولدارترین و مرفه ترین شهر ایران', 'monetization_on', 1),
(5, 'فردوس', 'امن ترین شهر ایران و دومین شهر جهان!', 'security', 1),
(6, 'تبریز', 'شهر بدون گدا', 'money_off', 1),
(7, 'نورآباد ممسنی', 'شهری که 18% جمعیتش دانشجو است!', 'school', 1),
(8, 'بروجرد', 'خوشگذران ترین مردم ایران!', 'insert_emoticon', 1),
(9, 'کیش', 'شهر بدون موتورسیکلت!', 'motorcycle', 1),
(10, 'شادگان', 'شهر بدون هتل و مسافر خانه!', 'hotel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Heroes`
--

CREATE TABLE IF NOT EXISTS `Heroes` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `History`
--

CREATE TABLE IF NOT EXISTS `History` (
  `n` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `date` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pics`
--

CREATE TABLE IF NOT EXISTS `Pics` (
  `n` int(11) NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
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
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `States`
--

INSERT INTO `States` (`n`, `name`, `city_center`, `Population`, `ins_sentense`, `english`, `description`, `active`) VALUES
(1, 'آذربایجان شرقی', 'تبریز', 3909652, '', 'East-Azerbaijan', '', 1),
(2, 'آذربایجان غربی', 'ارومیه', 3265219, '', 'West-Azerbaijan', '', 1),
(3, 'اردبیل', 'اردبیل', 1270420, '', 'Ardabil', '', 1),
(4, 'اصفهان', 'اصفهان', 5120850, '', 'Isfahan', '', 1),
(5, 'البرز', 'کرج', 2712400, '', 'Alborz', '', 1),
(6, 'ایلام', 'ایلام', 580158, '', 'Ilam', '', 1),
(7, 'بوشهر', 'بندر بوشهر', 1163400, '', 'Bushehr', '', 1),
(8, 'تهران', 'تهران', 13267637, '', 'Tehran', '', 1),
(9, 'چهار محال و بختیاری', 'شهرکرد', 947763, '', 'Chaharmahal-and-Bakhtiari', '', 1),
(10, 'خراسان جنوبی', 'بیرجند', 768989, '', 'South-Khorasan', '', 1),
(11, 'خراسان رضوی', 'مشهد', 6434501, '', 'Razavi-Khorasan', '', 1),
(12, 'خراسان شمالی', 'بجنورد', 863092, '', 'North-Khorasan', '', 1),
(13, 'خوزستان', 'اهواز', 4710509, '', 'Khuzestan', '', 1),
(14, 'زنجان', 'زنجان', 1057461, '', 'Zanjan', '', 1),
(15, 'سمنان', 'سمنان', 702360, '', 'Semnan', '', 1),
(16, 'سیستان و بلوچستان', 'زاهدان', 2775014, '', 'Sistan-and-Baluchestan', '', 1),
(17, 'فارس', 'شیراز', 4851274, '', 'Fars', '', 1),
(18, 'قزوین', 'قزوین', 1273761, '', 'Qazvin', '', 1),
(19, 'قم', 'قم', 1292283, '', 'Qom', '', 1),
(20, 'کردستان', 'سنندج', 1603011, '', 'Kurdistan', '', 1),
(21, 'کرمان', 'کرمان', 3283582, '', 'Kerman', '', 1),
(22, 'کرمانشاه', 'کرمانشاه', 3164718, '', 'Kermanshah', '', 1),
(23, 'کهگیلویه و بویر احمد', 'یاسوج', 713052, '', 'Kohgiluyeh-and-Boyer-Ahmad', '', 1),
(24, 'گلستان', 'گرگان', 1868819, '', 'Golestan', '', 1),
(25, 'گیلان', 'رشت', 2530696, '', 'Gilan', '', 1),
(26, 'لرستان', 'خرم آباد', 1760649, '', 'Lorestan', '', 1),
(27, 'مازندران', 'ساری', 3283582, '', 'Mazandaran', '', 1),
(28, 'مرکزی', 'اراک', 1429475, '', 'Markazi', '', 1),
(29, 'هرمزگان', 'بندر عباس', 1776415, '', 'Hormozgan', '', 1),
(30, 'همدان', 'همدان', 1738234, '', 'Hamadan', '', 1),
(31, 'یزد', 'یزد', 1138533, '', 'Yazd', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Wonderful_Places`
--

CREATE TABLE IF NOT EXISTS `Wonderful_Places` (
  `n` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `fstate` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Wonderful_Places`
--

INSERT INTO `Wonderful_Places` (`n`, `name`, `description`, `fstate`, `active`) VALUES
(1, 'آبشار مارگون', 'آبشار مارگون (انگلیسی: Margoon Waterfall) یکی از زیباترین آبشارهای کشور ایران می‌باشد و در شهرستان سپیدان استان فارس، دهستان مارگون واقع گردیده است. این آبشار در حقیقت سرچشمه رودخانه است و در بالای کوه هیچ رودخانه‌ای نیست، بلکه از بدنه دیواره صخره‌ای کوه، بیش از چند هزار چشمه وجود دارد که آب از آنها به بیرون ریخته می‌شود. از این حیث این آبشار هم بزرگترین و هم مرتفع‌ترین آبشار چشمه‌ای در جهان است.', 17, 1),
(2, 'آرامگاه سعدی', 'مگاه سعدی معروف به سعدیه محل زندگی و دفن سعدی، شاعر برجستهٔ پارسی‌گوی است.\r\n\r\nاین آرامگاه در انتهای خیابان بوستان و کنار باغ دلگشا در دامنهٔ کوه در شمال شرق شیراز قرار دارد. در اطراف مقبره، قبور زیادی از بزرگان دین وجود دارند که بنا به وصیت خود، در آنجا مدفون شده‌اند. از جمله مهمترین‌های آن می‌توان شوریده شیرازی را نام برد که آرامگاهش به وسیله رواق به آرامگاه سعدی متصل شده‌است.', 17, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Facts`
--
ALTER TABLE `Facts`
  ADD PRIMARY KEY (`n`);

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
-- AUTO_INCREMENT for table `Facts`
--
ALTER TABLE `Facts`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
