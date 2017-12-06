-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2013 at 12:23 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emp_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` varchar(5) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `desig` varchar(15) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `sal` decimal(8,2) NOT NULL,
  `hiredate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Employee Information';

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `ename`, `desig`, `dept`, `sal`, `hiredate`) VALUES
('M001', 'Ram', 'Manager', 'Marketing', '22000.00', '1998-08-08'),
('F001', 'Laxman', 'Supervisor', 'Finance', '17000.00', '2007-04-02'),
('M002', 'Bharat', 'Supervisor', 'Marketing', '20000.00', '2002-02-20'),
('S001', 'Shatrugn', 'Manager', 'Sales', '26000.00', '2007-04-02');
