-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2005 at 06:41 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax_demo`
--
CREATE DATABASE `ajax_demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ajax_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `state`, `city`) VALUES
(1, 'Gujarat', 'Rajkot'),
(2, 'Gujarat', 'Ahmedabad'),
(3, 'Maharashtra', 'Pune'),
(4, 'Maharashtra', 'Mumbai'),
(5, 'Rajasthan', 'Udaipur'),
(6, 'Rajasthan', 'Jaipur'),
(7, 'Gujarat', 'Porbandar'),
(8, 'Rajasthan', 'Raipur'),
(9, 'Kerela', 'Cochin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `city`) VALUES
(1, 'Bhavesh', 'Joshi', 'Porbandar'),
(2, 'Mehul', 'Dhokia', 'Veraval'),
(3, 'Dhaval', 'Kher', 'Surat'),
(4, 'Nirav', 'Dattani', 'Div'),
(5, 'Savan', 'Raval', 'Mumbai');
