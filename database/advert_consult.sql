-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 01:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advert_consult`
--

-- --------------------------------------------------------

--
-- Table structure for table `media_buyer`
--

CREATE TABLE `media_buyer` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_buyer`
--

INSERT INTO `media_buyer` (`id`, `first_name`, `last_name`, `address`, `postcode`, `phone_number`, `email`, `password`) VALUES
(6, 'Tairu', 'Adaja', 'john 22 s', 'm11sf', 2147483647, 'mathaadaja@gmil.com', 'ola007'),
(7, 'Tairu', 'Adaja', '20 chariot street, openshaw, manchester', ' ', 2147483647, 'mathadaja@gmail.com', 'OLAKUNLE007'),
(8, 'ADJ consult', 'ADJ007', '20 chariot street, openshaw, manchester', ' ', 2147483647, '  mathadaja@gmail.com', 'OLAKUNLE007');

-- --------------------------------------------------------

--
-- Table structure for table `media_owner`
--

CREATE TABLE `media_owner` (
  `id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(300) NOT NULL,
  `company_postcode` varchar(250) NOT NULL,
  `company_email` varchar(200) NOT NULL,
  `company_phone_number` int(100) NOT NULL,
  `company_registration_number` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_owner`
--

INSERT INTO `media_owner` (`id`, `company_name`, `company_address`, `company_postcode`, `company_email`, `company_phone_number`, `company_registration_number`, `password`) VALUES
(1, 'hhjj', 'fhjkhjg', '111', 'tairuadaja@gmail.com', 456678, 'zrsghbg1', 'jega007'),
(2, 'ADJ consult', '20 chariot street', ' M11 1DP', '  mathadaja@gmail.com', 2147483647, '', 'OLAKUNLE007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_buyer`
--
ALTER TABLE `media_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_owner`
--
ALTER TABLE `media_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_buyer`
--
ALTER TABLE `media_buyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `media_owner`
--
ALTER TABLE `media_owner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
