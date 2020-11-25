-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 08:48 AM
-- Server version: 10.1.40-MariaDB
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
-- Database: `agufon`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ojugo Samson', 'samsonojugo@gmail.com', '1234'),
(2, 'sammy tech', 'ojo@gmail.com', '4321'),
(3, 'peter', 'sam@gmail.com', '1234'),
(4, 'Jack White', 'lee@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'sylvia cookie', 'aF@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Emma', 'ellajohn@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Blog', 'bukky@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(13, 'sylviafyff', 'sam@gmail.comrfg', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `mentee` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `mentee`, `name`, `email`, `password`) VALUES
(2, 'Jack White', 'Peter', 'deetdennis@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'sylvia cookie', 'Katherine', 'Katherine@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'sylvia cookie', 'Colins', 'collins@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
