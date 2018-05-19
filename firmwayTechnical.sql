-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2018 at 05:03 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firmwayTechnical`
--

-- --------------------------------------------------------

--
-- Table structure for table `q1_coating`
--

CREATE TABLE `q1_coating` (
  `id` int(11) NOT NULL,
  `coating_name` varchar(20) NOT NULL,
  `coating_price` int(11) NOT NULL COMMENT 'for 1mm thick for 1 sq/cm',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `q1_coating`
--

INSERT INTO `q1_coating` (`id`, `coating_name`, `coating_price`, `created_on`, `updated_on`) VALUES
(1, 'Gold', 35, '2018-05-18 14:41:49', '2018-05-18 14:41:49'),
(2, 'Silver', 25, '2018-05-18 14:41:49', '2018-05-18 14:41:49'),
(3, 'Bronze', 15, '2018-05-18 14:41:49', '2018-05-18 14:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `q1_metal`
--

CREATE TABLE `q1_metal` (
  `id` int(11) NOT NULL,
  `metal_name` varchar(20) NOT NULL,
  `metal_cost` int(11) NOT NULL COMMENT 'cost for 100% pure for 1 sq/cm',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `q1_metal`
--

INSERT INTO `q1_metal` (`id`, `metal_name`, `metal_cost`, `created_on`, `updated_on`) VALUES
(1, 'Aluminium', 10, '2018-05-18 14:40:35', '2018-05-18 14:40:35'),
(2, 'Steel', 20, '2018-05-18 14:40:35', '2018-05-18 14:40:35'),
(3, 'Copper', 30, '2018-05-18 14:40:47', '2018-05-18 14:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `q1_coating`
--
ALTER TABLE `q1_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q1_metal`
--
ALTER TABLE `q1_metal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `q1_coating`
--
ALTER TABLE `q1_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `q1_metal`
--
ALTER TABLE `q1_metal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
