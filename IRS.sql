-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 07:01 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `Heroes`
--

INSERT INTO `Heroes` (`n`, `name`, `description`, `fstate`, `active`) VALUES
(1, 'سیدعلی آقا قاضی تبریزی', 'حاج سید علی آقا قاضی فرزند حاج سید حسین قاضی، پس از تحصیل علوم ادبی و دینی در تبریز، در سن 28 سالگی به نجف اشرف مشرف شد و تا آخر عمر آن جا را موطن اصلی خویش قرار داد. او پس از اقامت در نجف اشرف، تحصیلات حوزوی خود را نزد اساتیدی از جمله فاضل شربیانی، شیخ محمد مامقانی، شیخ فتح الله شریعت، آخوند خراسانی و... ادامه داد و سرانجام کوشش های خستگی ناپذیرش در راه کسب علم، کمال و دانش، در سن 27 سالگی به ثمر نشست و این جوان بلند همت در عنفوان جوانی به درجه اجتهاد رسید. میرزا علی آقا قاضی پس از سال‌ها تدریس معارف اسلامی، در روز دوشنبه چهارم ماه ربیع المولود سال 1366 قمری مطابق هفتم بهمن ماه در نجف اشرف وفات کرد و در وادی السلام نزد پدر خود دفن شد.', 1, 1),
(2, 'علامه عبدالحسین امینی', 'شيخ عبدالحسين امينی در اوان جوانی و زمانی که هنوز چند دهه باقی بود تا کتاب "الغدير" را به رشته تحرير درآورد، از علمای بزرگ و مراجع رده اول اجازه اجتهاد و اجازه روايت دريافت داشت. او در پاکی عمل و اخلاق اسلامی و صلاح نفس نيز عالمی بود برجسته و ربانی که کمتر کسی بدين مرحله رسيده است. علامه بزرگ سفرهای بسياری انجام داد و در اين سفرها حقايق شيعه را باز می گفت و در پی ايجاد يک اتحاد واقعی و راستين بين مسلمانان بود و چيزی که او را در اين کار بسيار ياری می رساند خطابت و سخنرانی بی نظير او بود. يکی از عمده‌ترين دلائل تأليف کتاب "الغدير" ارادت علامه به علی بن ابيطالب(ع) بود او شيفته دريای بيکران ولايت بود و چنان در اين دريای بيکران غوطه ور شد که خيال و اهداف ديگری برايش باقی نماند.', 1, 1),
(3, 'شهید مهدی باکری', 'مهدی باکری در سال ۱۳۳۳ در میاندوآب و در خانواده‌ای مذهبی به دنیا آمد. در همان آغاز کودکی مادرش را از دست داد. او و دوستانش نقش مهمی در برپایی تظاهرات شهر تبریز در ۱۵ خرداد ۱۳۵۴ و ۱۳۵۵ داشتند. همان زمان وی توسط ساواک شناسایی شد و بارها برای بازجویی و تحت نظر آزاد شد. پس از اخذ دیپلم وارددانشگاه تبریز شد و در رشته مهندسی مکانیک شروع به تحصیل کرد. در حین تحصیل خبر مرگ برادرش، علی باکری را به وی دادند. بدین ترتیب او دومین عضو خانواده خویش را نیز از دست داد.', 2, 1),
(4, 'شهید حمید باکری', 'از فرماندهان سپاه پاسداران انقلاب اسلامی در جنگ ایران وعراق و برادرعلی باکری ومهدی باکری بود. وی درعملیات خیبر در اثر اصابت آرپی جی کشته شد. پیکر او در میدان جنگ باقی ماند و به کشور بازگردانده نشد.', 2, 1),
(5, 'پوریا ولی', 'راد مردی که بعد از عمری بر خاک نشاندن پهلوانان و قهرمان در کشورهای مختلف سرانجام با بر زمین زدن نفس خویش به عرفان رسید و جاودانه شد. طبق محاسبه مورخان روس، در ۲۳ ژوئیه سال ۱۳۲۲ میلادی مطابق با ۷۲۲ هجری قمری اول مرداد ماه روی در نقاب خاک کشید و به سرای باقی شتافت. با توجه به اینکه این پهلوان نامی و عارف بزرگ و شاعر مردمی نسبت از خوی می برد و در همین خاک به لقای الهی رسید. باید مراسمی درخور شخصیتش برگزار کرد. به همین سبب از هم اکنون تاریخ فوت وی را یادآور می شویم تا دست اندرکاران بخصوص متولیان فرهنگی و ورزشی شهرمان از هم اینک به فکر برگزاری مراسم پرشکوه باشند.', 2, 1),
(6, 'رحیم مؤذن زاده', 'مرحوم رحیم مؤذن زاده اردبیلی در سال 1303 در اردبیل به دنیا آمد . پدرش شیخ عبدالکریم بسیار خوش صدا ، خوش خلق و آشنا به ردیفهای موسیقی بود . شیخ عبدالکریم در سال 1326 از رادیو اذان گفت و بعد از آن ، پسرش رحیم نیز با او همراه شد . اذان ماندگان رحیم مؤذن زاده در دستگاه بیات ترک گوشه روح الارواح اجرا شده است .', 3, 1),
(7, 'علی دایی', 'علی دایی متولد اول فروردین سال 1348 در شهر اردبیل و بازیکن ایرانی و از مشهورترین بازیکنان تاریخ تیم ملی فوتبال ایران است و تا پایان جام جهانی 2006 بازیکن اصلی و کاپیتان تیم ملی ایران بود . دایی 109 گل ملی در کارنامه خود دارد و با فاصله زیادی ، بهترین گلزن بازیهای ملی در تاریخ فوتبال جهان است . دایی سابقه بازی در تیمهای آلمانی همچون بایرن مونیخ را دارد و به همراه این تیم به نایب قهرمانی جام باشگاههای اروپا دست یافته است . دایی فوتبال را از باشگاههای کوچک شهر اردبیل همچون استقلال اردبیل ، شهرداری اردبیل آغاز کرد و دوره خدمت وظیفه را در تیم پاس گذراند . سپس به تیم بانک تجارت پیوست و از آنجا به تیم ملی دعوت شد . بعدها به تیم پرسپولیس تهران و السد قطر پیوست و سرانجام راهی اروپا شد و به تیم آرمینیا بیله فیلد آلمان پیوست . مقصد بعدی او بایرن مونیخ آلمان بود . سپس بههرتابرلین پیوست . علی دایی همچنین توانست تیم سایپا را قهرمان ششمین لیگ برتر کشور سازد . علی دایی در زمینه تحصیلی نیز همچون فرد موفقی بوده و لیسانس خود را در رشته متالوژی از دانشگاه صنعتی شریف دریافت نموده است و علاوه بر آن در تجارت نیز موفق بوده است . وی گرداننده چندین شرکت بزرگ و رستورانهای متعدد است . علی دایی همراه با مادلین آلبرایت  و  دیوید بکام  با سازمان  یونیسف همکاری داشته اند . نامبرده دارای تابعیت دوگانه ایرانی و آمریکایی است.', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `History`
--

CREATE TABLE IF NOT EXISTS `History` (
  `n` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `date` text COLLATE utf8_persian_ci NOT NULL,
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
(8, 'تهران', 'تهران', 13267637, 'ما میترکونیمشون :)', 'Tehran', 'سیاهه نارقیله', 1),
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
(1, 'آرامگاه سعدی', 'آرامگاه سعدی معروف به سعدیه محل زندگی و دفن سعدی، شاعر برجستهٔ پارسی‌گوی است.<br><br>این آرامگاه در انتهای خیابان بوستان و کنار باغ دلگشا در دامنهٔ کوه در شمال شرق شیراز قرار دارد. در اطراف مقبره، قبور زیادی از بزرگان دین وجود دارند که بنا به وصیت خود، در آنجا مدفون شده‌اند. از جمله مهمترین‌های آن می‌توان شوریده شیرازی را نام برد که آرامگاهش به وسیله رواق به آرامگاه سعدی متصل شده‌است', 17, 1),
(2, 'آبشار مارگون', 'آبشار مارگون (انگلیسی: Margoon Waterfall) یکی از زیباترین آبشارهای کشور ایران می‌باشد و در شهرستان سپیدان استان فارس، دهستان مارگون واقع گردیده است. این آبشار در حقیقت سرچشمه رودخانه است و در بالای کوه هیچ رودخانه‌ای نیست، بلکه از بدنه دیواره صخره‌ای کوه، بیش از چند هزار چشمه وجود دارد که آب از آنها به بیرون ریخته می‌شود. از این حیث این آبشار هم بزرگترین و هم مرتفع‌ترین آبشار چشمه‌ای در جهان است.', 17, 1);

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
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
