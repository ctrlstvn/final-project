-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 17, 2017 at 05:21 PM
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
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `class_title` varchar(40) DEFAULT NULL,
  `resource_description` varchar(50) DEFAULT NULL,
  `resource_link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `student_name`, `class_title`, `resource_description`, `resource_link`) VALUES
(1, 'Steven', 'IS448', 'XHTML Validator', 'https://validator.w3.org'),
(2, 'Reenah', 'IS247', 'Java Recursion', 'https://introcs.cs.princeton.edu/java/23recursion/'),
(3, 'Soheila', 'IS450', 'Checksums', 'https://www.lifewire.com/what-does-checksum-mean-2'),
(4, 'Stefan', 'IS310', 'Binary Addition', 'https://www.allaboutcircuits.com/textbook/digital/'),
(5, 'Youssef', 'IS448', 'CSS Validator', 'https://jigsaw.w3.org/css-validator/'),
(6, 'Reenah', 'IS450', 'Transport Layer Description', 'https://www.techopedia.com/definition/9760/transpo'),
(7, 'Steven', 'IS247', 'Loops in Java', 'http://www.learnjavaonline.org/en/Loops'),
(8, 'Soheila', 'IS310', 'TCP/IP Basics', 'https://support.microsoft.com/en-us/help/164015/un');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
