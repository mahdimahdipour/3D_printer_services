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
-- Database: `myadmin`
--

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
('ادمین اصلی', 'ادمین وب', 'ادمین', 'admin'),
('ادمین 2', 'ادمین وب', 'ادمین', 'admin'),
('1234', '', 'مسیح', 'user'),
('1234', 'محمد', 'ممم', 'user'),
('12222', 'محمد', '00000', 'user'),
('ادمین اصلی', 'ادمین وب', 'ادمین', 'user'),
('24685', 'سید محمد صالح نوریان', 'صالح', 'user'),
('1390', 'سید امیر علی حسینی', 'امیر علی', 'user');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone_number`, `first_name`, `last_name`, `print_method`, `filament`, `accuracy`, `density`, `surface_finish`, `additional_comments`) VALUES
(32, '+9809307505656', 'ناهید', 'کاوسی', 'fdm', 'pla', 150, 20, '', ''),
(33, '+9809136223720', 'مسیح', 'مهدی پور', 'fdm', 'pla', 150, 20, '', ''),
(34, '+9809307505656', 'ناهید', 'کاوسی', 'fdm', 'pla', 150, 20, '', ''),
(38, '+9809136223720', 'مهدی', 'کاوسی', 'fdm', 'pla', 150, 20, '', ''),
(36, '+9809136223720', 'مهدی', 'کاوسی', 'fdm', 'pla', 150, 20, '', ''),
(39, '+9809136223720', 'مهدی', 'مهدی پور', 'fdm', 'pla', 150, 20, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
