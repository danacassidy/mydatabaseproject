-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2022 at 09:20 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danakilc_databaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `localnewspapers`
--

CREATE TABLE `localnewspapers` (
  `id` int(11) NOT NULL,
  `newspaper` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `website_link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localnewspapers`
--

INSERT INTO `localnewspapers` (`id`, `newspaper`, `state`, `city`, `website_link`) VALUES
(2, 'The Miami Herald', 'FL', 'Miami', 'miamiherald.com'),
(3, 'WUFT News', 'FL', 'Gainesville', 'wuft.org'),
(4, 'The Oregonian/Oregon Live', 'OR', 'Portland', 'oregonlive.com'),
(5, 'The South Florida Sun Sentinel', 'FL', 'Ft. Lauderdale', 'sun-sentinel.com'),
(6, 'The Los Angeles Times', 'CA', 'Los Angeles', 'latimes.com'),
(7, 'The Gainesville Sun', 'FL', 'Gainesville', 'gainesville.com'),
(9, 'Oregonian', 'OR', 'Portland', 'Oregon'),
(10, 'Sarasota Herald-Tribune', 'FL', 'Sarasota', 'Herald-tribune.com'),
(11, 'Orlando Sentinel', 'FL', 'Orlando ', 'Orlandosentinel.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `localnewspapers`
--
ALTER TABLE `localnewspapers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `localnewspapers`
--
ALTER TABLE `localnewspapers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
