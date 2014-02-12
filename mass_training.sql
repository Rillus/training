-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2014 at 08:58 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mass_training`
--
CREATE DATABASE IF NOT EXISTS `mass_training` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mass_training`;

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(256) NOT NULL,
  `val1_unit` varchar(11) NOT NULL,
  `conjunctive` varchar(256) NOT NULL,
  `val2_unit` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `type`, `val1_unit`, `conjunctive`, `val2_unit`) VALUES
(1, 'run', 'km', 'in', 'minutes'),
(2, 'lose', 'kg', 'from a starting weight of', 'kg'),
(3, 'gain', 'kg', 'from a starting weight of', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE IF NOT EXISTS `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(256) NOT NULL,
  `val1` varchar(99) NOT NULL,
  `val2` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `user_id`, `action`, `val1`, `val2`) VALUES
(1, 1, 'run', '2', '1'),
(2, 1, 'lose', '3', '49'),
(3, 1, 'run', '2', '2'),
(4, 1, 'run', '45', '45'),
(5, 1, 'lose', '18', '18'),
(6, 1, 'gain', '1', '1'),
(7, 1, 'gain', '1', '1'),
(8, 1, 'gain', '1', '1'),
(9, 1, 'gain', '1', '1'),
(10, 1, 'gain', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
