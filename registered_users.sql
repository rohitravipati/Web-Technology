-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 05:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppot_examples`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`, `date_time`) VALUES
(24, 'Mac121', 'Mac', 'macky', '140c1f12feeb2c52dfbeb2da6', 'macky111@gmail.com', 'Male', '2014-04-15 10:30:00'),
(25, 'Rohit2211', 'Rohit', 'Ravipati', '2d235ace000a3ad85f590e321', 'rohit@gmail.com', 'Male', '2014-04-15 10:30:00'),
(26, 'RonikSingh', 'Ronik', 'Singh', 'f8d6a5e3b4bfee27c66386340', 'roniksingh123@gmail.com', 'Male', '2014-04-15 10:30:00'),
(27, 'Sahaj45', 'Sahaj', 'Saini', 'b20505f7d91c9c6039ae837ad', 'sahajnanuan@gmail.com', 'Male', '2014-04-15 10:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
