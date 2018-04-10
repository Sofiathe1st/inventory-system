-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 02:39 AM
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
(1, 'samsung', '12351212313', 'region I', 'region I', 'region I', 'region I', 'not-active'),
(2, 'toshiba', '124112414', 'region I', 'region I', 'region I', 'region I', 'active'),
(3, 'asus', '124141414', 'region I', 'region I', 'region I', 'region I', 'not-active'),
(4, 'acer', '1231241512', 'region I', 'region I', 'region I', 'region I', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(50) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_no`, `purchase_order_date`, `manufacturer`, `remarks`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(1, 'asd', '2018-03-22', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(2, '999', '2018-03-23', 'toshiba', 'sdsdd', 'super@admin', '1John Charles', 'Villavicencio'),
(3, '0000001', '2018-03-23', 'toshiba', 'ASSD', 'super@admin', '1John Charles', 'Villavicencio'),
(4, 'asdad', '2018-03-23', 'toshiba', 'a', 'super@admin', '1John Charles', 'Villavicencio'),
(5, '1234', '2018-04-02', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(6, '1234', '2018-04-02', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(7, '9087', '2018-04-02', 'samsung', 'rdt', 'super@admin', '1John Charles', 'Villavicencio'),
(8, '0998', '2018-04-02', 'samsung', 'asasd', 'super@admin', '1John Charles', 'Villavicencio'),
(9, '12309123', '2018-04-02', 'toshiba', 'sdf', 'super@admin', '1John Charles', 'Villavicencio'),
(10, '12342', '2018-04-02', 'samsung', 's', 'super@admin', '1John Charles', 'Villavicencio'),
(11, '1235', '2018-04-02', 'toshiba', 'sdf', 'super@admin', '1John Charles', 'Villavicencio'),
(12, '123', '2018-04-02', 'samsung', 'dfs', 'super@admin', '1John Charles', 'Villavicencio'),
(13, '12', '2018-04-02', 'toshiba', 'sf', 'super@admin', '1John Charles', 'Villavicencio'),
(14, '123455', '2018-04-02', 'toshiba', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(15, '32425', '2018-04-02', 'toshiba', 'sdf', 'super@admin', '1John Charles', 'Villavicencio'),
(16, '123131', '2018-04-02', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(17, '9980', '2018-04-03', 'samsung', 'XC', 'super@admin', '1John Charles', 'Villavicencio'),
(18, '1235', '2018-04-03', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(19, 'sasdaddf', '2018-04-03', 'toshiba', 'sdfsf', 'super@admin', '1John Charles', 'Villavicencio'),
(20, '124', '2018-04-03', 'toshiba', 'aad', 'super@admin', '1John Charles', 'Villavicencio'),
(21, '1245', '2018-04-03', 'samsung', 'asd', 'super@admin', '1John Charles', 'Villavicencio'),
(22, '123573', '2018-04-03', 'samsung', 'asdw', 'super@admin', '1John Charles', 'Villavicencio'),
(23, 'lknln', '2018-04-03', 'samsung', 'qwerty', 'super@admin', '1John Charles', 'Villavicencio'),
(24, '1231412414', '2018-04-03', 'toshiba', 'sfaf', 'super@admin', '1John Charles', 'Villavicencio'),
(25, 'llk', '2018-04-03', 'samsung', 'aasd', 'super@admin', '1John Charles', 'Villavicencio'),
(26, '1245', '2018-04-03', 'samsung', 'adasd', 'super@admin', '1John Charles', 'Villavicencio'),
(27, '09o9', '2018-04-03', 'toshiba', 'sada', 'admin@admin', '2John Charles', 'Villavicencio'),
(28, 'asd', '2018-04-03', 'toshiba', 'sfaf', 'admin@admin', '2John Charles', 'Villavicencio'),
(29, '1231', '2018-04-03', 'samsung', 'asd', 'admin@admin', '2John Charles', 'Villavicencio'),
(30, '1231', '2018-04-03', 'samsung', 'asd', 'admin@admin', '2John Charles', 'Villavicencio'),
(31, 'adasd', '2018-04-03', 'asus', 'asdad', 'admin@admin', '2John Charles', 'Villavicencio'),
(32, '123', '2018-04-03', 'toshiba', 'ssf', 'admin@admin', '2John Charles', 'Villavicencio'),
(33, 'wy6', '2018-04-03', 'samsung', 'asd', 'admin@admin', '2John Charles', 'Villavicencio'),
(34, 'fafag', '2018-04-03', 'toshiba', 'afgfgdg', 'admin@admin', '2John Charles', 'Villavicencio'),
(35, '12e', '2018-04-04', 'toshiba', 'sdf', 'super@admin', '1John Charles', 'Villavicencio'),
(36, '1123', '2018-04-04', 'toshiba', 'as', 'super@admin', '1John Charles', 'Villavicencio'),
(37, 'asdaf', '2018-04-04', 'samsung', 'sdfsf', 'super@admin', '1John Charles', 'Villavicencio'),
(38, 'asda', '2018-04-04', 'samsung', 'df', 'super@admin', '1John Charles', 'Villavicencio'),
(39, '1131', '2018-04-04', 'samsung', 'sda', 'super@admin', '1John Charles', 'Villavicencio'),
(40, '09', '2018-04-05', 'samsung', 'jkj', 'super@admin', '1John Charles', 'Villavicencio');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `serial_number` varchar(255) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `purchase_order_date` varchar(50) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `author_firstname` varchar(60) NOT NULL,
  `author_lastname` varchar(60) NOT NULL,
  `author_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`serial_number`, `purchase_order_no`, `color`, `manufacturer`, `purchase_order_date`, `remarks`, `author_firstname`, `author_lastname`, `author_email`) VALUES
('244', '998', 'ad', '', '', '', '', '', ''),
('24', '23424`', '234', '', '', '', '', '', ''),
('sf23', 'sfsf', 'sdf23r', '', '', '', '1John Charles', 'Villavicencio', 'super@admin');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_no`
--

CREATE TABLE `purchase_order_no` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `purchase_order_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(00017, '1John Charles', 'Villavicencio', 'Bautista', 'SuperAdmin', 'CT-DEPARTMENT', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'super@admin', '2018-03-06'),
(00077, '3John Charles', 'Villavicencio', 'Bautista', 'User', 'CT-DEPARTMENT', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@user', '2018-03-06'),
(00078, '2John Charles', 'Villavicencio', 'Bautista', 'Admin', 'CT-DEPARTMENT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-03-08'),
(00079, 'John Charles', 'Villavicencio', 'Bautista', 'SuperAdmin', 'CTD-DEPARTMENT', 'asd', '7815696ecbf1c96e6894b779456d330e', 'goku@ukog', '2018-04-02');

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
-- Indexes for table `purchase_order_no`
--
ALTER TABLE `purchase_order_no`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `purchase_order_no`
--
ALTER TABLE `purchase_order_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
