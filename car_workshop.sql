-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 09:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_booking`
--

CREATE TABLE `mechanic_booking` (
  `serial_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `license_no` text NOT NULL,
  `engine_no` text NOT NULL,
  `appoint_date` date NOT NULL,
  `mechanic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_booking`
--

INSERT INTO `mechanic_booking` (`serial_no`, `name`, `address`, `phone`, `license_no`, `engine_no`, `appoint_date`, `mechanic`) VALUES
(1000006, 'Ashik', 'Dhaka', 188, 'A3455', 'B4444', '2022-09-28', 'Mechanic 5');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uname` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uname`, `email`, `pass`, `role`) VALUES
('ee', 'ee', 'ee', 'Select'),
('ee', 'ee', 'ee', 'Select'),
('fox', 'momen@duck.com', '44', 'User'),
('ee', 'rr', 'rrrrr', 'User'),
('admin', 'admin@admin.com', '12345', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
