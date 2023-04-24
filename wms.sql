-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 01:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(20) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `user_id` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `weight` int(8) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`user_id`, `type`, `weight`, `location`, `date`, `time`, `order_time`, `status`) VALUES
(1, 'plastic', 2, 'patan', '2023-01-31', '17:22:00', '2023-02-04 08:39:05', 'Unverified'),
(1, 'plastic', 13, 'gug', '2023-02-21', '20:25:00', '2023-02-04 08:40:52', 'Unverified'),
(1, 'plastic', 1, 'gug', '2023-02-21', '02:03:00', '2023-02-04 08:41:42', 'Unverified'),
(1, 'plastic', -3, 'gug', '2023-02-28', '14:34:00', '2023-02-04 08:44:55', 'Unverified'),
(1, '', 0, '', '0000-00-00', '00:00:00', '2023-02-04 08:45:21', 'Unverified'),
(1, 'others', 12, 'hawA', '2023-02-14', '19:32:00', '2023-02-04 08:47:16', 'Unverified'),
(1, 'Medical', 5, 'lakitpur', '2023-02-03', '22:11:00', '2023-02-09 07:27:00', 'Unverified'),
(1, 'paper', 2, 'khapinche', '2023-03-07', '18:14:00', '2023-02-09 07:29:22', 'Unverified'),
(1, 'paper', 4, 'basa', '2023-02-27', '18:44:00', '2023-02-09 08:59:48', 'Unverified'),
(1, 'plastic', 4, 'patan', '2023-02-13', '14:50:00', '2023-02-09 09:00:58', 'Unverified'),
(1, 'plastic', 4, 'nayatol', '2023-02-07', '14:53:00', '2023-02-09 09:04:20', 'Unverified'),
(1, 'others', 4, 'patandhoka', '2023-02-10', '20:51:00', '2023-02-09 09:06:16', 'Unverified'),
(1, 'plastic', -1, 'gug', '2023-02-26', '14:58:00', '2023-02-09 09:07:36', 'Unverified'),
(1, 'plastic', -1, 'lakitpur', '2023-02-22', '15:05:00', '2023-02-09 09:16:02', 'Unverified'),
(0, 'Electronics', 88, 'butwal', '2023-03-09', '15:24:00', '2023-02-09 09:35:16', 'Unverified'),
(0, 'plastic', 1, 'lakitpur', '2023-02-21', '20:22:00', '2023-02-09 09:37:28', 'Unverified'),
(3, 'Metal', -1, 'lakitpur', '2023-03-01', '17:24:00', '2023-02-09 09:39:40', 'Unverified'),
(11, 'plastic', 0, '', '0000-00-00', '00:00:00', '2023-02-21 03:29:08', 'Unverified'),
(12, 'plastic', 455, 'imadol', '2023-02-25', '12:18:00', '2023-02-21 06:33:53', 'Unverified'),
(12, 'Medical', 100, 'patan', '2023-02-01', '12:23:00', '2023-02-21 06:34:40', 'Unverified'),
(12, 'paper', 45, '78', '2023-02-09', '15:22:00', '2023-02-21 06:37:19', 'Unverified'),
(12, 'plastic', 78, 'gug', '2023-01-31', '12:29:00', '2023-02-21 06:38:10', 'Unverified');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `address`, `email`, `password`, `photo`) VALUES
(12, 'puskar', 'imadol', 'puskarbha@gmail.com', '$2y$10$OR5yV148ZQxrLUBmUBWXRex8DsUlN6kNgORv9pd5a1SmWAvkxT57W', 'IMG_20221220_112705.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
