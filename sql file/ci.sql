-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 08:03 AM
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
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(50) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `item_type` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_no`, `purchase_order_date`, `category`, `supplier`, `quantity`, `item_type`, `price`, `remarks`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(75, '1213', '2018-05-04', 'Other', 'LAZADA', 2, 'Not Applicable', 16000, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(76, '0001', '2018-05-04', 'Hardware', 'LAZADA', 2, 'Computer', 50000, 'i7 4Gb RAM 500Gb HDD', 'super@admin', 'John Charles', 'Villavicencio'),
(80, '123123', '2018-05-04', 'Hardware', 'LAZADA', 2, '3', 23, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(84, '233', '2018-05-21', 'Software', 'LAZADA', 2, 'LCD Monitor', 50000, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(85, '12333', '2018-05-21', 'Hardware', 'HMR', 2, 'laptop', 15000, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(86, '1', '2018-05-21', 'Hardware', 'HMR', 20, '23', 123123, 'ad', 'super@admin', 'John Charles', 'Villavicencio'),
(87, '002', '2018-05-22', 'Hardware', 'HMR', 2, 'laptop', 2000, 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(88, '003', '2018-05-22', 'Hardware', 'HMR', 12, 'asd', 1231231, 'aasd', 'super@admin', 'John Charles', 'Villavicencio');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(15) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `name_sh` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `item_type` varchar(250) NOT NULL,
  `specifications` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `author_firstname` varchar(60) NOT NULL,
  `author_lastname` varchar(60) NOT NULL,
  `author_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `purchase_order_no`, `purchase_order_date`, `category`, `serial_number`, `name_sh`, `manufacturer`, `quantity`, `assigned_to`, `item_type`, `specifications`, `price`, `supplier`, `status`, `color`, `remarks`, `author_firstname`, `author_lastname`, `author_email`) VALUES
(1, '0003', '2018-05-04', 'Hardware', '00327-35038-41362-AAOEM', 'ASUS X405U', 'ASUS', 1, 'John Charles Villavicencio', 'Laptop', 'i5-7200U\r\n4gb RAM\r\n1TB HDD\r\nWIN10', 20000, 'LAZADA', 'Working', 'Gray', 'Request 1 new laptop for new employee.', 'John Charles', 'Villavicencio', 'super@admin'),
(17, 'asd2', '2018-05-04', 'Other', '0233-123-3453-234s-234d', 'Samsung Galaxy Note S3 Neo ', 'Samsung', 1, 'John Charles Villavicencio', 'Phone', '2GB RAM\nAndroid 10.2\n', 12500, 'LAZADA', 'Spare', 'Green', 'ad123', 'John Charles', 'Villavicencio', 'super@admin'),
(18, 'asd2', '2018-05-04', 'Other', '0233-123-3453-234s-221a', 'Samsung Galaxy Note S3 Neo ', 'Samsung', 1, 'John Charles Villavicencio', 'Phone', '2GB RAM\nAndroid 10.2\n', 12500, 'LAZADA', 'Defective', 'Pink', 'ad123', 'John Charles', 'Villavicencio', 'super@admin'),
(19, '0001', '2018-05-04', 'Hardware', '12', 'asd', 'asd', 1, 'asd', 'Computer', 'asd', 25000, 'LAZADA', 'Working', 'asd', 'i7 4Gb RAM 500Gb HDD', 'John Charles', 'Villavicencio', 'super@admin'),
(20, '0001', '2018-05-04', 'Hardware', '123', 'asd', 'asd', 1, 'asd', 'Computer', 'asd', 25000, 'LAZADA', 'Working', 'asd', 'i7 4Gb RAM 500Gb HDD', 'John Charles', 'Villavicencio', 'super@admin'),
(21, '002', '2018-05-22', 'Hardware', '000231', 'asus 123', 'asus', 1, 'john diaz', 'laptop', 'x405u', 1000, 'HMR', 'Working', 'white', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(22, '002', '2018-05-22', 'Hardware', '000234', 'hp 123', 'hp', 1, 'jovert galang', 'laptop', 'x405u', 1000, 'HMR', 'Working', 'gray', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(23, '002', '2018-05-22', 'Hardware', '12313', 'asd', 'qwe', 1, 'asd', 'laptop', 'asdad', 1000, 'HMR', 'Working', 'asd', 'asd', 'John Charles', 'Villavicencio', 'super@admin'),
(24, '002', '2018-05-22', 'Hardware', '12313', 'asd', 'asd', 1, 'asd', 'laptop', 'asd', 1000, 'HMR', 'Working', 'asd', 'asd', 'John Charles', 'Villavicencio', 'super@admin');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `region` varchar(150) NOT NULL,
  `province` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `contact_no`, `region`, `province`, `city`, `address`, `status`) VALUES
(1, 'HMR', 'NA', 'NA', 'NA', 'NA', 'NA', 'active'),
(2, 'LAZADA', 'NA', 'NA', 'NA', 'NA', 'NA', 'active');

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
(00077, 'John Charles', 'Villavicencio', 'Bautista', 'User', 'ITD-DEPARTMENT', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@user', '2018-05-09'),
(00078, 'John Charles', 'Villavicencio', 'Bautista', 'Admin', 'CT-DEPARTMENT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-05-21');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
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
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
