-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 07:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `departments` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `roll`, `dob`, `address`, `contact`, `semester`, `departments`, `session`, `images`) VALUES
(1, 'Imran Hossen', 'imran.hossen@gmail.com', 1460, '22 june 1995', 'Rayerbazar, Dhaka', '01684330460', 'seventh', 'cse', '2013-14', ''),
(2, 'Abrar Hossain', 'abrar.hossain@gmail.com', 1435, '8 april 1994', 'Magi para', '01556335060', 'seventh', 'cse', '2013-14', ''),
(3, 'Hossain Misho', 'lhmisho@gmail.com', 1468, '1-5-1995', 'Uttara', '01685634198', '7th', 'CSE', '2013-2014', ''),
(7, 'Nahid Hassan', 'nahid@gmail.com', 1866, '12 july 1995', 'Savar', '01515000000', '1st', 'CSE', '2016-17', ''),
(8, 'tamjid', 'kjnsn@gmail.com', 1867, '10-9-2014', 'dhanmondi', '01515000000', '3rd', 'BBA', '2016-17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
