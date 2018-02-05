-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2018 at 01:36 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_donation_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` int(5) NOT NULL AUTO_INCREMENT,
  `cate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `cate`) VALUES
(1, 'Blood');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `did` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `organ` varchar(100) DEFAULT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`did`, `uid`, `age`, `gender`, `organ`, `blood`, `address`, `city`, `district`, `pincode`, `state`, `country`) VALUES
(1, 1, '30', 'Male', 'Kidney', 'O-', 'AABS Infotech,2nd floor, NM Complex, ARRS MUltiplex Road', 'salem', 'salem', '636004', 'tamilnadu', 'India'),
(2, 2, '29', 'Male', 'Eye', 'A-', 'Salem', 'Salem', 'Salem', '636004', 'TN', 'India'),
(3, 3, '26', 'Female', 'Kidneys', 'AB+', 'kovilmedu', 'coimbatore', 'coimbatore', '6422122', 'tamilnadu', 'india'),
(4, 4, '22', 'Female', 'Heart', 'AB+', 'hjh', 'hh', 'gfg', 'gh', 'gghg', 'g'),
(5, 5, '40', 'Female', 'Heart', 'O+', 'cbe', 'cbe', 'cbe', '641035', 'tn', 'india'),
(6, 6, '20', 'Female', 'Heart', 'O+', 'cbe', 'cbe', 'cbe', '641035', 'tn', 'india'),
(7, 7, '20', 'Female', 'Kidneys', 'O+', 'cbe', 'cbe', 'cbe', 'Pincode', 'tamilnadu', 'india'),
(8, 8, '20', 'Female', 'Pancreas', 'B+', '11/2 peria bickatty', 'coimbatore', 'nilgiris', '643202', 'tamilnadu', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `name`, `mobile`, `address`) VALUES
(1, 'pgsbaskar@gmail.com', 'baskar', 'Baskar P', '9003620888', 'AABS Infotech,2nd floor, NM Complex, ARRS MUltiplex Road'),
(2, 'arun@gmail.com', '123', 'Arun', '9874563210', NULL),
(3, 'bhuvanakarthi88@gmail.com', '23456', 'bhuvanakarthi', '9843800568', NULL),
(4, 'priyanga.mgmca@gmail.com', 'priyanga', 'priyanga', '8122540840', NULL),
(5, 'ssentha@gmail.com', 'sentha', 'sentha', '9876543210', NULL),
(6, 'poorni@gmail.com', 'poorni', 'poorni', '9876543210', NULL),
(7, 'ramyashanker25@gmail.com', 'kinderjoy', 'ramya', '84896868665', NULL),
(8, 'ashwiniani1997@gmail.com', 'rrffrr', 'ashwini', '9786383594', NULL),
(9, 'ramyashanker25@gmail.com', 'eeeeee', 'remya', '8489676765', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
