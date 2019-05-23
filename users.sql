-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 03:36 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branchnumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branchnumber`) VALUES
(1, 'bn01'),
(2, 'bn02'),
(3, 'bn03'),
(4, 'bn04'),
(5, 'bn05'),
(6, 'bn06'),
(7, 'bn07');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `branch` int(11) DEFAULT NULL,
  `part` int(11) DEFAULT NULL,
  `amount` decimal(14,2) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `maturity` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id` int(11) NOT NULL,
  `pn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id`, `pn`) VALUES
(1, 'pn01'),
(2, 'pn02'),
(3, 'pn03'),
(4, 'pn04'),
(5, 'pn05'),
(6, 'pn06'),
(7, 'pn07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `account` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `pin`, `account`) VALUES
(1, 'Zeand Myson', 'Timbang', 'Achas', '$2y$10$0TUD3CwGPeBIk6qrh5mf.utcIE/spqq8Pod5UoQQqc7hgnpBYcWX6', 1234),
(2, NULL, '', '', '$2y$10$v4WB7nkuIWLpqQTrBVUwv.OTt3agKBorDJaQsts64jB4tSzZvHXJy', 0),
(3, 'John Rey ', 'Bayabas', 'Villa', '$2y$10$SUesMLQe1RGcfo0nYbJ9/OoblOpskk187eyRlycu/L.A4JrVbsKEe', 0),
(4, 'John Rey', 'Bayabas', 'Villaflor', '$2y$10$rlr52DOFkJwCc6UepET0BOsP8.GIeyB4aqgqBerYPdbATxIvxSNdu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `part` (`part`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
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
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `insurance_ibfk_2` FOREIGN KEY (`part`) REFERENCES `part` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
