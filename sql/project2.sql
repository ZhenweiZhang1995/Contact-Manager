-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 09:01 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'Zhenwei', 'Zhang', 'Mr.', '308B Sunset Dr', 'Chapel Hill', 'NC', '27516', '9196677172', 'Hello World'),
(2, 'Ali', 'Li', 'Miss', '110 Country Club Rd', 'Chapel Hill', 'NORTH CAROLINA', '27516', 'No Phone Number', 'Hello World Again'),
(3, 'Chuck', 'Deng', 'Mr.', '308B Sunset Dr', 'Chapel Hill', 'NORTH CAROLINA', '27516', '13701681060', 'This has been changed'),
(4, 'Brice', 'Johnson', 'Mr.', 'UNC Chapel Hill', 'Chapel Hill', 'NORTH CAROLINA', '27514', '9192345667', 'Go heels'),
(5, 'Marcus', 'Page', 'Mr.', 'UNC Chapel Hill', 'Chapel Hill', 'NORTH CAROLINA', '27514', '9192345667', 'Go heels!'),
(6, 'Seth', 'Wright', 'Mr.', 'Carroll', 'Chapel Hill', 'NORTH CAROLINA', '27514', '000000000', 'MEJO 583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
