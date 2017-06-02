-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:55 AM
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
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(30) DEFAULT NULL,
  `o_status` varchar(3) NOT NULL DEFAULT 'NO',
  `o_date` date DEFAULT NULL,
  `c_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`o_id`, `o_name`, `o_status`, `o_date`, `c_id`) VALUES
(11, 'hassaan1', 'yes', '2017-05-29', 'hassaan'),
(12, 'hassaan2', 'yes', '2017-05-29', 'hassaan'),
(13, 'hassaan3', 'no', '2017-05-29', 'hassaan'),
(14, 'hassaan4', 'no', '2017-05-29', 'hassaan'),
(15, 'hassaan5', 'no', '2017-05-29', 'hassaan'),
(16, 'moiz1', 'no', '2017-05-29', 'moiz'),
(17, 'hassaan6', 'yes', '2017-05-30', 'hassaan'),
(19, 'moiz3', 'yes', '2017-05-31', 'moiz'),
(18, 'moiz2', 'yes', '2017-05-31', 'moiz'),
(20, 'hassaan7', 'no', '2017-05-31', 'hassaan'),
(21, 'hassaan8', 'no', '2017-06-01', 'hassaan'),
(22, 'hassaan9', 'no', '2017-06-01', 'hassaan'),
(23, 'moiz4', 'no', '2017-06-01', 'moiz'),
(24, 'moiz5', 'no', '2017-06-01', 'moiz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`o_id`),
  ADD UNIQUE KEY `O_NAME` (`o_name`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
