-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 06:30 AM
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
-- Table structure for table `inventory_hardware`
--

CREATE TABLE `inventory_hardware` (
  `id` int(250) NOT NULL,
  `asset_type` varchar(250) NOT NULL,
  `asset_num` varchar(250) NOT NULL,
  `type_item` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `specifications` varchar(500) NOT NULL,
  `date_purchased` date NOT NULL,
  `amount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `author_email` varchar(250) NOT NULL,
  `author_firstname` varchar(250) NOT NULL,
  `author_lastname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `inventory_hardware`
--

INSERT INTO `inventory_hardware` (`id`, `asset_type`, `asset_num`, `type_item`, `brand`, `assigned_to`, `specifications`, `date_purchased`, `amount`, `status`, `comment`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(1, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(3, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(4, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(5, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(7, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(8, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(9, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(11, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(12, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(13, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(15, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(16, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(17, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(19, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(20, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(21, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(23, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(24, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(25, 'Hardware', 'Mouse0001', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(26, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(27, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(29, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(30, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio'),
(31, 'Hardware', '1234', 'Laptop', 'Asus', 'asd', 'asasdadasd', '2018-04-18', 'asdd', 'Working', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(33, 'Hardware', '12323', 'mouse', 'acer', 'asd asd', '1d fs sa', '2017-11-30', '12314123', 'Defective', 'asd', 'super@admin', 'John Charles', 'Villavicencio'),
(34, 'Hardware', 'sdad', 'addada', 'dadad', 'adasd', 'adasdad', '2018-05-24', 'asdada', 'Spare', 'dadad', 'super@admin', 'John Charles', 'Villavicencio');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_software`
--

CREATE TABLE `inventory_software` (
  `id` int(250) NOT NULL,
  `asset_type` varchar(250) NOT NULL,
  `software_name` varchar(250) NOT NULL,
  `software_info` varchar(500) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `date_purchased` date NOT NULL,
  `amount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `author_email` varchar(250) NOT NULL,
  `author_firstname` varchar(250) NOT NULL,
  `author_lastname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_software`
--

INSERT INTO `inventory_software` (`id`, `asset_type`, `software_name`, `software_info`, `assigned_to`, `quantity`, `date_purchased`, `amount`, `status`, `comments`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(3, 'Software', 'Macrohard Office 2010', 'Macrohard Office 2010 HB', 'John Charles Villavicencio', '2', '2018-05-19', '8999', 'Working', 'Macrohard Office 2010 assigned to John Charles Villavicencio', 'super@admin', 'John Charles', 'Villavicencio'),
(4, 'Software', 'asdad', 'adada', 'sdasda', 'sdaadasd', '2018-05-09', '111111111', 'Defective', 'asdada', 'super@admin', 'John Charles', 'Villavicencio'),
(7, 'Software', 'Macrohard Office 2010', 'Macrohard Office 2010 HB', 'John Charles Villavicencio', '2', '2018-05-19', '8999', 'Working', 'Macrohard Office 2010 assigned to John Charles Villavicencio', 'super@admin', 'John Charles', 'Villavicencio'),
(8, 'Software', 'asdad', 'adada', 'sdasda', 'sdaadasd', '2018-05-09', '222223', 'Defective', 'asdada', 'super@admin', 'John Charles', 'Villavicencio'),
(11, 'Software', 'Macrohard Office 2010', 'Macrohard Office 2010 HB', 'John Charles Villavicencio', '2', '2018-05-19', '8999', 'Working', 'Macrohard Office 2010 assigned to John Charles Villavicencio', 'super@admin', 'John Charles', 'Villavicencio'),
(12, 'Software', 'asdad', 'adada', 'sdasda', 'sdaadasd', '2018-05-09', '12144444', 'Defective', 'asdada', 'super@admin', 'John Charles', 'Villavicencio'),
(15, 'Software', 'Macrohard Office 2010', 'Macrohard Office 2010 HB', 'John Charles Villavicencio', '2', '2018-05-19', '8999', 'Working', 'Macrohard Office 2010 assigned to John Charles Villavicencio', 'super@admin', 'John Charles', 'Villavicencio'),
(16, 'Software', 'asdad', 'adada', 'sdasda', 'sdaadasd', '2018-05-09', '53321', 'Defective', 'asdada', 'super@admin', 'John Charles', 'Villavicencio');

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
  `asset_type` varchar(250) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `name_sh` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_firstname` varchar(255) NOT NULL,
  `author_lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_no`, `purchase_order_date`, `asset_type`, `manufacturer`, `name_sh`, `quantity`, `category`, `price`, `remarks`, `author_email`, `author_firstname`, `author_lastname`) VALUES
(75, '1213', '2018-05-04', 'Software', 'sharp', 'macrohard', 2, 'Not Applicable', 15000, 'asd', 'admin@admin', 'John Charles', 'Villavicencio');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(15) NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `asset_type` varchar(250) NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `name_sh` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `assigned_to` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `specifications` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
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

INSERT INTO `purchase_order_details` (`id`, `purchase_order_no`, `purchase_order_date`, `asset_type`, `serial_number`, `name_sh`, `manufacturer`, `quantity`, `assigned_to`, `category`, `specifications`, `price`, `status`, `color`, `remarks`, `author_firstname`, `author_lastname`, `author_email`) VALUES
(1, '123123ad', '2018-05-04', '0', 'asd', '0', 'toshiba', 1, 'asd', 'Computer', 'asd', 12, 'Working', 'asd', '12asd', 'John Charles', 'Villavicencio', 'admin@admin'),
(2, '123123ad', '2018-05-04', '0', 'asd', '0', 'toshiba', 1, 'asd', 'Computer', 'asd', 12, 'Working', 'asd', '12asd', 'John Charles', 'Villavicencio', 'admin@admin'),
(3, '1213', '2018-05-04', 'Software', 'dsa', 'macrohard', 'sharp', 1, 'charles', 'Not Applicable', 'na', 7500, 'Defective', 'na', 'asd', 'John Charles', 'Villavicencio', 'admin@admin'),
(4, '1213', '2018-05-04', 'Software', 'asd', 'macrohard', 'sharp', 1, 'charles', 'Not Applicable', 'na', 7500, 'Defective', 'na', 'asd', 'John Charles', 'Villavicencio', 'admin@admin');

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
(00078, 'John Charles', 'Villavicencio', 'Bautista', 'Admin', 'CT-DEPARTMENT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_hardware`
--
ALTER TABLE `inventory_hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_software`
--
ALTER TABLE `inventory_software`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `inventory_hardware`
--
ALTER TABLE `inventory_hardware`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `inventory_software`
--
ALTER TABLE `inventory_software`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
