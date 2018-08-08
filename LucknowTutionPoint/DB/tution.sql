-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2015 at 01:09 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(30) DEFAULT NULL,
  `tid` varchar(30) DEFAULT NULL,
  `uid` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'Pending',
  `tstatus` varchar(30) DEFAULT 'Pending',
  `refer` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `fid`, `tid`, `uid`, `status`, `tstatus`, `refer`) VALUES
(1, 'Frm2', 'ganesh', 'manoharbisht02@gmail.com', 'Alloted', 'Alloted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `fid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`fid`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(200) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `contact`, `msg`) VALUES
('Testing', 'abc@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `fid` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `fee1` decimal(6,2) DEFAULT NULL,
  `fee2` decimal(6,2) DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fid`, `name`, `class`, `gender`, `area`, `address`, `email`, `contact`, `fee1`, `fee2`, `pic`, `uid`) VALUES
('Frm1', 'Kamlesh Singh', 'InterMediate', 'M', 'Kalyanpur', 'House No-512/29, Kalyanpur, Lucknow (UP)', 'kamlesh12@gmail.com', '9898989898', '500.00', '2000.00', 'stu/il_570xN.377261483_1wjx.jpg', 'ajay@gmail.com'),
('Frm2', 'Ajay Shukla', 'InterMediate', 'M', 'Kalyanpur', 'House NO- 512/88,Sector-H, Kalyanpur, Lucknow(UP)', 'ajayshukla@gmail.com', '9898989898', '500.00', '2000.00', 'stu/victorinox-knife-pocket-signature-pen-knife-i4e707ae37d920.jpg', 'manoharbisht02@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newstable`
--

CREATE TABLE IF NOT EXISTS `newstable` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newstable`
--

INSERT INTO `newstable` (`nid`, `news`) VALUES
(1, 'Welcomes you all in Tution Point'),
(2, 'Get register on free of cost');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `tid` varchar(30) NOT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `degree` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tid`, `pass`, `name`, `gender`, `area`, `degree`, `address`, `pic`) VALUES
('ajay4u', '123', 'Ajay Yadav', 'M', 'Aliganj', 'PG', 'House No: 512/57, Aliganj, Lucknow(U.P.)', 'upload/Group of students - 104385359.jpg'),
('ganesh', '123', 'Ganesh Pandey', 'M', 'Kalyanpur', 'PG', 'Kalyanpur, Lucknow, U.P.(India)', 'upload/ic_launcher.png'),
('nabbu', '123', 'Naveen Singh', 'M', 'Khurram Nagar', 'PG', 'Khurram Nagar, Lucknow(UP)            ', 'upload/12 (8).JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `area` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `pass`, `area`) VALUES
('abc@gmail.com', '123', 'Indira Nagar'),
('ajay@gmail.com', '123', 'Kalyanpur'),
('manoharbisht02@gmail.com', '123', 'Kalyanpur'),
('rahul1990@gmail.com', '123', 'Aliganj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
