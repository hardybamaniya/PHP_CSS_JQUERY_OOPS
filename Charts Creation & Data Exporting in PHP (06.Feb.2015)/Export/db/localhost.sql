-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2015 at 08:21 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `export_db`
--
CREATE DATABASE `export_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `export_db`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `course` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL,
  `code` varchar(10) NOT NULL,
  `subject` longtext NOT NULL,
  `type` varchar(12) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Courses' AUTO_INCREMENT=75 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `course`, `sem`, `code`, `subject`, `type`) VALUES
(1, 'MSc', 1, 'P-01', 'Object Oriented Programming using Visual C++', 'T'),
(2, 'MSc', 1, 'P-02', 'O.S. and Network Management', 'T'),
(3, 'MSc', 1, 'P-03', 'RDBMS & Advanced Database Administration', 'T'),
(4, 'MSc', 1, 'P-04', 'Practical-1', 'P'),
(5, 'MSc', 1, 'P-05', 'Project-1', 'P'),
(6, 'MSc', 2, 'P-06', 'Web Programming-1', 'T'),
(7, 'MSc', 2, 'P-07', 'Linux Admin. & Linux Networking', 'T'),
(8, 'MSc', 2, 'P-08', 'Group Paper - Java/.Net/Networking/Fund. of Graphics', 'T'),
(9, 'MSc', 2, 'P-09', 'Practical-2', 'P'),
(10, 'MSc', 2, 'P-10', 'Project-2', 'P'),
(11, 'MSc', 3, 'P-11', 'Web Programming-2', 'T'),
(12, 'MSc', 3, 'P-12', 'Advanced Software Engineering', 'T'),
(13, 'MSc', 3, 'P-13', 'Group Paper - J2EE/Asp.Net/Multimedia using Flash/High Performance Computing', 'T'),
(14, 'MSc', 3, 'P-14', 'Practical-3', 'P'),
(15, 'MSc', 3, 'P-15', 'Project-3', 'P'),
(16, 'MSc', 4, 'P-16', 'Industrial Project', 'P'),
(17, 'PGDCA', 1, 'CS-01', 'Computer Fundamental & Networking', 'T'),
(18, 'PGDCA', 1, 'CS-02', 'Programming in ''C''', 'T'),
(19, 'PGDCA', 1, 'CS-03', 'Programming in Visual Basic 6.0', 'T'),
(20, 'PGDCA', 1, 'CS-04', 'Web Scripting Languages', 'T'),
(21, 'PGDCA', 1, 'CS-05', 'Practical (Based on CS-02, CS-04)', 'P'),
(22, 'PGDCA', 1, 'CS-06', 'Practical (Based on CS-03)', 'P'),
(23, 'PGDCA', 2, 'CS-07', 'RDBMS Using Oracle', 'T'),
(24, 'PGDCA', 2, 'CS-08', 'Web Based App. Developing using PHP', 'T'),
(25, 'PGDCA', 2, 'CS-09', 'VB.Net Programming', 'T'),
(26, 'PGDCA', 2, 'CS-10', 'Practical (Based on CS-07, CS-09)', 'P'),
(27, 'PGDCA', 2, 'CS-11', 'Practical (Based on CS-08)', 'P'),
(28, 'PGDCA', 2, 'CS-12', 'Project - Viva', 'P'),
(29, 'DCS', 1, 'CS-01', 'Computer Basic & Web Technologies', 'T'),
(30, 'DCS', 1, 'CS-02', '''C'' Language', 'T'),
(31, 'DCS', 1, 'CS-03', 'DBMS using FoxPro', 'T'),
(32, 'DCS', 1, 'CS-04', 'Practical & Viva (HTML & MS-Office)', 'P'),
(33, 'DCS', 1, 'CS-05', 'Practical & Viva (C-Lang. & FoxPro)', 'P'),
(34, 'DCS', 2, 'CS-06', 'Dev. Application in Visual Basic 6.0', 'T'),
(35, 'DCS', 2, 'CS-07', 'Intro. and Use of RDBMS (MS-Access)', 'T'),
(36, 'DCS', 2, 'CS-08', 'Practical & Viva Based on Visaul Basic', 'P'),
(37, 'DCS', 2, 'CS-09', 'Practical & Viva Based on Access', 'P'),
(38, 'DCS', 2, 'CS-10', 'Project Viva', 'P'),
(39, 'BCA', 1, 'CS-01', 'Communication Skills', 'T'),
(40, 'BCA', 1, 'CS-02', 'Programming in C', 'T'),
(41, 'BCA', 1, 'CS-03', 'Comp. Fundamental & Emerging Tech.', 'T'),
(42, 'BCA', 1, 'CS-04', 'Networking & Internet Environment', 'T'),
(43, 'BCA', 1, 'CS-05', 'Practical Based on CS-04 & PC-Software', 'P'),
(44, 'BCA', 1, 'CS-06', 'Practical Based on CS-02', 'P'),
(45, 'BCA', 2, 'CS-07', 'Advance C & Data Structure', 'T'),
(46, 'BCA', 2, 'CS-08', 'Dev. App. In Visual Basic 6.0', 'T'),
(47, 'BCA', 2, 'CS-09', 'Comp. Organization & Architecture', 'T'),
(48, 'BCA', 2, 'CS-10', 'Maths. & Stat. of Computer Science', 'T'),
(49, 'BCA', 2, 'CS-11', 'Practical Based on CS-07', 'P'),
(50, 'BCA', 2, 'CS-12', 'Practical Based on CS-08', 'P'),
(51, 'BCA', 3, 'CS-13', 'SAD, Software Quality Assurance & Testing', 'T'),
(52, 'BCA', 3, 'CS-14', 'C++ and Object Oriented Programming', 'T'),
(53, 'BCA', 3, 'CS-15', 'RDBMS using Oracle', 'T'),
(54, 'BCA', 3, 'CS-16', 'Web Development using PHP', 'T'),
(55, 'BCA', 3, 'CS-17', 'Practical (Based on CS-13, CS-14)', 'P'),
(56, 'BCA', 3, 'CS-18', 'Practical (Based on CS-15, CS-16)', 'P'),
(57, 'BCA', 4, 'CS-19', 'Programming with Java', 'T'),
(58, 'BCA', 4, 'CS-20', 'Programming with C#', 'T'),
(59, 'BCA', 4, 'CS-21', 'Network Technology & Administration', 'T'),
(60, 'BCA', 4, 'CS-22', 'O.S. Concepts with Unix/Linux', 'T'),
(61, 'BCA', 4, 'CS-23', 'Practical (Based on CS-19, CS-22)', 'P'),
(62, 'BCA', 4, 'CS-24', 'Practical (Based on CS-20)', 'P'),
(63, 'BCA', 5, 'CS-25', 'Advanced Java Programming (J2EE)', 'T'),
(64, 'BCA', 5, 'CS-26', 'Programming with ASP.NET', 'T'),
(65, 'BCA', 5, 'CS-27', 'Web Searching Technology & Search Engine Optimization', 'T'),
(66, 'BCA', 5, 'CS-28', 'Practical-1 based on CS-25', 'P'),
(67, 'BCA', 5, 'CS-29', 'Practical-2 based on CS-26 & CS-27', 'P'),
(68, 'BCA', 5, 'CS-30', 'Project Viva', 'P'),
(69, 'BCA', 6, 'CS-31', 'Mobile Computing using Android & iPhone', 'T'),
(70, 'BCA', 6, 'CS-32', 'Data Warehousing & Data Mining', 'T'),
(71, 'BCA', 6, 'CS-33', 'Administration of SQL Server 2012', 'T'),
(72, 'BCA', 6, 'CS-34', 'Practical-1 based on CS-31', 'P'),
(73, 'BCA', 6, 'CS-35', 'Practical-2 based on CS-32 & CS-33', 'P'),
(74, 'BCA', 6, 'CS-36', 'Project Viva', 'P');
