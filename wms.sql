-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 05:18 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'bhim', 'bhim@gmail.com', '123456');

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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `adminName`, `email`, `password`) VALUES
(1, 'peter', 'peter@gmai.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `description`, `slug`) VALUES
(2, 'schedule', 'It show sports related news', 'sports'),
(4, 'billing', 'It shows news related to the economics', 'eco'),
(7, 'policy', 'It show weather related news', 'weather'),
(16, 'vacency', 'Health is Wealth', 'health');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `category`, `title`, `slug`, `description`, `image`, `date`) VALUES
(42, 4, 'Price increases', 'price2020', 'we recently increased the price of our billing system due to change in governmaent policies. Know more in the link below', '1682357802.png', '2023-04-24 23:16:55'),
(45, 2, 'Important Notice - Changes to Trash Collection Schedule', 'trash-collection-schedule-changes', 'Starting next week, there will be changes to the trash collection schedule in your area. Please read on for more information', '1682392106.jpg', '2023-04-25 08:53:26'),
(46, 7, 'Recycling Guidelines Update', 'recycling-guidelines-update', 'We have updated our recycling guidelines to include new items that can be recycled. Please take note of these changes to ensure proper recycling.', '1682392191.png', '2023-04-25 08:54:51'),
(47, 7, 'Reduce Food Waste with Composting', 'composting-for-food-waste', 'Did you know that you can reduce food waste and help the environment by composting? Learn how to get started with our guide.', '1682392355.jpg', '2023-04-25 08:57:35'),
(48, 7, 'Trash and Recycling Bin Placement Guidelines', 'bin-placement-guidelines', 'Proper placement of your trash and recycling bins can help ensure efficient collection and avoid delays. Review our guidelines to avoid issues.\r\n', '1682392429.jpg', '2023-04-25 08:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `pickup_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `weight` int(8) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`pickup_id`, `user_id`, `type`, `weight`, `location`, `date`, `time`, `order_time`, `status`) VALUES
(27, 1, 'plastic', 454, 'fljdefjde', '2023-03-28', '19:15:00', '2023-04-24 13:27:59', 'Unverified'),
(28, 1, 'plastic', 78, 'gug', '2023-04-13', '22:13:00', '2023-04-24 14:49:33', 'picked'),
(30, 2, 'plastic', 1, 'gug', '2023-04-06', '19:17:00', '2023-04-24 13:30:00', 'Unverified'),
(31, 2, 'plastic', 6, 'khapinche', '2023-04-21', '19:17:00', '2023-04-24 13:30:20', 'Unverified');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(300) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `address`, `email`, `password`, `photo`) VALUES
(1, 'puskar', 'imadol', 'puskarbha@gmail.com', '$2y$10$VAlVC5L3dWVTCwx5/kZ8z.lK6XjCB.jrp4NrItO/NpF42yvukBl6y', 'Screenshot (1).png'),
(2, 'ramesh', 'imadol', 'ramesh@gmail.com', '$2y$10$AVsIDUVQssannN20ZAwqruvMoaL4/edbDtIKeGL1st9vBpazOQZMO', 'Screenshot 2023-04-02 162309.p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`pickup_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `pickup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
