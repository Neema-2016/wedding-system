-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 01:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `couples`
--

CREATE TABLE `couples` (
  `couple_id` int(11) NOT NULL,
  `spouse_one` varchar(40) NOT NULL,
  `spouse_two` varchar(40) NOT NULL,
  `couple_email` varchar(100) NOT NULL,
  `couple_phone` text NOT NULL,
  `couple_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couples`
--

INSERT INTO `couples` (`couple_id`, `spouse_one`, `spouse_two`, `couple_email`, `couple_phone`, `couple_location`) VALUES
(1, 'Sagini', 'Ocharo', 'askar.marigi@yahoo.com', '0728881518', 'Mnarani'),
(3, 'Sfina', 'Mkombozi', 'sfina@gmail.com', '0789786565', 'Mnarani');

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `individual_id` int(11) NOT NULL,
  `individual_name` varchar(40) NOT NULL,
  `individual_email` varchar(100) NOT NULL,
  `individual_phone` text NOT NULL,
  `individual_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`individual_id`, `individual_name`, `individual_email`, `individual_phone`, `individual_location`) VALUES
(1, 'Marigi Kemunto', 'rigiggz98@gmail.com', '0771071088', 'Mnarani,Kilifi'),
(2, 'sautisol', 'sautisol@gmail.com', '0787675643', 'kasarani');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_phone` text NOT NULL,
  `user_location` varchar(100) NOT NULL,
  `role` enum('Individual','Admin','Couple','Vendor') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`, `user_phone`, `user_location`, `role`) VALUES
(1, 'Marigi Kemunto', 'rigiggz98@gmail.com', '', '0771071088', 'Mnarani,Kilifi', 'Individual'),
(2, 'Sagini', 'askar.marigi@yahoo.com', '', '0728881518', 'Mnarani', 'Couple'),
(3, 'Fruits by Mari', 'rigziggy98@gmail.com', '', '0799509119', 'Kaloleni,Mombasa', 'Vendor'),
(4, 'Milkmari', 'rigiggz98@gmail.com', '', '079509119', 'Mnarani,Kilifi', 'Vendor'),
(5, 'kaleofruits', 'kaleo@gmail.com', 'kaleo1600', '0720333333', 'Mnarani', 'Vendor'),
(6, 'sautisol', 'sautisol@gmail.com', 'sautisol2020', '0787675643', 'kasarani', 'Individual'),
(7, 'Sfina', 'sfina@gmail.com', 'kaleo123', '0789786565', 'Mnarani', 'Couple');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(40) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `vendor_location` varchar(100) NOT NULL,
  `vendor_phone` text NOT NULL,
  `vendor_category` varchar(40) NOT NULL,
  `pending` enum('1','0') NOT NULL,
  `vendor_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_location`, `vendor_phone`, `vendor_category`, `pending`, `vendor_description`) VALUES
(5, 'Yvonne Jewellers', 'officialmarigi63@gmail.com', 'Mnarani', '0799509119', 'Jewellers', '1', ''),
(6, 'Marigi', 'rigiggz98@gmail.com', 'Mnarani', '0771071088', 'Gardens', '1', ''),
(7, 'Marigi Yvonne', 'officialmarigi63@gmail.com', 'Mnarani,Kilifi', '0799509119', 'Florists', '1', ''),
(8, 'Fruits by Mari', 'rigziggy98@gmail.com', 'Kaloleni,Mombasa', '0799509119', 'Chefs', '1', ''),
(9, 'Milkmari', 'rigiggz98@gmail.com', 'Mnarani,Kilifi', '079509119', 'Venues', '1', ''),
(10, 'kaleofruits', 'kaleo@gmail.com', 'Mnarani', '0720333333', 'MCs', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couples`
--
ALTER TABLE `couples`
  ADD PRIMARY KEY (`couple_id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`individual_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couples`
--
ALTER TABLE `couples`
  MODIFY `couple_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `individual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
