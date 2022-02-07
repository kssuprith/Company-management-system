-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 10:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companywebsite` varchar(2048) NOT NULL,
  `companyphno` varchar(255) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `companycity` varchar(255) NOT NULL,
  `companystate` varchar(255) NOT NULL,
  `companycountry` varchar(255) NOT NULL,
  `industrylist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `companyname`, `companywebsite`, `companyphno`, `companyaddress`, `companycity`, `companystate`, `companycountry`, `industrylist`) VALUES
(13, 'Tcs', 'https://www.tcs.com', '7896541230', 'bangalore', 'bangalore', 'Karnataka', 'India', 'IT'),
(15, 'Infosys', 'https://www.infosys.com', '1234569870', 'bangalore', 'bangalore', 'kanataka', 'india', 'IT'),
(16, 'deloitte', 'https://www.deloitte.com', '1112223344', 'bangalore', 'bangalore', 'Karnataka', 'India', 'Account'),
(17, 'kpmg', 'https://www.kpmg.com', '1112223344', 'Mysore', 'Mysore', 'Karnataka', 'India', 'Account'),
(18, 'Apollo', 'https://www.Apollo.com', '2223334455', 'Mysore', 'Mysore', 'Karnataka', 'India', 'healthcare'),
(19, 'Fortis Health care', 'https://www.fortis.com', '5556667788', 'Hassan', 'Hassan', 'Karnataka', 'India', 'healthcare'),
(20, 'whirlpool', 'https://www.whirlpool.com', '5556667788', 'bangalore', 'bangalore', 'Karnataka', 'India', 'Sales'),
(21, 'First American', 'https://www.FirstAmerican.com', '5556667788', 'bangalore', 'bangalore', 'Karnataka', 'India', 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'suprith', 'sks@gmail.com', '12345', '2022-02-04 14:20:31'),
(5, 'sankeerth', 'sankeerth@gmail.com', 'sankeerth', '2022-02-05 13:14:56'),
(6, 'sagar', 'sagar@gmail.com', 'sagar', '2022-02-05 18:18:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
