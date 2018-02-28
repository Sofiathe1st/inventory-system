-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 06:26 AM
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
(00017, 'John Charles', 'Villavicencio', 'Bautista', 'SuperAdmin', 'CTD', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'super@admin', '2018-02-20 09:40:39'),
(00018, 'Ashishu', 'San', 'as', 'Admin', 'CTD', 'ashishu', '27e098fb765d13bbba7a886d3b61fd47', 'ashishu@ashishu', '2018-02-23 16:25:56'),
(00020, 'Kazuto', 'Kirigaya', 'k', 'User', 'CSD', 'kirito', '4e3a77ce388ff804ba20ab589fc6069d', 'kirito@kirito', '2018-02-21 16:25:44'),
(00043, 'John Charles', 'Villavicencio', 'Bautista', 'User', 'CSD', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'adada@adaa', '2018-02-23 15:08:29'),
(00049, 'John Charles', 'Villavicencio', 'Bautista', 'Admin', 'HRD', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', '2018-02-26 09:53:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
