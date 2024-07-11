-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 09:16 AM
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
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `parole_application`
--

CREATE TABLE `parole_application` (
  `id` bigint(15) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `prno` varchar(100) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `apname` varchar(100) NOT NULL,
  `aprelation` varchar(100) NOT NULL,
  `apaddress` varchar(100) NOT NULL,
  `apemail` varchar(100) NOT NULL,
  `apphone` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `nofday` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parole_application`
--

INSERT INTO `parole_application` (`id`, `uname`, `prno`, `prname`, `apname`, `aprelation`, `apaddress`, `apemail`, `apphone`, `reason`, `nofday`, `status`, `document`) VALUES
(1, 'kannan', '134', 'farook', 'raj', 'friend', 'fhg', 'raj@gmail.com', '6756756766', 'late', '4', 'Accepted', 'info.png');

-- --------------------------------------------------------

--
-- Table structure for table `pass_application`
--

CREATE TABLE `pass_application` (
  `id` bigint(15) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `prno` varchar(100) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `apname` varchar(100) NOT NULL,
  `aprelation` varchar(100) NOT NULL,
  `apaddress` varchar(100) NOT NULL,
  `apemail` varchar(100) NOT NULL,
  `apphone` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `passdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_application`
--

INSERT INTO `pass_application` (`id`, `uname`, `prno`, `prname`, `apname`, `aprelation`, `apaddress`, `apemail`, `apphone`, `reason`, `status`, `passdate`) VALUES
(1, 'kannan', '134', 'farook', 'raj', 'friend', 'fghf', 'raj@gmail.com', '6756756766', 'late', 'Rejected', '');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_registeration`
--

CREATE TABLE `prisoner_registeration` (
  `pid` bigint(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prisonum` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `uid` bigint(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`uid`, `name`, `pnumber`, `address`, `city`, `email`, `uname`, `password`) VALUES
(1, 'Samy', '9876768765', 'try', 'TRICHY', 'tata@mail.com', 'samy', '123'),
(2, 'Kannan', '9087654321', 'Anna nagar', 'trichy', 'kannn@mail.com', 'kannan', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parole_application`
--
ALTER TABLE `parole_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_application`
--
ALTER TABLE `pass_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoner_registeration`
--
ALTER TABLE `prisoner_registeration`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parole_application`
--
ALTER TABLE `parole_application`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pass_application`
--
ALTER TABLE `pass_application`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `uid` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
