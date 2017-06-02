-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:57 AM
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
-- Table structure for table `rate_products`
--

CREATE TABLE `rate_products` (
  `r_id` int(11) NOT NULL,
  `c_id` varchar(30) NOT NULL,
  `p_id` int(11) NOT NULL,
  `stars` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_products`
--

INSERT INTO `rate_products` (`r_id`, `c_id`, `p_id`, `stars`) VALUES
(8, 'hassaan', 23, 3),
(9, 'hassaan', 24, 3),
(10, 'hassaan', 25, 5),
(11, 'hassaan', 26, 4),
(12, 'hassaan', 27, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rate_products`
--
ALTER TABLE `rate_products`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rate_products`
--
ALTER TABLE `rate_products`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
