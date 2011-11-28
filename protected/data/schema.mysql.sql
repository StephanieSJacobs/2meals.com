-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2011 at 08:52 AM
-- Server version: 5.5.9
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2meals`
--
CREATE DATABASE IF NOT EXISTS `2meals` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2meals`;

-- --------------------------------------------------------

--
-- Table structure for table `DONATIONS`
--

CREATE TABLE IF NOT EXISTS `DONATIONS` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `datedonated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DONATIONS`
--


-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `DONATIONS`
--
ALTER TABLE `DONATIONS`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `USERS` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
