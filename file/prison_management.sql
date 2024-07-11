-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2022 at 11:42 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prison_management`
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
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parole_application`
--

INSERT INTO `parole_application` (`id`, `uname`, `prno`, `prname`, `apname`, `aprelation`, `apaddress`, `apemail`, `apphone`, `reason`, `nofday`, `status`) VALUES
(1, '', '123', 'sam', 'Samy', 'son', 'try', 'samy@mail.com', '9090909009', 'marriage', '12', 'Rejected'),
(2, 'samy', '123', 'sam', 'Samy', 'son', 'trichy', 'samy@mail.com', '9090909009', 'marriage', '2', 'Accepted'),
(3, 'kannan', '101', 'Ashok', 'Kannan', 'Brother', 'trichy', 'kannan@mail.com', '9090909009', 'marriage', '2', 'Accepted');

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
(1, 'samy', '123', 'sam', 'Samy', 'son', 'try', 'samy@mail.com', '9090909009', 'marriage', 'Rejected', ''),
(2, 'samy', '123', 'sam', 'Samy', 'son', 'try', 'samy@mail.com', '9090909009', 'marriage', 'Accepted', '2022-02-26');

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
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner_registeration`
--

INSERT INTO `prisoner_registeration` (`pid`, `name`, `prisonum`, `gender`, `address`, `email`, `pnumber`, `uname`, `password`) VALUES
(2, 'sam', '123', 'Male', 'trichy', 'san@mail.com', '9876768765', 'sam', '123'),
(3, 'tata', '321', 'Male', 'trichy', 'tata@mail.com', '9876768765', '', ''),
(4, 'Ashok', '101', 'Male', 'no2, kk nagar, trichy', 'ashok@mail.com', '8908907654', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `uid` bigint(15) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`uid`, `name`, `pnumber`, `address`, `city`, `email`, `uname`, `password`) VALUES
(1, 'Samy', '9876768765', 'try', 'TRICHY', 'tata@mail.com', 'samy', '123'),
(2, 'Kannan', '9087654321', 'Anna nagar', 'trichy', 'kannn@mail.com', 'kannan', '123');
