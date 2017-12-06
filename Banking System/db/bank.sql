-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2013 at 12:10 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `acct_no`
--

CREATE TABLE `acct_no` (
  `id` int(4) NOT NULL auto_increment,
  `acct` varchar(20) NOT NULL default '',
  `used` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `acct` (`acct`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `acct_no`
--

INSERT INTO `acct_no` (`id`, `acct`, `used`) VALUES
(1, '000-111-1212', 'yes'),
(2, '000-222-1212', 'yes'),
(3, '000-333-1212', 'no'),
(4, '000-444-1212', 'no'),
(5, '000-555-1212', 'no'),
(6, '000-666-1212', 'no'),
(7, '000-777-1212', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(4) NOT NULL auto_increment,
  `acct` varchar(20) NOT NULL default '',
  `depo` int(15) NOT NULL default '0',
  `event` varchar(20) NOT NULL default '',
  `time` varchar(30) NOT NULL default '',
  `day` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `acct`, `depo`, `event`, `time`, `day`) VALUES
(1, '000-111-1212', 1000, 'Deposit', '11:49:32am', '18 Sep 2013'),
(2, '000-111-1212', 1300, 'Deposit', '11:52:26am', '18 Sep 2013'),
(3, '000-111-1212', 500, 'Withdrawal', '11:52:55am', '18 Sep 2013'),
(4, '000-222-1212', 500, 'Deposit', '11:53:28am', '18 Sep 2013'),
(5, '000-111-1212', 500, 'Transfer', '11:55:13am', '18 Sep 2013');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL auto_increment,
  `acct` varchar(20) NOT NULL default '',
  `card` varchar(30) NOT NULL default '',
  `name` varchar(30) NOT NULL default '',
  `pword` varchar(80) NOT NULL default '',
  `role` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `acct` (`acct`),
  UNIQUE KEY `card` (`card`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `acct`, `card`, `name`, `pword`, `role`) VALUES
(1, '000-111-1212', '123', 'Mehul Dhokia', '5d41402abc4b2a76b9719d911017c592', 'user'),
(2, '000-222-1212', '456', 'Vipul Dhokia', '7d793037a0760186574b0282f2f435e7', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `myacct`
--

CREATE TABLE `myacct` (
  `id` int(4) NOT NULL auto_increment,
  `acct` varchar(20) NOT NULL default '',
  `card` varchar(30) NOT NULL default '',
  `name` varchar(30) NOT NULL default '',
  `depo` int(15) NOT NULL default '0',
  `day` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `acct` (`acct`),
  UNIQUE KEY `card` (`card`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `myacct`
--

INSERT INTO `myacct` (`id`, `acct`, `card`, `name`, `depo`, `day`) VALUES
(1, '000-111-1212', '123', 'Mehul Dhokia', 1300, '18 Sep 2013'),
(2, '000-222-1212', '456', 'Vipul Dhokia', 1000, '18 Sep 2013');
