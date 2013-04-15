-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 12:37 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PupFetcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `puppies`
--

CREATE TABLE `puppies` (
  `puppy_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `vaccination` int(1) NOT NULL,
  `img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puppies`
--

INSERT INTO `puppies` (`puppy_id`, `name`, `breed`, `sex`, `birthday`, `location`, `price`, `vaccination`, `img_name`) VALUES
(1, 'Turk', 'Lab', 'Male', '03-02-2013\n', 'Oregon', '\n999', 1, 'img/puppic/\n11.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
