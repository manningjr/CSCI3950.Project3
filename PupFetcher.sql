-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 10:56 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `PupFetcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `puppy_id` varchar(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `puppies`
--

CREATE TABLE `puppies` (
  `puppy_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `vaccination` int(1) NOT NULL,
  `img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puppies`
--

INSERT INTO `puppies` (`puppy_id`, `name`, `breed`, `sex`, `size`, `birthday`, `location`, `price`, `vaccination`, `img_name`) VALUES
(1, 'Turk', 'Labrador', 'Male', 'Large', '03-02-2013\n', 'Oregon', '\n999', 1, 'img/puppic/\n11.jpg'),
(2, 'Buddy', 'Golden Retriever', 'Male', 'Large', '04-10-2013', 'Florida', '\n1099', 1, 'img/puppic/\n2.jpg'),
(13, 'Cinnamon', 'Irish Setter', 'Male', 'Large', '04-10-2013', 'Missouri', '800', 1, 'img/puppic/13.jpg'),
(14, 'Charles', 'Irish Wolfhound', 'Male', 'Extra Large', '12-02-2011', 'Georgia', '600', 1, 'img/puppic/14.jpg'),
(15, 'Droopy', 'Bloodhound', 'Male', 'Extra Large', '01-13-2013', 'Mississippi', '700', 2, 'img/puppic/15.jpg'),
(16, 'Lady', 'Cocker Spaniel', 'Female', 'Medium', '03-20-2013', 'Kentucky', '725', 1, 'img/puppic/16.jpg'),
(17, 'Benji', 'Icelandic Sheepdog', 'Male', 'Medium', '04-01-2013', 'Colorado', '755', 2, 'img/puppic/17.jpg'),
(18, 'Lucca', 'Irish Doodle', 'Male', 'Large', '06-10-2012', 'Ohio', '600', 1, 'img/puppic/18.jpg'),
(19, 'Peach', 'Sheepdog', 'Female', 'Medium', '01-24-2013', 'Montana', '700', 1, 'img/puppic/19.jpg'),
(20, 'Bella', 'Shih Tzu', 'Female', 'Small', '03-01-2013', 'Missouri', '775', 1, 'img/puppic/20.jpg'),
(21, 'Bernie', 'Saint Bernard', 'Female', 'Extra Large', '02-04-2013', 'Montana', '700', 1, 'img/puppic/21.jpg'),
(22, 'Samster', 'German Shepherd', 'Male', 'Large', '04-02-2013', 'Texas', '800', 2, 'img/puppic/22.jpg'),
(23, 'Bailey', 'Bernese Mountain', 'Male', 'Extra Large', '03-23-2013', 'Washington', '800', 1, 'img/puppic/23.jpg'),
(24, 'Kola', 'Labrador', 'Male', 'Large', '04-03-2013', 'Georgia', '600', 2, 'img/puppic/24.jpg'),
(25, 'Trip', 'Border Collie', 'Male', 'Medium', '02-17-2013', 'Rhode Island', '715', 1, 'img/puppic/25.jpg'),
(26, 'Nola', 'Cocker Spaniel', 'Female', 'Medium', '04-08-2013', 'Virginia', '700', 2, 'img/puppic/26.jpg'),
(27, 'Aussie', 'Australian Shepherd', 'Male', 'Large', '04-06-2013', 'North Carolina', '680', 2, 'img/puppic/27.jpg'),
(28, 'Traveler', 'Beagle', 'Male', 'Medium', '03-11-2013', 'Colorado', '700', 1, 'img/puppic/28.jpg'),
(29, 'Pooh', 'Chow Chow', 'Female', 'Large', '04-01-2013', 'Maryland', '800', 1, 'img/puppic/29.jpg'),
(30, 'Wishbone', 'Jack Russel', 'Male', 'Small', '02-05-2013', 'Georgia', '650', 1, 'img/puppic/30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `member_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(15) NOT NULL,
  `card_number` int(16) NOT NULL,
  `security_code` int(3) NOT NULL,
  `street` varchar(150) NOT NULL,
  `apt` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zip` varchar(5) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
