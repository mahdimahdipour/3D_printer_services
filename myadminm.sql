-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2025 at 07:09 AM
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
-- Database: `myadminm`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
