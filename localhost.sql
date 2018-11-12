-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2018 at 10:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--
CREATE DATABASE `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `hostel` varchar(100) NOT NULL,
  `block` char(1) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `complain`
--


-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Dept` text NOT NULL,
  `code` tinyint(5) NOT NULL,
  `std_total` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `Dept`, `code`, `std_total`) VALUES
(1, 'coomputer science', 0, 0),
(2, ' mathematics and statistics', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(250) NOT NULL,
  `code` text NOT NULL,
  `total` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `hostel_name`, `code`, `total`) VALUES
(1, 'Yankari', 'YANKARI', 5),
(2, 'Westend', 'WESTEND', 8),
(3, 'Intercontinental', 'INTERCONTINENTAL', 15),
(4, 'Ibas', 'IBAS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notice`
--


-- --------------------------------------------------------

--
-- Table structure for table `notice2`
--

CREATE TABLE IF NOT EXISTS `notice2` (
  `1d` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`1d`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notice2`
--


-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` char(1) NOT NULL,
  `YANKARI` int(25) NOT NULL,
  `WESTEND` int(20) NOT NULL,
  `INTERCONTINENTAL` int(200) NOT NULL,
  `IBAS` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_id`, `YANKARI`, `WESTEND`, `INTERCONTINENTAL`, `IBAS`) VALUES
(1, 'A', 4, 1, 4, 5),
(2, 'B', 0, 2, 4, 0),
(3, 'C', 1, 5, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_sex`
--

CREATE TABLE IF NOT EXISTS `room_sex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` char(1) NOT NULL,
  `sex` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `room_sex`
--

INSERT INTO `room_sex` (`id`, `room_id`, `sex`) VALUES
(1, 'A', 'M'),
(2, 'B', 'F'),
(3, 'C', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

CREATE TABLE IF NOT EXISTS `solved` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `hostel` text NOT NULL,
  `block` char(1) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `d_date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `solved`
--

INSERT INTO `solved` (`notice_id`, `user`, `hostel`, `block`, `subject`, `Description`, `Date`, `d_date`) VALUES
(1, 'ND-11-COM-FT-461', 'Yankari', 'A', 'hvk', 'mbkj', '0000-00-00 00:00:00', '2018-11-10 23:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matric_no` varchar(25) NOT NULL,
  `name` char(40) NOT NULL,
  `other` varchar(250) NOT NULL,
  `dept` tinyint(5) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `hostel` text NOT NULL,
  `block` char(1) NOT NULL,
  `room` int(100) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(1) NOT NULL,
  `addr` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matric_no` (`matric_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `matric_no`, `name`, `other`, `dept`, `mobile`, `hostel`, `block`, `room`, `dob`, `sex`, `addr`, `image`, `email`) VALUES
(6, 'ND-11-COM-FT-469', 'ILIAS', 'MID4TECH', 1, 0, 'WESTEND', 'A', 1, '0000-00-00', 'M', '', '', 'dolapo4atolagbe@gmail.com'),
(7, 'ND-11-COM-FT-467', 'DOLAPO', '', 2, 0, 'YANKARI', 'C', 2, '0000-00-00', 'M', '', '', ''),
(8, 'ND-11-COM-FT-460', 'ILIAS', '', 1, 0, 'INTERCONTINENTAL', 'C', 1, '0000-00-00', 'M', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_matric`
--

CREATE TABLE IF NOT EXISTS `student_matric` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `matric_no` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `matric_no` (`matric_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student_matric`
--

INSERT INTO `student_matric` (`ID`, `matric_no`, `pass`) VALUES
(5, 'ND-11-COM-FT-469', 'ILIAS'),
(6, 'ND-11-COM-FT-467', 'DOLAPO'),
(7, 'ND-11-COM-FT-460', 'ILIAS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `regid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `hostel` text NOT NULL,
  `block` char(1) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `addr` text NOT NULL,
  `rela` text NOT NULL,
  `sex` char(1) NOT NULL,
  `visit_date` date NOT NULL,
  `time` time NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `visitors`
--


-- --------------------------------------------------------

--
-- Table structure for table `visitors_all`
--

CREATE TABLE IF NOT EXISTS `visitors_all` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `hostel` text NOT NULL,
  `block` char(1) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `addr` text NOT NULL,
  `rela` text NOT NULL,
  `sex` char(1) NOT NULL,
  `visit_date` date NOT NULL,
  `time` time NOT NULL,
  `Date` datetime NOT NULL,
  `done` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `visitors_all`
--

