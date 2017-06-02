-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:52 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockpile`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_category` varchar(30) NOT NULL,
  `p_manufacturer` varchar(30) NOT NULL,
  `p_qoh` varchar(30) NOT NULL,
  `p_price` varchar(30) NOT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  `featured` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_category`, `p_manufacturer`, `p_qoh`, `p_price`, `image_path`, `featured`) VALUES
(23, 'toshiba satellite', 'laptop', 'toshiba', '12', '50000', '../assets/images/products/toshiba_laptop.jpg', NULL),
(24, 'hp 15-ay067ne', 'laptop', 'hp', '4', '40400', '../assets/images/products/ay072_2.png', 'y'),
(25, 'elite book folio 1020', 'laptop', 'hp', '28', '50900', '../assets/images/products/c04589760.png', 'y'),
(26, 'galaxy s8', 'phone', 'samsung', '3', '80000', '../assets/images/products/glaxy-s8.jpg', ''),
(27, 'infinix s2 pro', 'phone', 'infinix', '2', '20599', '../assets/images/products/infinix-5805.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
