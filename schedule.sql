-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 17, 2017 at 05:22 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `steven16`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `tutor_name` varchar(50) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `class_title` varchar(40) DEFAULT NULL,
  `week_day` varchar(40) DEFAULT NULL,
  `available_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `username`, `tutor_name`, `email_address`, `class_title`, `week_day`, `available_time`) VALUES
(1, '', 'Steven', 'steven@me.com', 'IS448', 'Monday', '8:00 am to 9:00 am'),
(2, '', 'Steven', 'steven@me.com', 'IS450', 'Tuesday', '9:00 am to 10:00 am'),
(3, '', 'Steven', 'steven@me.com', 'IS310', 'Wednesday', '8:00 am to 9:00 am'),
(4, '', 'Soheila', 'soheila@me.com', 'IS448', 'Monday', '8:00 am to 9:00 am'),
(5, '', 'Soheila', 'soheila@me.com', 'IS450', 'Monday', '8:00 am to 9:00 am'),
(6, '', 'Stefan', 'stefan@me.com', 'IS448', 'Friday', '1:00 pm to 2:00 pm'),
(7, 'yzaki', 'Youssef', 'youssef@me.com', 'IS448', 'Monday', '8:00 am to 9:00 am'),
(8, 'rsheikh1', 'Reenah', 'reenah@me.com', 'IS310', 'Monday', '8:00 am to 9:00 am'),
(9, '', 'Reenah', 'reenah@me.com', 'IS450', 'Monday', '8:00 am to 9:00 am'),
(10, 'rsheikh1', 'Reenah', 'reenah@me.com', 'IS450', 'Monday', '11:00 am to 12:00 pm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
