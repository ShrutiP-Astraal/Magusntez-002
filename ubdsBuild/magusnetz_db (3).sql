-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2026 at 10:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magusnetz_db`
--
CREATE DATABASE IF NOT EXISTS `magusnetz_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `magusnetz_db`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `flag` tinyint(1) DEFAULT '0' COMMENT '0 = New, 1 = Contacted, 2 = Closed',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `flag`, `created_at`) VALUES
(1, 'Shruti Patil', 'jiaa1234@gmail.com', '8877667678', 'Seo', 'I am starting a new buisness i want a website for this', 0, '2026-02-25 07:50:57'),
(2, 'Shruti Patil', 'jiaa1234@gmail.com', '8877667678', 'Seo', 'I want to add seo to my website', 0, '2026-02-25 08:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `subscribed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('Active','Unsubscribed') COLLATE utf8mb4_general_ci DEFAULT 'Active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `subscribed_at`, `ip_address`, `status`) VALUES
(1, 'edje@ss.com', '2026-07-01 10:02:22', '::1', 'Active'),
(2, 'eddje@ss.com', '2026-07-01 10:03:20', '::1', 'Active'),
(3, 'eddjehb@ss.com', '2026-07-01 10:04:23', '::1', 'Active'),
(4, 'eddjehuhb@ss.com', '2026-07-01 10:05:00', '::1', 'Active'),
(5, 'eddjehhuhb@ss.com', '2026-07-01 10:05:20', '::1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `project_enquiries`
--

DROP TABLE IF EXISTS `project_enquiries`;
CREATE TABLE IF NOT EXISTS `project_enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `services` text COLLATE utf8mb4_general_ci,
  `budget` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `timeline` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reference` text COLLATE utf8mb4_general_ci,
  `features` text COLLATE utf8mb4_general_ci,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_enquiries`
--

INSERT INTO `project_enquiries` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `project_type`, `services`, `budget`, `timeline`, `website`, `reference`, `features`, `message`, `created_at`) VALUES
(1, 'Sunita', 'patil', 'shrutya1992@gmail.com', '06362245034', 'Astrall', 'LMS / EdTech Platform', 'Maintenance', '₹50,000+', 'Flexible', '', '', 'shuwswi', 'swu', '2026-04-13 04:08:26'),
(2, 'Sunita', 'patil', 'shrutya1992@gmail.com', '06362245034', 'Astrall', 'LMS / EdTech Platform', 'Maintenance', '₹50,000+', 'Flexible', '', '', 'shuwswi', 'swu', '2026-04-13 04:11:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
