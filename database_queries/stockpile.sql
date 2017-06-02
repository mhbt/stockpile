-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:39 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_phone_no` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `c_fname`, `c_lname`, `c_phone_no`) VALUES
('hassaan', 'muhammad hassaan', 'bin tanveer', '03118172130'),
('moiz', 'mohammad moiz', 'hussain', '03214049786');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `a_id` varchar(30) NOT NULL,
  `street_no` varchar(60) NOT NULL,
  `house_no` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`a_id`, `street_no`, `house_no`, `city`, `state`, `country`) VALUES
('hassaan', 'main, awan enterprises, azam chowk, kamahan rd', '85, tanveer mansion', 'lahore', 'punjab', 'pakistan'),
('moiz', 'bheikwal mor', '76', 'lahore', 'punjab', 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `o_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_sold` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`o_id`, `p_id`, `p_sold`) VALUES
(11, 23, 1),
(12, 25, 1),
(13, 25, 1),
(14, 27, 1),
(15, 24, 3),
(16, 23, 2),
(17, 23, 1),
(18, 25, 1),
(19, 25, 1),
(20, 26, 4),
(21, 27, 2),
(22, 25, 1),
(23, 26, 2),
(24, 24, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `c_id` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_manufacturer` varchar(30) NOT NULL,
  `p_quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `status`) VALUES
('hassaan', '11222a0756cc9ff760155f9f28b61e0a', 'm.hassaanbintanveer@gmail.com', 'customer'),
('admin', '271b0b937f6664cbf0532448259afac5', 'webmaster@stockpile.com', 'admin'),
('ordermanager', '271b0b937f6664cbf0532448259afac5', 'webmaster@stockpile.com', 'ordermanager'),
('moiz', 'a51e47f646375ab6bf5dd2c42d3e6181', 'bcsf15m029@pucit.edu.pk', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD KEY `customer_order_p_id_fk` (`p_id`),
  ADD KEY `customer_order_o_id_fk` (`o_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`o_id`),
  ADD UNIQUE KEY `O_NAME` (`o_name`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `rate_products`
--
ALTER TABLE `rate_products`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `rate_products`
--
ALTER TABLE `rate_products`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
