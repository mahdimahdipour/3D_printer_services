-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2025 at 09:48 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images_page1`
--

DROP TABLE IF EXISTS `images_page1`;
CREATE TABLE IF NOT EXISTS `images_page1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images_page1`
--

INSERT INTO `images_page1` (`id`, `filename`, `description`) VALUES
(20, '1614593331569.png', 'بانک فایل های سه بعدی'),
(21, '3d-printer-with-futuristic-effect.jpg', 'سفارش خدمات آنلاین'),
(22, 'su1.png', 'نمونه کار های ما');

-- --------------------------------------------------------

--
-- Table structure for table `images_page2`
--

DROP TABLE IF EXISTS `images_page2`;
CREATE TABLE IF NOT EXISTS `images_page2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images_page2`
--

INSERT INTO `images_page2` (`id`, `filename`, `description`) VALUES
(21, '8A9E4398-42AA-4989-AD4A-519BE0EC9F4D1-ezgif.com-video-to-webp-converter.webp', 'فرفره'),
(20, 'image.png', 'کشتی'),
(19, 'Annotation 2025-04-09 184010.png', 'گل'),
(22, 'Y_8F3.png', 'هشت پا'),
(23, 'ERKX2019121621073801.png', 'هواپیما جنگی');

-- --------------------------------------------------------

--
-- Table structure for table `images_page3`
--

DROP TABLE IF EXISTS `images_page3`;
CREATE TABLE IF NOT EXISTS `images_page3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images_page3`
--

INSERT INTO `images_page3` (`id`, `filename`, `description`) VALUES
(4, '3dbackground3.jpg', 'طراحی');

-- --------------------------------------------------------

--
-- Table structure for table `images_page4`
--

DROP TABLE IF EXISTS `images_page4`;
CREATE TABLE IF NOT EXISTS `images_page4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images_page4`
--

INSERT INTO `images_page4` (`id`, `filename`, `description`) VALUES
(4, 'photo_۲۰۲۴-۱۲-۱۲_۱۸-۵۹-۳۹.png', 'موشک کامل'),
(3, 'png (1).png', 'نیمی از پوسته ی موشک'),
(5, '20250411_181918_1092428530.png', 'گل گیر موتور وسپا');

-- --------------------------------------------------------

--
-- Table structure for table `noora 3d`
--

DROP TABLE IF EXISTS `noora 3d`;
CREATE TABLE IF NOT EXISTS `noora 3d` (
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT 'admin'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `noora 3d`
--

INSERT INTO `noora 3d` (`password`, `name`, `username`, `role`) VALUES
('adminnoora3d!@#$', 'adminernoora', 'adminer', 'admin'),
('adminnoora3d!@#$', 'adminernoora', 'adminer', 'admin'),
('1234', '', 'مسیح', 'user'),
('1234', 'محمد', 'ممم', 'user'),
('12222', 'محمد', '00000', 'user'),
('ادمین اصلی', 'ادمین وب', 'ادمین', 'user'),
('24685', 'سید محمد صالح نوریان', 'صالح', 'user'),
('1390', 'سید امیر علی حسینی', 'امیر علی', 'user'),
('1234', 'محمد', 'مهدی', 'user'),
('12345', 'بهنام', 'کودرزی', 'user'),
('1234', 'iliv', 'ali', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `print_method` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `filament` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `accuracy` int DEFAULT NULL,
  `density` int DEFAULT NULL,
  `surface_finish` text COLLATE utf8mb4_persian_ci,
  `additional_comments` text COLLATE utf8mb4_persian_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `print_method` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `filament` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `accuracy` int DEFAULT NULL,
  `density` int DEFAULT NULL,
  `surface_finish` text COLLATE utf8mb4_persian_ci,
  `additional_comments` text COLLATE utf8mb4_persian_ci,
  `uploaded_file` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone_number`, `first_name`, `last_name`, `print_method`, `filament`, `accuracy`, `density`, `surface_finish`, `additional_comments`, `uploaded_file`) VALUES
(88, '+9809037014028', 'مسیح', 'مهدی پور', 'fdm', 'pla', 150, 20, 'بدون پرداخت, پولیش (صرفا برای ABS), رنگ آمیزی حرفه ای', 'صورتی', 'uploads/680e649a42e6a_شمالی ها.docx'),
(91, '+9809037014028', 'مهدی', 'مهدی پور', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, '+9809136223720', 'مهدی', 'مهدی پور', 'fdm', 'pla', 150, 20, '', '', 'uploads/680e637bd1494_فایل1ـــ جلسات ذیل آیات 1 و 2 برای عنوانگذاری 4031218.docx'),
(87, '+9809131310705', 'محمدرضا', 'مهدی پور', 'fdm', 'pla', 150, 20, '', '', 'uploads/680e64566d4ef_فایل1ـــ جلسات ذیل آیات 1 و 2 برای عنوانگذاری 4031218.docx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
