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
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `profileID` int(10) NOT NULL AUTO_INCREMENT,
  `about` varchar(2000) NOT NULL,
  `education` varchar(2000) NOT NULL,
  `subjects` varchar(2000) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`profileID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileID`, `about`, `education`, `subjects`, `username`) VALUES
(44, 'my name is youssef', 'UMD', 'HTML', 'yzaki'),
(45, 'My name is Reenah Sheikh. I like school.', 'UMBC, IS Major', 'IS448\r\n', 'rsheikh1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
