-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 09:17 AM
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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `purchase_order_inv` varchar(255) NOT NULL,
  `item_details` varchar(1000) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `item_name_w_details` varchar(1000) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `manufacturer`, `serial_number`, `purchase_order_inv`, `item_details`, `remarks`, `item_name_w_details`, `color`) VALUES
(00001, 'asd', 'asd', 'asd', '123', 'asdadad', 'asdd', 'pinkuh'),
(00002, 'asd', 'asd', 'asd', '123', 'asdadad', 'asdd', 'pinkuh'),
(00003, 'steam', '12345', 'asd', 'staff of perflex', 'rubick staff', 'Rubick staff-staff of perflex- Gold', 'gold'),
(00004, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(00005, 'Steam', '123-456-789', '0921', 'Ripper\'s reel', 'Hook', 'Pudge hook- Ripper\'s reel - Gold', 'gold'),
(00006, 'Steam', '192.168', '123', 'fxx', 'fsgfdg', 'kjkj', 'kjjgf'),
(00007, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe'),
(00008, '123', '123', '123', '123', '123', '123', '123'),
(00009, 'ppp', 'pppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` int(5) UNSIGNED ZEROFILL NOT NULL,
  `purchase_order_no` varchar(255) NOT NULL,
  `purchase_order_date` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_po`, `purchase_order_no`, `purchase_order_date`, `quantity`, `category`, `amount`, `remarks`) VALUES
(00001, '123', '2018-03-12', 2, 'Television', 3, 'adasdff'),
(00002, '123', '2018-03-12', 2, 'Television', 3, 'adasdff');

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
  `dateregistered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `type`, `department`, `username`, `password`, `email`, `dateregistered`) VALUES
(00017, '1John Charles', 'Villavicencio', 'Bautista', 'SuperAdmin', 'CT-DEPARTMENT', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'super@admin', '2018-03-06 16:28:50'),
(00077, '3John Charles', 'Villavicencio', 'Bautista', 'User', 'CT-DEPARTMENT', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@user', '2018-03-06 16:28:50'),
(00078, '2John Charles', 'Villavicencio', 'Bautista', 'Admin', 'CT-DEPARTMENT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-03-08 08:36:12'),
(00079, 'Firstnamed', 'Lastnamed', 'Middlenamed', 'SuperAdmin', 'CT-DEPARTMENT', 'usersdad', '67117df1e2ca460c52084ca261aa85e8', 'adad@add', '2018-03-08 09:53:37'),
(00081, 'Kazuto', 'Kirigaya', 'Kirito', 'SuperAdmin', 'CT-DEPARTMENT', 'kirito', '4e3a77ce388ff804ba20ab589fc6069d', 'kirito@kirito', '2018-03-09 11:07:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_po` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
