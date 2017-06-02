-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:56 AM
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
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `d_id` int(11) NOT NULL,
  `p_color` varchar(30) NOT NULL,
  `p_spec` varchar(600) DEFAULT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`d_id`, `p_color`, `p_spec`, `p_id`) VALUES
(1, 'black', 'intel 64, 4GB Ram, i3-2.4GHZ x 4, 500HDD SATA, Sony Combo optical disk', 23),
(2, 'grey', 'intel 64, 4GB Ram, i3-2.4GHZ x 4, 500HDD SATA, Sony Combo optical disk', 23),
(3, 'silver', 'intel i7, 8gb ram, 250 HDD, backlit keyboard', 25),
(4, 'shine black', 'intel i3, 4GB RAM, 1TB HDD, 3MB CACHE, light weight', 25),
(5, 'blue', '1 Year Official Infinix Warranty\r\n13mp Selfie + 8mp Dual Wefie Ultra Wide Auto Foucs Front Camera\r\n13mp Back Auto Foucs Camera\r\nMemory: 3GB RAM, 32GB ROM\r\n5.2 Inches HD Display\r\n1.3GHz Octa Core Cortex-A53 MediaTek MT6753\r\nAndroid 6.0 Marshmallow with XOS Chameleon', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
