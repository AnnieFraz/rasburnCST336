-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 10:53 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `midterm_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp_county`
--

CREATE TABLE IF NOT EXISTS `mp_county` (
  `county_id` int(5) NOT NULL,
  `state_id` int(5) NOT NULL,
  `county_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp_county`
--

INSERT INTO `mp_county` (`county_id`, `state_id`, `county_name`) VALUES
(101, 100, 'Fresno'),
(102, 100, 'Monterey'),
(103, 100, 'Kings'),
(104, 100, 'Kern'),
(105, 100, 'Santa Cruz'),
(106, 100, 'San Benito'),
(201, 200, 'Knox'),
(202, 200, 'Clay'),
(203, 200, 'Pecos');

-- --------------------------------------------------------

--
-- Table structure for table `mp_state`
--

CREATE TABLE IF NOT EXISTS `mp_state` (
  `state_id` int(5) NOT NULL,
  `state_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp_state`
--

INSERT INTO `mp_state` (`state_id`, `state_name`) VALUES
(100, 'California'),
(200, 'Texas');

-- --------------------------------------------------------

--
-- Table structure for table `mp_town`
--

CREATE TABLE IF NOT EXISTS `mp_town` (
  `town_id` int(5) NOT NULL,
  `town_name` varchar(50) DEFAULT NULL,
  `county_id` int(5) NOT NULL,
  `population` int(7) DEFAULT NULL,
  PRIMARY KEY (`town_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp_town`
--

INSERT INTO `mp_town` (`town_id`, `town_name`, `county_id`, `population`) VALUES
(1, 'Biola', 101, 1004614),
(2, 'Easton', 101, 186239),
(3, 'Chualar', 102, 86998),
(4, 'Soledad', 102, 66163),
(5, 'Pajaro', 102, 46736),
(6, 'Hanford', 103, 32505),
(7, 'Kern City', 104, 31020),
(8, 'Burlington', 201, 30951),
(9, 'Knox', 201, 27175),
(10, 'Clay', 202, 22051),
(11, 'Norwood', 203, 21987),
(12, 'Pecos', 203, 20735);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
