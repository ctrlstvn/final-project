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
-- Table structure for table `Register`
--

CREATE TABLE IF NOT EXISTS `Register` (
  `register_iD` int(11) NOT NULL AUTO_INCREMENT,
  `Last_Name` varchar(40) DEFAULT NULL,
  `First_Name` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `School` varchar(40) DEFAULT NULL,
  `security` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`register_iD`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`register_iD`, `Last_Name`, `First_Name`, `username`, `Email`, `Password`, `School`, `security`) VALUES
(1, 'youssef', 'zaki', 'yzaki', 'youssefzaki@umbc.edu', 'youssefzaki', 'UMB', 'joo'),
(6, 'Sheikh', 'Reenah', 'rsheikh1', 'rsheikh1@umbc.edu', 'umbc1234', 'UMBC', 'Sheriff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
