-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 05:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `hobby` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `amail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `age`, `hobby`, `weight`, `height`, `gender`, `amail`) VALUES
(1, 'Jyothi', 20, 'Reading, Walking, Studying, Coding', 45, 5.3, 'Female', 'jyo@gmail.com'),
(5, 'BHUVI', 20, 'singing', 44, 5.6, 'F', 'bhu@gmail.com'),
(6, 'TEST', 21, 'Enter Hobbies', 55, 5.11, 'male', 'test@gmail.com'),
(7, 'Vish', 21, 'Enter Hobbies', 56, 5.11, 'male', 'v@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `counting`
--

CREATE TABLE `counting` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `cmail` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counting`
--

INSERT INTO `counting` (`id`, `name`, `type`, `calorie`, `cmail`) VALUES
(2, 'Vada', 'Lunch', 142, 'jyo@gmail.com'),
(6, 'Pasta', 'lunch', 66, 'jyo@gmail.com'),
(12, 'PASTA', 'LUNCH', 100, 'bhu@gmail.com'),
(13, 'pasta', 'b', 200, 'v@gmail.com'),
(14, 'maggie', 'l', 100, 'v@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `mmail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `type`, `calorie`, `mmail`) VALUES
(1, 'Rice', 'Lunch', 100, 'jyo@gmail.com'),
(2, 'Pasta', 'Dinner', 156, 'jy1o@gmail.com'),
(3, 'Coffee', 'breakfast', 120, 'jyo@gmail.com'),
(5, 'pasta', 'lunch', 120, 'jyo@gmail.com'),
(6, 'DOSA', 'BREAKFAST', 90, 'bhu@gmail.com'),
(7, 'pasta', 'breakfast', 200, 'v@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `opt` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `name`, `email`, `city`, `opt`, `subject`) VALUES
(1, 'Jyothi', 'jyo@gmail.com', 'Bangalore', 'Feedback', 'Helpful !!!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 2,
  `photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `password`, `status`, `photo`) VALUES
(4, 'Jyothi', 'jyo@gmail.com', '$2y$10$kYcGA99D70QQQwpNpSOCa.4Tz580YCCM2MXwoVh92t7g7AZQqTE.6', 2, '4.jpg'),
(8, '                                                        Bhuvi                                       ', 'bhu@gmail.com', '$2y$10$TWEIXpifejeuTNP/KVbqbOHY6yrGm8GPEq.80s6VDBPeSGQ29TBtW', 2, 'default.png'),
(9, 'TEST', 'test@gmail.com', '$2y$10$PtRcG7VtkvJC8rvSSTA44uu7XcshZBaD663R7z6YCEbpPAUCieCVC', 2, 'default.png'),
(10, 'Vish', 'v@gmail.com', '$2y$10$81TK31y5czZWBIPOzmQuyeQl.6.38aVUnYfJtvNnqrrT7Mv4WbGEW', 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counting`
--
ALTER TABLE `counting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `counting`
--
ALTER TABLE `counting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
