-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2022 at 10:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `keyword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `author`, `title`, `body`, `keyword`) VALUES
(1, 'Pahrulf', 'Artikel 1f', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cupiditate, eos quasi rem vel velit vero voluptate. Ad at commodi, harum modi nam nemo, odio omnis sapiente sed vitae, voluptfatibus!', 'artikel1f'),
(2, 'Irfan', 'Artikel 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cupiditate, eos quasi rem vel velit vero voluptate. Ad at commodi, harum modi nam nemo, odio omnis sapiente sed vitae, voluptatibus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cupiditate, eos quasi rem vel velit vero voluptate. Ad at commodi, harum modi nam nemdsfasdfo, odio omnis sapiente sed vitae, voluptatibus!', 'artikel2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'Pahrul Irfan', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(2, 'Operator', 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
