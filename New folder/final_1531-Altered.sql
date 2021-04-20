-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 09:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `products_id` int(4) UNSIGNED NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`products_id`, `prod_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, 'img/Day_Night-8-MP-WIFISecurityCamera.jpg', 'Surveillance', 'Day/Night 8 MP WIFI Security Camera', '349.99'),
(2, 'img/1080p-Outdoor-Smart-Wi-FiSecurityCamera-with-Three-NightVisionModes.jpg', 'Surveillance', '1080p Outdoor Smart Wi-Fi Security Camera with Three Night Vision Modes', '131.97'),
(3, 'img/surveillance-camera-1-1311543.jpg', 'Surveillance', '8 MP Outdoor Security Surveillance', '190.75'),
(4, 'img/Sony-Wired ActiveNoiseCancelling-Headphones.jpg', 'Electronics', 'Sony Wired Active Noise Cancelling Headphones', '157.51'),
(5, 'img/Smart-Watch&Fitness-TrackerwithHeartRateMonitor-Pink.jpg', 'Watches', 'Smart Watch & Fitness Tracker with Heart Rate Monitor - Pink', '231.33'),
(6, 'img/Pocket-watch.jpg', 'Watches', 'Pocket Watch', '194.11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
