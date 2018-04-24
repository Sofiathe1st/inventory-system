-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 04:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(10) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `region` varchar(150) NOT NULL,
  `province` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer_name`, `contact_no`, `region`, `province`, `city`, `address`, `status`) VALUES
(1, 'samsung', '12351212313', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'active'),
(2, 'toshiba', '124112414', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'not-active'),
(3, 'asus', '124141414', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'active'),
(4, 'acer', '1231241512', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'not-active'),
(5, 'hp', '12313', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'active'),
(21, 'sharp', '1231313', 'Region 1', 'Region 1', 'Region 1', 'Region 1', 'not-active');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(50) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `quantity` int(250) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_no`, `purchase_order_date`, `manufacturer`, `quantity`, `remarks`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(63, 'qwerty', '2018-04-18', 'samsung', 2, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(65, '123123', '2018-04-18', 'toshiba', 3, 'asdf2', 'super@admin', 'John Charles', 'Villavicencio'),
(66, '111', '2018-04-19', 'asus', 9, '/0k', 'super@admin', 'John Charles', 'Villavicencio'),
(67, '0001', '2018-04-19', 'acer', 2, '2e', 'super@admin', 'John Charles', 'Villavicencio'),
(68, '1123', '2018-04-19', 'hp', 12, 'xasd', 'super@admin', 'John Charles', 'Villavicencio'),
(69, '12345', '2018-04-19', 'sharp', 1, 'qwe', 'super@admin', 'John Charles', 'Villavicencio');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(15) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `author_firstname` varchar(60) NOT NULL,
  `author_lastname` varchar(60) NOT NULL,
  `author_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `purchase_order_no`, `purchase_order_date`, `serial_number`, `manufacturer`, `quantity`, `category`, `price`, `remarks`, `author_firstname`, `author_lastname`, `author_email`) VALUES
(1, '111', '2018-04-19', '1', 'asus', 1, 'Television', 2, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(2, '111', '2018-04-19', '3', 'asus', 1, 'Television', 4, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(3, '111', '2018-04-19', '5', 'asus', 1, 'Television', 6, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(4, '111', '2018-04-19', '7', 'asus', 1, 'Television', 8, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(5, '111', '2018-04-19', '9', 'asus', 1, 'Television', 10, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(6, '111', '2018-04-19', '11', 'asus', 1, 'Television', 12, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(7, '111', '2018-04-19', '13', 'asus', 1, 'Television', 14, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(8, '111', '2018-04-19', '15', 'asus', 1, 'Television', 16, '/0k', 'John Charles', 'Villavicencio', 'super@admin'),
(9, '111', '2018-04-19', '17', 'asus', 1, 'Television', 18, '/0k', 'John Charles', 'Villavicencio', 'super@admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateregistered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `type`, `department`, `username`, `password`, `email`, `dateregistered`) VALUES
(00017, 'John Charles', 'Villavicencio', 'Bautista', 'SuperAdmin', 'CT-DEPARTMENT', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'super@admin', '2018-04-19'),
(00077, 'John Charles', 'Villavicencio', 'Bautista', 'User', 'CT-DEPARTMENT', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@user', '2018-04-18'),
(00078, 'John Charles', 'Villavicencio', 'Bautista', 'Admin', 'CT-DEPARTMENT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-04-18'),
(00079, 'John Charlesies', 'Villavicencio', 'Bautista', 'Admin', 'HRD-DEPARTMENT', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2@email.com', '2018-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
