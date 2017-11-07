-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 08:23 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab6`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `firstName`, `lastName`) VALUES
(3, 'admin', 'admin@gmail.com', '2bc1ecb410e142bce83bce6f212b41e1781536dc', 'Admin', 'Admin'),
(7, 'Anna', 'hello@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'Anna', 'Rasburn'),
(8, 'admin', 'hello@gmail.com', '25ab86bed149ca6ca9c1c0d5db7c9a91388ddeab', 'Anna', 'Rasburn'),
(9, 'admin', 'hello@gmail.com', '25ab86bed149ca6ca9c1c0d5db7c9a91388ddeab', 'Anna', 'Rasburn'),
(10, 'admin', 'admin@gmail.com', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'admin', 'admin'),
(11, 'admin', 'admin@gmail.com', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'admin', 'admin'),
(12, 'admin', 'admin@admin.com', 's3cr3t', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_firstName` varchar(30) NOT NULL,
  `member_lastName` varchar(30) NOT NULL,
  `member_email` varchar(30) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_firstName`, `member_lastName`, `member_email`) VALUES
(43, 'Anna', 'Rasburn', 'hello@gmail.com'),
(44, 'asdfgh', 'asdfg', 'sdfg'),
(45, 'sdfg', 'cvb', 'cvb'),
(46, 'dfg', 'dfghj', 'dfg'),
(47, 'dfg', 'dfghj', 'dfg'),
(48, 'dfg', 'fgh', 'fgh'),
(49, 'fgh', 'ghj', 'ghj'),
(50, 'fgh', 'vfvbn', 'nm'),
(51, 'california state university', 'bay', 'fghj'),
(52, 'v', 'h', 'j'),
(53, 'j', 'g', 'j'),
(54, 'sdfghj', 'fghjk', 'dfghj'),
(55, 'f', 'g', 'h'),
(56, 'f', 'h', 'h'),
(57, 'fg', 'fgh', 'ghj'),
(58, 'fgh', 'fghj', 'fgh'),
(59, 'd', 'k', 'g'),
(60, 'g', 'j', 'o'),
(61, 's', 's', 's'),
(62, 'a', 'f', 's'),
(63, 'f', 'r', 'g'),
(64, 'f', 'k', 'u'),
(65, 'h', 'l', 'k'),
(66, 'h', 'f', 'k'),
(67, 'g', 'h', 'i'),
(68, 'h', 't', 'gt'),
(69, 'f', 'f', 'f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
