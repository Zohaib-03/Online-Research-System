-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2019 at 06:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`) VALUES
('admin', '123456'),
('sdsdfdf', '5454');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `name` varchar(1000) NOT NULL,
  `userName` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `paper` varchar(1000) NOT NULL,
  `pPaper` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `userName`, `password`, `department`, `education`, `picture`, `paper`, `pPaper`) VALUES
('arsal tariq', 'arsal1234', '123456', 'Computer Science', 'BS Computer Science', 'images/5.PNG', 'noFile', 'paper/59543010_1619216964880348_8987994896887447552_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(100) NOT NULL,
  `rollNumber` varchar(1000) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `supervise` varchar(1000) NOT NULL,
  `picture` varchar(10000) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `supervisorUserName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `rollNumber`, `department`, `password`, `status`, `supervise`, `picture`, `supervisorUserName`) VALUES
('arsal Tariq', '15f8246', 'Computer Science', '123456', 'approved', 'arsal tariq', 'images/6.PNG', 'arsal1234'),
('Mahain', '15f856', 'Computer Science', '123456', 'approved', 'stdsl Tariq', 'images/6.PNG', ''),
('asim', '15f8108', 'Computer Science', '123456', 'approved', 'no supervisor', 'images/6.PNG', 'no supervisor'),
('nayyar', '15f8233', 'BBA', '123456', 'approved', 'arsal tariq', 'images/c.jpg', 'arsal1234'),
('husnain', '15f8287', 'Computer Science', '123456', 'approved', 'arsal tariq', 'images/c.jpg', 'arsal1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
