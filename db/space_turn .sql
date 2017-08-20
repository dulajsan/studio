-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2015 at 11:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `space_turn`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `total_cost` varchar(45) DEFAULT NULL,
  `standard_price` varchar(45) DEFAULT NULL,
  `extra_cost` varchar(45) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_for_date` date DEFAULT NULL,
  `studio_studio_id` int(11) NOT NULL,
  `confirm` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `fk_booking_users1` (`users_user_id`),
  KEY `fk_booking_studio1` (`studio_studio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `total_cost`, `standard_price`, `extra_cost`, `users_user_id`, `current_date`, `booking_for_date`, `studio_studio_id`, `confirm`, `comment`) VALUES
(1, '2500', '1500', '1000', 1, '0000-00-00 00:00:00', '2015-01-10', 1, 0, NULL),
(2, '2500', '1500', '1000', 1, '2015-01-10 09:11:32', '2015-01-11', 1, 1, NULL),
(5, '5500', '5500', '0', 1, '2015-01-31 13:47:53', '0000-00-00', 2, 0, 'sqasqa'),
(6, '11200', '8500', '2700', 1, '2015-01-31 13:48:48', '0000-00-00', 1, 0, 'fgr'),
(7, '5500', '5500', '0', 1, '2015-01-31 16:07:12', '0000-00-00', 2, 0, ''),
(8, '11200', '8500', '2700', 1, '2015-01-31 16:50:26', '0000-00-00', 1, 0, ''),
(9, '11200', '8500', '2700', 1, '2015-01-31 17:26:19', '0000-00-00', 1, 0, 'dfretg'),
(10, '8000', '5500', '2500', 1, '2015-02-01 04:17:27', '0000-00-00', 2, 0, 'gfrhg'),
(11, '8500', '8500', '0', 1, '2015-02-01 05:10:06', '0000-00-00', 1, 0, ''),
(12, '8500', '8500', '0', 1, '2015-02-01 07:44:12', '0000-00-00', 1, 0, 'dewfedgre'),
(13, '11000', '8500', '2500', 1, '2015-02-01 08:12:51', '0000-00-00', 1, 0, 'hfhgjgh'),
(14, '11200', '8500', '2700', 1, '2015-02-02 05:53:46', '0000-00-00', 1, 0, 'grtgtryt'),
(15, '8500', '8500', '0', 1, '2015-02-02 15:48:35', '0000-00-00', 1, 0, 'fdrgtrtryty'),
(16, '8000', '5500', '2500', 1, '2015-02-06 17:08:10', '0000-00-00', 2, 0, 'try'),
(17, '8000', '5500', '2500', 1, '2015-02-06 17:45:36', '0000-00-00', 2, 0, 'retrt'),
(18, '8000', '5500', '2500', 1, '2015-02-06 17:48:42', '0000-00-00', 2, 0, ''),
(19, '11200', '8500', '2700', 1, '2015-02-06 18:22:40', '0000-00-00', 1, 0, ''),
(20, '8700', '8500', '200', 1, '2015-02-06 18:35:46', '0000-00-00', 1, 0, ''),
(21, '11000', '8500', '2500', 1, '2015-02-06 18:41:17', '0000-00-00', 1, 0, ''),
(22, '8000', '5500', '2500', 1, '2015-02-06 18:41:58', '0000-00-00', 2, 0, ''),
(23, '11000', '8500', '2500', 1, '2015-02-06 19:02:23', '0000-00-00', 1, 0, ''),
(24, '8000', '5500', '2500', 1, '2015-04-08 04:55:33', '0000-00-00', 2, 0, ''),
(25, '12000', '5500', '6500', 1, '2015-04-08 06:47:51', '2015-03-25', 1, 1, 'Hutch'),
(26, '12000', '5500', '6500', 1, '2015-04-08 07:26:51', '2015-03-22', 1, 1, 'Nestle'),
(27, '12000', '5500', '6500', 1, '2015-04-08 07:42:04', '2015-03-16', 1, 1, NULL),
(28, '8500', '8500', '0', 1, '2015-04-08 08:36:14', '0000-00-00', 1, 0, 'dulaj'),
(29, '11200', '8500', '2700', 1, '2015-04-08 08:51:56', '0000-00-00', 1, 0, 'dj'),
(30, '11200', '8500', '2700', 1, '2015-05-01 05:28:34', '0000-00-00', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_item_id` int(11) NOT NULL DEFAULT '0',
  `session` varchar(45) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `studio_studio_id` int(11) DEFAULT NULL,
  `live` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `FK_cart_1` (`products_item_id`),
  KEY `FK_cart_2` (`studio_studio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `products_item_id`, `session`, `added_date`, `studio_studio_id`, `live`) VALUES
(3, 6, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:32', 1, NULL),
(4, 2, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(5, 5, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(6, 11, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(7, 8, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(8, 9, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(9, 7, 'hf61b5lnm3an4f22m0kglo6k87', '2015-01-30 12:51:33', 1, NULL),
(10, 2, 'iggm0g4vjb0etohtjprh847j15', '2015-01-30 12:51:33', 1, NULL),
(11, 5, 'iggm0g4vjb0etohtjprh847j15', '2015-01-30 12:51:33', 1, NULL),
(12, 6, 'iggm0g4vjb0etohtjprh847j15', '2015-01-30 12:51:33', 1, NULL),
(13, 2, 'ceq4phhvggqjltdct2v2ka1ac6', '2015-01-30 12:51:33', 1, NULL),
(14, 5, 'ceq4phhvggqjltdct2v2ka1ac6', '2015-01-30 12:51:33', 1, NULL),
(15, 6, 'ceq4phhvggqjltdct2v2ka1ac6', '2015-01-30 12:51:33', 1, NULL),
(16, 9, 'ceq4phhvggqjltdct2v2ka1ac6', '2015-01-30 12:51:33', 1, NULL),
(17, 8, 'ceq4phhvggqjltdct2v2ka1ac6', '2015-01-30 12:51:33', 1, NULL),
(18, 6, 'd71men8kkd7us6qhkn0a237gj0', '2015-01-30 12:51:33', 1, NULL),
(19, 9, 'd71men8kkd7us6qhkn0a237gj0', '2015-01-30 12:51:33', 1, NULL),
(20, 5, 'd71men8kkd7us6qhkn0a237gj0', '2015-01-30 12:51:33', 1, NULL),
(21, 2, 'd71men8kkd7us6qhkn0a237gj0', '2015-01-30 12:51:33', 1, NULL),
(22, 2, '1rnh60itcrr0qmvev33mapakm3', '2015-01-30 12:51:33', 1, NULL),
(23, 2, 'gm2s2ueeakm3enuetfmgkns094', '2015-01-30 13:29:53', 1, NULL),
(24, 10, 'gm2s2ueeakm3enuetfmgkns094', '2015-01-30 13:45:47', 1, NULL),
(25, 6, 'gm2s2ueeakm3enuetfmgkns094', '2015-01-30 13:46:06', 2, NULL),
(26, 2, 'tom2fetuo0cs10vpt8nebaoth5', '2015-01-31 10:28:34', 1, NULL),
(27, 10, 'tom2fetuo0cs10vpt8nebaoth5', '2015-01-31 10:28:42', 1, NULL),
(28, 6, 'tk86e9cbt4c5q3heeupvkdms81', '2015-02-01 04:15:05', 2, NULL),
(29, 2, 'tk86e9cbt4c5q3heeupvkdms81', '2015-02-01 08:08:56', 1, NULL),
(30, 2, 'cd266v902ha0dorbhgc8fipqk6', '2015-02-02 05:51:42', 1, NULL),
(31, 8, 'cd266v902ha0dorbhgc8fipqk6', '2015-02-02 05:52:35', 1, NULL),
(32, 2, 'sv4a4mdd3htufl2nf2aol732m2', '2015-02-02 15:49:33', 1, NULL),
(33, 6, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 17:45:36', 2, 0),
(34, 6, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 17:45:36', 2, 0),
(35, 6, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 17:48:42', 2, 0),
(36, 2, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 18:22:40', 1, 0),
(37, 10, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 18:22:40', 1, 0),
(38, 8, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 18:35:46', 1, 0),
(39, 2, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 18:41:17', 1, 0),
(40, 6, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 18:41:58', 2, 0),
(41, 2, '5eqvd04r26hlja7col0uch2lh4', '2015-02-06 19:02:24', 1, 0),
(42, 2, 'tpdl8htpta3tfvlcqb8chlm3f5', '2015-03-23 15:47:10', 1, 1),
(43, 6, 'j3ltu9vmlnu0okr1j6f2a7mhr1', '2015-04-08 04:55:33', 2, 0),
(44, 2, 'j3ltu9vmlnu0okr1j6f2a7mhr1', '2015-04-08 08:51:56', 1, 0),
(45, 10, 'j3ltu9vmlnu0okr1j6f2a7mhr1', '2015-04-08 08:51:56', 1, 0),
(46, 2, 'dsfh10g1eh11ei1jubnm1814n5', '2015-05-01 05:28:34', 1, 0),
(47, 8, 'dsfh10g1eh11ei1jubnm1814n5', '2015-05-01 05:28:34', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_text` text,
  `entered_by` int(11) NOT NULL,
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_comments_1` (`entered_by`),
  KEY `FK_comments_2` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `entered_by`, `entered_date`, `product_id`) VALUES
(1, '                \n  fantastic          ', 1, '0000-00-00 00:00:00', 5),
(2, '                \n  lovely place        ', 1, '0000-00-00 00:00:00', 5),
(3, '                \n  first aid          ', 1, '0000-00-00 00:00:00', 8),
(4, '  lovely place. i like it              \n     ', 1, '2015-01-19 19:10:27', 2),
(5, '                \n    nice place        ', 1, '2015-01-24 10:49:53', 2),
(6, '                \n    fantastic        ', 1, '2015-01-24 11:05:31', 7),
(7, '                \n    fantastic        ', 1, '2015-01-24 11:05:33', 7),
(8, '                \n     wonderful       ', 1, '2015-01-24 12:39:17', 5),
(9, '                \n   fantastic         ', 1, '2015-01-25 05:29:46', 6),
(10, '  fantastic              \n            ', 1, '2015-01-25 16:45:30', 2),
(11, '                \n   nice         ', 1, '2015-01-31 16:23:48', 2),
(12, '                \n   well         ', 1, '2015-01-31 16:24:08', 2),
(13, '                \n          gjgjh  ', 1, '2015-02-01 08:20:00', 2),
(14, '                fgfdg\n            ', 1, '2015-02-02 16:19:00', 5),
(15, 'what a lovely place                \n         ', 1, '2015-02-02 16:36:35', 5),
(16, 'fghtrht                \n            ', 1, '2015-02-02 16:38:12', 5),
(17, 'reasonable prices                 \n          ', 1, '2015-02-02 17:22:10', 5),
(18, '                \n more space           ', 1, '2015-02-02 17:38:27', 5),
(26, '                \n    nice place. we can arran', 1, '2015-02-02 19:34:01', 5),
(27, '                \n         dewdhewi r ewr hewir hewi rhewi riewhr ewirh r he hre wejro jew ewreowj o rowjr oewr   erjwe jr jew  ererjkewqk  wewqekwqe ewke kwek;;ds,d rewkrewkw ew kweekw;ellew; wjoej owjeowek  p kkewewper    ', 1, '2015-02-02 19:36:45', 8),
(28, '                \n   like it         ', 1, '2015-04-08 04:53:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
  `info_id` int(11) NOT NULL,
  `address` text,
  `tel` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`info_id`),
  KEY `fk_contact_info_users1` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extra_ordered_items`
--

CREATE TABLE IF NOT EXISTS `extra_ordered_items` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `item_cost` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `booking_booking_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_extra_ordered_items_booking1` (`booking_booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `extra_ordered_items`
--

INSERT INTO `extra_ordered_items` (`order_id`, `item_id`, `item_cost`, `quantity`, `booking_booking_id`) VALUES
(1, 2, 0, 1, 23),
(2, 6, 0, 1, 24),
(3, 2, 0, 1, 29),
(4, 10, 0, 1, 29),
(5, 2, 0, 1, 30),
(6, 8, 0, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `media_name` varchar(45) NOT NULL,
  `added_by` varchar(45) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `booking_booking_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`media_id`),
  KEY `FK_media_1` (`booking_booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_name`, `added_by`, `added_date`, `booking_booking_id`) VALUES
(1, '1.jpg', '1', '2015-04-08 07:08:59', 25),
(2, '2.jpg', '1', '2015-04-08 07:08:59', 25),
(3, '3.jpg', '1', '2015-04-08 07:08:59', 25),
(4, '4.jpg', '1', '2015-04-08 07:10:28', 25),
(5, '5.jpg', '1', '2015-04-08 07:12:13', 25),
(6, '6.jpg', '1', '2015-04-08 07:12:13', 25),
(7, '7.jpg', '1', '2015-04-08 07:12:13', 25),
(8, '8.jpg', '1', '2015-04-08 07:12:13', 25),
(9, '9.jpg', '1', '2015-04-08 07:12:13', 25),
(10, '10.jpg', '1', '2015-04-08 07:12:13', 25),
(11, '11.jpg', '1', '2015-04-08 07:12:13', 25),
(12, '1.jpg', '1', '2015-04-08 07:29:26', 26),
(13, '2.jpg', '1', '2015-04-08 07:29:26', 26),
(14, '3.jpg', '1', '2015-04-08 07:29:27', 26),
(15, '4.jpg', '1', '2015-04-08 07:29:27', 26),
(16, '5.jpg', '1', '2015-04-08 07:29:27', 26),
(17, '6.jpg', '1', '2015-04-08 07:29:27', 26),
(18, '7.jpg', '1', '2015-04-08 07:29:27', 26),
(19, '8.jpg', '1', '2015-04-08 07:29:27', 26),
(20, '9.jpg', '1', '2015-04-08 07:31:21', 26),
(21, '10.jpg', '1', '2015-04-08 07:31:21', 26),
(22, '11.jpg', '1', '2015-04-08 07:31:21', 26),
(23, '12.jpg', '1', '2015-04-08 07:31:21', 26),
(24, '13.jpg', '1', '2015-04-08 07:31:21', 26),
(25, '14.jpg', '1', '2015-04-08 07:31:21', 26),
(26, '15.jpg', '1', '2015-04-08 07:31:21', 26),
(27, '16.jpg', '1', '2015-04-08 07:31:51', 26),
(28, '17.jpg', '1', '2015-04-08 07:34:15', 26),
(29, '18.jpg', '1', '2015-04-08 07:34:15', 26),
(30, '19.jpg', '1', '2015-04-08 07:34:15', 26),
(31, '20.jpg', '1', '2015-04-08 07:36:19', 26),
(32, '21.jpg', '1', '2015-04-08 07:36:19', 26),
(33, '22.jpg', '1', '2015-04-08 07:36:20', 26),
(34, '23.jpg', '1', '2015-04-08 07:38:48', 26),
(35, '24.jpg', '1', '2015-04-08 07:38:48', 26),
(36, '25.jpg', '1', '2015-04-08 07:38:48', 26),
(37, '26.jpg', '1', '2015-04-08 07:38:48', 26),
(38, '27.jpg', '1', '2015-04-08 07:38:48', 26),
(39, '28.jpg', '1', '2015-04-08 07:38:48', 26),
(40, '29.jpg', '1', '2015-04-08 07:38:48', 26),
(41, '30.jpg', '1', '2015-04-08 07:38:48', 26),
(42, '31.jpg', '1', '2015-04-08 07:38:48', 26),
(43, '1.jpg', '1', '2015-04-08 07:46:12', 27),
(44, '2.jpg', '1', '2015-04-08 07:46:12', 27),
(45, '3.jpg', '1', '2015-04-08 07:46:12', 27),
(46, '4.jpg', '1', '2015-04-08 07:46:12', 27),
(47, '5.jpg', '1', '2015-04-08 07:46:12', 27),
(48, '6.jpg', '1', '2015-04-08 07:46:12', 27);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE IF NOT EXISTS `news_letters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `entered_date` timestamp NULL DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `fk_products_users` (`users_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `price`, `availability`, `quantity`, `entered_date`, `img`, `users_user_id`) VALUES
(2, 'Rotational Table', 2500, NULL, NULL, NULL, 'rotational_table.PNG', 1),
(5, 'White Box', 2000, NULL, NULL, NULL, 'whitebox.PNG', 1),
(6, 'Space Area', 2500, NULL, NULL, NULL, 'space.PNG', 1),
(7, 'Makeup Room', 500, NULL, NULL, NULL, 'makeup.PNG', 1),
(8, 'First Aid', 200, NULL, NULL, NULL, 'firstaid.PNG', 1),
(9, 'Gym', 400, NULL, NULL, NULL, 'gym.PNG', 1),
(10, 'Wifi Zone', 200, NULL, NULL, NULL, 'wifi.PNG', 1),
(11, 'Fire', 100, NULL, NULL, NULL, 'fire.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `stars` int(11) DEFAULT NULL,
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `users_user_id` int(11) NOT NULL,
  `products_item_id` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `fk_ratings_users1` (`users_user_id`),
  KEY `fk_ratings_products1` (`products_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=300 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `stars`, `date_entered`, `users_user_id`, `products_item_id`) VALUES
(1, 4, '0000-00-00 00:00:00', 1, 2),
(2, 4, '0000-00-00 00:00:00', 1, 2),
(3, 3, '0000-00-00 00:00:00', 1, 2),
(4, 4, '0000-00-00 00:00:00', 1, 5),
(5, 1, '0000-00-00 00:00:00', 1, 5),
(6, 4, '0000-00-00 00:00:00', 1, 2),
(7, 5, '0000-00-00 00:00:00', 1, 6),
(8, 2, '0000-00-00 00:00:00', 1, 2),
(9, 5, '0000-00-00 00:00:00', 1, 2),
(10, 4, '0000-00-00 00:00:00', 1, 2),
(11, 4, '0000-00-00 00:00:00', 1, 2),
(12, 3, '2015-01-19 19:07:07', 1, 2),
(13, 4, '2015-01-19 19:26:27', 1, 2),
(14, 4, '2015-01-24 05:26:01', 1, 5),
(15, 4, '2015-01-24 05:26:07', 1, 5),
(16, 5, '2015-01-24 05:26:09', 1, 5),
(17, 5, '2015-01-24 05:26:11', 1, 5),
(18, 5, '2015-01-24 05:26:12', 1, 5),
(19, 5, '2015-01-24 05:26:12', 1, 5),
(20, 5, '2015-01-24 05:26:12', 1, 5),
(21, 5, '2015-01-24 05:26:13', 1, 5),
(22, 5, '2015-01-24 05:26:13', 1, 5),
(23, 5, '2015-01-24 05:26:13', 1, 5),
(24, 5, '2015-01-24 05:26:13', 1, 5),
(25, 5, '2015-01-24 05:26:13', 1, 5),
(26, 5, '2015-01-24 05:26:13', 1, 5),
(27, 5, '2015-01-24 05:26:14', 1, 5),
(28, 5, '2015-01-24 05:26:14', 1, 5),
(29, 5, '2015-01-24 05:26:14', 1, 5),
(30, 5, '2015-01-24 05:26:14', 1, 5),
(31, 5, '2015-01-24 05:26:14', 1, 5),
(32, 5, '2015-01-24 05:26:14', 1, 5),
(33, 5, '2015-01-24 05:26:14', 1, 5),
(34, 5, '2015-01-24 05:26:15', 1, 5),
(35, 5, '2015-01-24 05:26:15', 1, 5),
(36, 5, '2015-01-24 05:26:15', 1, 5),
(37, 5, '2015-01-24 05:26:15', 1, 5),
(38, 5, '2015-01-24 05:26:15', 1, 5),
(39, 5, '2015-01-24 05:26:15', 1, 5),
(40, 5, '2015-01-24 05:26:15', 1, 5),
(41, 5, '2015-01-24 05:26:16', 1, 5),
(42, 5, '2015-01-24 05:26:16', 1, 5),
(43, 5, '2015-01-24 05:26:16', 1, 5),
(44, 5, '2015-01-24 05:26:16', 1, 5),
(45, 5, '2015-01-24 05:26:16', 1, 5),
(46, 5, '2015-01-24 05:26:16', 1, 5),
(47, 5, '2015-01-24 05:26:17', 1, 5),
(48, 5, '2015-01-24 05:26:17', 1, 5),
(49, 5, '2015-01-24 05:26:17', 1, 5),
(50, 5, '2015-01-24 05:26:17', 1, 5),
(51, 5, '2015-01-24 05:26:17', 1, 5),
(52, 5, '2015-01-24 05:26:17', 1, 5),
(53, 5, '2015-01-24 05:26:18', 1, 5),
(54, 5, '2015-01-24 05:26:18', 1, 5),
(55, 5, '2015-01-24 05:26:18', 1, 5),
(56, 5, '2015-01-24 05:26:18', 1, 5),
(57, 5, '2015-01-24 05:26:18', 1, 5),
(58, 5, '2015-01-24 05:26:18', 1, 5),
(59, 5, '2015-01-24 05:26:18', 1, 5),
(60, 5, '2015-01-24 05:26:19', 1, 5),
(61, 5, '2015-01-24 05:26:19', 1, 5),
(62, 5, '2015-01-24 05:26:19', 1, 5),
(63, 5, '2015-01-24 05:26:19', 1, 5),
(64, 5, '2015-01-24 05:26:19', 1, 5),
(65, 5, '2015-01-24 05:26:20', 1, 5),
(66, 5, '2015-01-24 05:26:20', 1, 5),
(67, 5, '2015-01-24 05:26:20', 1, 5),
(68, 5, '2015-01-24 05:26:20', 1, 5),
(69, 5, '2015-01-24 05:26:20', 1, 5),
(70, 5, '2015-01-24 05:26:21', 1, 5),
(71, 5, '2015-01-24 05:26:21', 1, 5),
(72, 5, '2015-01-24 05:26:21', 1, 5),
(73, 5, '2015-01-24 05:26:21', 1, 5),
(74, 5, '2015-01-24 05:26:21', 1, 5),
(75, 5, '2015-01-24 05:26:21', 1, 5),
(76, 5, '2015-01-24 05:26:22', 1, 5),
(77, 5, '2015-01-24 05:26:22', 1, 5),
(78, 5, '2015-01-24 05:26:22', 1, 5),
(79, 5, '2015-01-24 05:26:22', 1, 5),
(80, 5, '2015-01-24 05:26:23', 1, 5),
(81, 5, '2015-01-24 05:26:23', 1, 5),
(82, 5, '2015-01-24 05:26:23', 1, 5),
(83, 5, '2015-01-24 05:26:23', 1, 5),
(84, 5, '2015-01-24 05:26:23', 1, 5),
(85, 5, '2015-01-24 05:26:23', 1, 5),
(86, 5, '2015-01-24 05:26:24', 1, 5),
(87, 5, '2015-01-24 05:26:24', 1, 5),
(88, 5, '2015-01-24 05:26:24', 1, 5),
(89, 5, '2015-01-24 05:26:24', 1, 5),
(90, 5, '2015-01-24 05:26:25', 1, 5),
(91, 5, '2015-01-24 05:26:25', 1, 5),
(92, 5, '2015-01-24 05:26:25', 1, 5),
(93, 5, '2015-01-24 05:26:25', 1, 5),
(94, 5, '2015-01-24 05:26:25', 1, 5),
(95, 5, '2015-01-24 05:26:26', 1, 5),
(96, 5, '2015-01-24 05:26:26', 1, 5),
(97, 5, '2015-01-24 05:26:26', 1, 5),
(98, 5, '2015-01-24 05:26:26', 1, 5),
(99, 5, '2015-01-24 05:26:27', 1, 5),
(100, 5, '2015-01-24 05:26:27', 1, 5),
(101, 5, '2015-01-24 05:26:27', 1, 5),
(102, 5, '2015-01-24 05:26:27', 1, 5),
(103, 5, '2015-01-24 05:26:27', 1, 5),
(104, 5, '2015-01-24 05:26:28', 1, 5),
(105, 5, '2015-01-24 05:26:28', 1, 5),
(106, 5, '2015-01-24 05:26:28', 1, 5),
(107, 5, '2015-01-24 05:26:29', 1, 5),
(108, 5, '2015-01-24 05:26:29', 1, 5),
(109, 5, '2015-01-24 05:26:29', 1, 5),
(110, 5, '2015-01-24 05:26:29', 1, 5),
(111, 5, '2015-01-24 05:26:29', 1, 5),
(112, 5, '2015-01-24 05:26:29', 1, 5),
(113, 5, '2015-01-24 05:26:30', 1, 5),
(114, 5, '2015-01-24 05:26:30', 1, 5),
(115, 5, '2015-01-24 05:26:31', 1, 5),
(116, 5, '2015-01-24 05:26:31', 1, 5),
(117, 5, '2015-01-24 05:26:31', 1, 5),
(118, 5, '2015-01-24 05:26:32', 1, 5),
(119, 5, '2015-01-24 05:26:32', 1, 5),
(120, 5, '2015-01-24 05:26:32', 1, 5),
(121, 5, '2015-01-24 05:26:32', 1, 5),
(122, 5, '2015-01-24 05:26:33', 1, 5),
(123, 5, '2015-01-24 05:26:33', 1, 5),
(124, 5, '2015-01-24 05:29:17', 1, 5),
(125, 4, '2015-01-24 05:44:03', 1, 7),
(126, 5, '2015-01-24 05:44:14', 1, 7),
(127, 3, '2015-01-24 05:44:34', 1, 7),
(128, 4, '2015-01-24 05:52:25', 1, 5),
(129, 2, '2015-01-24 05:52:30', 1, 5),
(130, 2, '2015-01-24 05:52:50', 1, 2),
(131, 1, '2015-01-24 05:53:00', 1, 2),
(132, 5, '2015-01-24 05:54:34', 1, 8),
(133, 4, '2015-01-24 05:56:06', 1, 8),
(134, 1, '2015-01-24 05:56:13', 1, 8),
(135, 1, '2015-01-24 06:08:34', 1, 8),
(136, 1, '2015-01-24 06:08:38', 1, 8),
(137, 4, '2015-01-24 06:14:52', 1, 8),
(138, 5, '2015-01-24 06:14:55', 1, 8),
(139, 4, '2015-01-24 06:21:00', 1, 8),
(140, 5, '2015-01-24 06:21:04', 1, 8),
(141, 5, '2015-01-24 06:21:06', 1, 8),
(142, 5, '2015-01-24 06:21:08', 1, 8),
(143, 5, '2015-01-24 06:21:10', 1, 8),
(144, 5, '2015-01-24 06:21:12', 1, 8),
(145, 5, '2015-01-24 06:21:13', 1, 8),
(146, 5, '2015-01-24 06:21:18', 1, 8),
(147, 5, '2015-01-24 06:21:18', 1, 8),
(148, 5, '2015-01-24 06:21:21', 1, 8),
(149, 5, '2015-01-24 06:21:23', 1, 8),
(150, 5, '2015-01-24 06:21:24', 1, 8),
(151, 5, '2015-01-24 06:21:25', 1, 8),
(152, 5, '2015-01-24 06:21:25', 1, 8),
(153, 5, '2015-01-24 06:21:26', 1, 8),
(154, 5, '2015-01-24 06:21:27', 1, 8),
(155, 5, '2015-01-24 06:21:28', 1, 8),
(156, 5, '2015-01-24 06:21:28', 1, 8),
(157, 5, '2015-01-24 06:21:28', 1, 8),
(158, 5, '2015-01-24 06:21:28', 1, 8),
(159, 5, '2015-01-24 06:21:29', 1, 8),
(160, 5, '2015-01-24 06:21:29', 1, 8),
(161, 5, '2015-01-24 06:21:29', 1, 8),
(162, 5, '2015-01-24 06:21:54', 1, 8),
(163, 1, '2015-01-24 06:21:56', 1, 8),
(164, 1, '2015-01-24 06:21:58', 1, 8),
(165, 1, '2015-01-24 06:22:02', 1, 8),
(166, 1, '2015-01-24 06:22:04', 1, 8),
(167, 1, '2015-01-24 06:22:05', 1, 8),
(168, 1, '2015-01-24 06:22:05', 1, 8),
(169, 1, '2015-01-24 06:22:06', 1, 8),
(170, 1, '2015-01-24 06:22:08', 1, 8),
(171, 1, '2015-01-24 06:22:09', 1, 8),
(172, 1, '2015-01-24 06:22:09', 1, 8),
(173, 1, '2015-01-24 06:22:10', 1, 8),
(174, 1, '2015-01-24 06:22:11', 1, 8),
(175, 1, '2015-01-24 06:22:12', 1, 8),
(176, 1, '2015-01-24 06:22:15', 1, 8),
(177, 1, '2015-01-24 06:22:17', 1, 8),
(178, 4, '2015-01-24 06:33:29', 1, 2),
(179, 5, '2015-01-24 06:34:02', 1, 2),
(180, 5, '2015-01-24 06:34:17', 1, 9),
(181, 1, '2015-01-24 06:34:20', 1, 9),
(182, 1, '2015-01-24 06:34:23', 1, 9),
(183, 1, '2015-01-24 07:03:06', 1, 6),
(184, 5, '2015-01-24 10:39:54', 1, 2),
(185, 2, '2015-01-24 10:40:02', 1, 2),
(186, 2, '2015-01-24 10:40:04', 1, 2),
(187, 1, '2015-01-24 10:40:08', 1, 2),
(188, 2, '2015-01-24 11:00:01', 1, 7),
(189, 2, '2015-01-24 12:04:05', 1, 5),
(190, 2, '2015-01-24 12:04:07', 1, 5),
(191, 2, '2015-01-24 12:04:07', 1, 5),
(192, 1, '2015-01-24 12:04:13', 1, 5),
(193, 1, '2015-01-24 12:04:20', 1, 5),
(194, 1, '2015-01-24 12:04:33', 1, 7),
(195, 4, '2015-01-25 05:29:15', 1, 6),
(196, 4, '2015-01-25 05:29:16', 1, 6),
(197, 5, '2015-01-25 05:29:17', 1, 6),
(198, 5, '2015-01-25 05:29:18', 1, 6),
(199, 1, '2015-01-25 05:29:20', 1, 6),
(200, 3, '2015-01-30 13:46:40', 1, 2),
(201, 5, '2015-01-31 16:23:26', 1, 2),
(202, 4, '2015-02-01 08:19:30', 1, 2),
(203, 4, '2015-02-02 06:10:33', 1, 2),
(204, 5, '2015-02-02 06:29:38', 1, 2),
(205, 4, '2015-02-02 06:31:41', 1, 2),
(206, 2, '2015-02-02 06:32:01', 1, 2),
(207, 1, '2015-02-02 06:32:02', 1, 2),
(208, 4, '2015-02-02 17:40:06', 1, 5),
(209, 3, '2015-02-02 17:40:12', 1, 5),
(210, 5, '2015-02-02 17:40:21', 1, 5),
(211, 4, '2015-02-02 17:41:22', 1, 5),
(212, 5, '2015-02-02 17:44:06', 1, 5),
(213, 4, '2015-02-02 17:44:21', 1, 5),
(214, 3, '2015-02-02 17:44:22', 1, 5),
(215, 2, '2015-02-02 17:44:24', 1, 5),
(216, 1, '2015-02-02 17:44:25', 1, 5),
(217, 4, '2015-02-02 17:46:05', 1, 5),
(218, 5, '2015-02-02 17:46:13', 1, 5),
(219, 5, '2015-02-02 17:46:15', 1, 5),
(220, 5, '2015-02-02 17:46:18', 1, 5),
(221, 5, '2015-02-02 17:46:20', 1, 5),
(222, 2, '2015-02-02 17:46:22', 1, 5),
(223, 1, '2015-02-02 17:46:24', 1, 5),
(224, 1, '2015-02-02 17:46:36', 1, 5),
(225, 1, '2015-02-02 17:46:37', 1, 5),
(226, 1, '2015-02-02 17:46:37', 1, 5),
(227, 1, '2015-02-02 17:46:38', 1, 5),
(228, 1, '2015-02-02 17:46:38', 1, 5),
(229, 1, '2015-02-02 17:46:39', 1, 5),
(230, 1, '2015-02-02 17:46:39', 1, 5),
(231, 1, '2015-02-02 17:46:39', 1, 5),
(232, 1, '2015-02-02 17:46:39', 1, 5),
(233, 1, '2015-02-02 17:46:40', 1, 5),
(234, 1, '2015-02-02 17:46:40', 1, 5),
(235, 1, '2015-02-02 17:46:40', 1, 5),
(236, 1, '2015-02-02 17:46:40', 1, 5),
(237, 1, '2015-02-02 17:46:40', 1, 5),
(238, 1, '2015-02-02 17:46:41', 1, 5),
(239, 1, '2015-02-02 17:46:41', 1, 5),
(240, 1, '2015-02-02 17:46:41', 1, 5),
(241, 1, '2015-02-02 17:46:42', 1, 5),
(242, 1, '2015-02-02 17:46:42', 1, 5),
(243, 1, '2015-02-02 17:46:42', 1, 5),
(244, 1, '2015-02-02 17:46:43', 1, 5),
(245, 1, '2015-02-02 17:46:43', 1, 5),
(246, 1, '2015-02-02 17:46:43', 1, 5),
(247, 1, '2015-02-02 17:46:43', 1, 5),
(248, 1, '2015-02-02 17:46:43', 1, 5),
(249, 1, '2015-02-02 17:46:44', 1, 5),
(250, 1, '2015-02-02 17:46:44', 1, 5),
(251, 1, '2015-02-02 17:46:45', 1, 5),
(252, 1, '2015-02-02 17:46:45', 1, 5),
(253, 1, '2015-02-02 17:46:45', 1, 5),
(254, 1, '2015-02-02 17:46:45', 1, 5),
(255, 1, '2015-02-02 17:46:46', 1, 5),
(256, 1, '2015-02-02 17:46:47', 1, 5),
(257, 1, '2015-02-02 17:46:48', 1, 5),
(258, 1, '2015-02-02 17:46:49', 1, 5),
(259, 1, '2015-02-02 17:46:49', 1, 5),
(260, 1, '2015-02-02 17:46:49', 1, 5),
(261, 1, '2015-02-02 17:46:49', 1, 5),
(262, 1, '2015-02-02 17:46:50', 1, 5),
(263, 1, '2015-02-02 17:46:50', 1, 5),
(264, 1, '2015-02-02 17:46:50', 1, 5),
(265, 1, '2015-02-02 17:47:01', 1, 5),
(266, 1, '2015-02-02 17:47:01', 1, 5),
(267, 1, '2015-02-02 17:47:02', 1, 5),
(268, 1, '2015-02-02 17:47:02', 1, 5),
(269, 1, '2015-02-02 17:47:02', 1, 5),
(270, 1, '2015-02-02 17:47:02', 1, 5),
(271, 1, '2015-02-02 17:47:03', 1, 5),
(272, 1, '2015-02-02 17:47:03', 1, 5),
(273, 1, '2015-02-02 17:47:03', 1, 5),
(274, 1, '2015-02-02 17:47:03', 1, 5),
(275, 1, '2015-02-02 17:47:03', 1, 5),
(276, 1, '2015-02-02 17:47:03', 1, 5),
(277, 1, '2015-02-02 17:47:05', 1, 5),
(278, 1, '2015-02-02 17:47:05', 1, 5),
(279, 1, '2015-02-02 17:47:05', 1, 5),
(280, 1, '2015-02-02 17:47:05', 1, 5),
(281, 1, '2015-02-02 17:47:06', 1, 5),
(282, 1, '2015-02-02 17:47:07', 1, 5),
(283, 1, '2015-02-02 17:47:07', 1, 5),
(284, 1, '2015-02-02 17:47:08', 1, 5),
(285, 1, '2015-02-02 17:47:08', 1, 5),
(286, 1, '2015-02-02 17:47:08', 1, 5),
(287, 1, '2015-02-02 17:47:08', 1, 5),
(288, 1, '2015-02-02 17:47:08', 1, 5),
(289, 1, '2015-02-02 17:47:09', 1, 5),
(290, 1, '2015-02-02 17:47:09', 1, 5),
(291, 1, '2015-02-02 17:47:09', 1, 5),
(292, 1, '2015-02-02 17:47:09', 1, 5),
(293, 1, '2015-02-02 17:47:10', 1, 5),
(294, 1, '2015-02-02 17:47:10', 1, 5),
(295, 1, '2015-02-02 17:47:10', 1, 5),
(296, 1, '2015-02-02 17:47:10', 1, 5),
(297, 1, '2015-02-02 17:47:10', 1, 5),
(298, 4, '2015-02-02 17:52:30', 1, 5),
(299, 5, '2015-02-02 17:56:10', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `studio_id` int(11) NOT NULL AUTO_INCREMENT,
  `studio_name` varchar(45) DEFAULT NULL,
  `standard_price` double DEFAULT NULL,
  PRIMARY KEY (`studio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `studio_name`, `standard_price`) VALUES
(1, 'Main Studio', 8500),
(2, 'Mini Studio', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `studio_has_products`
--

CREATE TABLE IF NOT EXISTS `studio_has_products` (
  `studio_studio_id` int(11) NOT NULL,
  `products_item_id` int(11) NOT NULL,
  `package_included` int(11) NOT NULL,
  `published` int(11) NOT NULL,
  KEY `FK_studio_has_products_1` (`studio_studio_id`),
  KEY `FK_studio_has_products_2` (`products_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_has_products`
--

INSERT INTO `studio_has_products` (`studio_studio_id`, `products_item_id`, `package_included`, `published`) VALUES
(1, 2, 0, 1),
(1, 5, 1, 1),
(1, 6, 1, 1),
(1, 7, 1, 1),
(1, 8, 0, 1),
(1, 9, 1, 1),
(1, 10, 0, 1),
(1, 11, 1, 1),
(2, 2, 1, 1),
(2, 5, 1, 1),
(2, 6, 0, 1),
(2, 7, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `entered_date` timestamp NULL DEFAULT NULL,
  `is_valid` int(11) DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `verification_id` varchar(45) DEFAULT NULL,
  `reg_ip` varchar(45) NOT NULL,
  `last_login_ip` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `email`, `role`, `last_login`, `entered_date`, `is_valid`, `verified`, `verification_id`, `reg_ip`, `last_login_ip`, `title`, `tel`) VALUES
(1, 'dulaj', 'sanjaya', 'dulaj1993', 'dulaj.san@gmail.com', 0, NULL, NULL, 1, 1, '1', '', '', 'Mr', 0),
(2, 'pasan', 'rangana', 'pasan1995', 'pasan.rangana7@gmail.com', 0, '0000-00-00 00:00:00', NULL, 1, 1, '1', '1', '1', 'Mr', 0),
(3, 'kelum', 'rangana', 'kelum1995', 'pasan.rangana8@gmail.com', 0, '0000-00-00 00:00:00', NULL, 1, 1, '1', '1', '1', 'Mr', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_studio1` FOREIGN KEY (`studio_studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_1` FOREIGN KEY (`products_item_id`) REFERENCES `products` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cart_2` FOREIGN KEY (`studio_studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_comments_1` FOREIGN KEY (`entered_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `FK_comments_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`item_id`);

--
-- Constraints for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD CONSTRAINT `fk_contact_info_users1` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `extra_ordered_items`
--
ALTER TABLE `extra_ordered_items`
  ADD CONSTRAINT `fk_extra_ordered_items_booking1` FOREIGN KEY (`booking_booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `FK_media_1` FOREIGN KEY (`booking_booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_users` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_ratings_products1` FOREIGN KEY (`products_item_id`) REFERENCES `products` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ratings_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studio_has_products`
--
ALTER TABLE `studio_has_products`
  ADD CONSTRAINT `FK_studio_has_products_1` FOREIGN KEY (`studio_studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_studio_has_products_2` FOREIGN KEY (`products_item_id`) REFERENCES `products` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
