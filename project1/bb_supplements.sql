-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 03:28 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb_supplements`
--
CREATE DATABASE IF NOT EXISTS `bb_supplements` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bb_supplements`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(8) NOT NULL,
  `product_name` varchar(64) DEFAULT NULL,
  `product_brand` varchar(64) DEFAULT NULL,
  `product_category` varchar(64) DEFAULT NULL,
  `product_weight` int(8) DEFAULT NULL,
  `product_weight_unit` varchar(32) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_promo_p` float DEFAULT NULL,
  `product_barcode` varchar(20) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `product_status` enum('Active','Inactive') DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `product_category`, `product_weight`, `product_weight_unit`, `product_price`, `product_promo_p`, `product_barcode`, `product_img`, `product_status`, `created`) VALUES
(1, 'Iso Zero', 'Tesla', 'Protein', 2000, 'g', 6990, 6890, '5999886994785', 'http://superior14.rs//images/products/tesla/iso_zero_100_.png', 'Active', NULL),
(2, 'Omega 3', 'Tesla', 'Multivitamins', 60, 'želatinskih kapsula', 980, 940, NULL, 'http://superior14.rs//images/products/tesla/omega_3_.png', 'Active', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
