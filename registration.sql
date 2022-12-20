-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 07:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `uid` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uid`, `name`, `email`, `password`, `mobile`, `gender`, `state`, `city`, `address`) VALUES
(94, 'nisha', 'nish@gmail.com', '12345678', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(79, 'nisha', 'nish@gmail.com', '12345678', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(37, 'prerna', 'prerna@gmail.com', 'f0898af949a373e72a4f6a34b4de9090', '9825785020', 'Female', 'Gujrata', 'Ahemdabad', 'jhfdsxfgjhklbcvbn'),
(119, '92`', 'poiuyt@gmail.com', '7654321', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(118, '91', 'aw@gmail.com', '98765432', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(39, 'nisha', 'nish@gmail.com', '7654321', '9876543212', 'male', 'M.P', 'Mumbai', 'lkfdesrdtfgyhuj'),
(117, '90', 'aw@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(116, '89', 'ewqoiuytr@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(115, '88', 'oiuytr@gmail.com', '98765432', '9408058581', 'male', 'Gujrata', 'Ahemdabad', 'khgfgcvhb'),
(114, '87', 'ytf@gmail.com', '7654321', '9408058581', 'Female', 'Gujrata', 'Ahemdabad', 'khgfgcvhb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
