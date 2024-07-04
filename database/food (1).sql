-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 08:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `sessionid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`, `sessionid`) VALUES
(116, 'fries', 60, 'fries.jpg', 5, '0'),
(117, 'tomato-onion burger', 80, 'bu1.jpg', 1, '0'),
(118, 'paneer chilli pizza', 200, 'piz3.jpg', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `Phone`, `email`, `message`) VALUES
(11, 'Dev Chauhan', 9827365880, 'dev23@mail.com', 'Nice Service. '),
(13, 'nikhil', 8992837409, 'nikhil12@mail.in', 'fast service as compared to other suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `corder`
--

CREATE TABLE IF NOT EXISTS `corder` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `number` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `total_products` varbinary(600) NOT NULL,
  `total_price` int(255) NOT NULL,
  `ord_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `corder`
--

INSERT INTO `corder` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `pin_code`, `total_products`, `total_price`, `ord_date`) VALUES
(36, 'Dev Chauhan ', 9067715176, 'devchauhan26@gmail.com', 'credit cart', 'alkapuri socity', 'rajpardi', 'jhagadia', 966555, 'farmhouse pizza  (3) , patti samosa (1) ', 600, '2023-04-07 08:10:54'),
(37, 'nikhil', 8448939822, 'nikhil78@mail.in', 'UPI Apps', 'rampur society', 'nilkhantdham', 'kheda', 865412, 'tomato-onion burger (1) , thums-up (2) , fried curcure momos (1) ', 260, '2023-04-07 11:22:25'),
(38, 'Meet Patel', 9067715176, 'meet@yahoo.in', 'cash on delivery', 'alkapuri socity', 'rajpardi', 'jhagadia', 966555, 'tomato-onion burger (1) , thums-up (2) , fried curcure momos (1) ', 260, '2023-04-07 11:26:36'),
(42, 'sonali jepal', 7033619845, 'sonali76@mail.in', 'credit cart', '187/manohar park society ', 'behing ssg hospital', 'somatalav', 855693, 'fries (5) ', 300, '2023-04-12 02:50:44'),
(43, 'rahil', 9054124121, 'xyz@gmail.com', 'cash on delivery', 'abc colony', 'xyz township', 'Ankleshwar', 123456, 'fries (5) , tomato-onion burger (1) , paneer chilli pizza (1) ', 580, '2023-04-12 06:35:46'),
(44, 'rahil', 9898675698, 'xyz@gmail.com', 'cash on delivery', 'abc colony', 'xyz township', 'Ankleshwar', 123456, 'fries (5) , tomato-onion burger (1) , paneer chilli pizza (1) , aloo tikki burger (1) , yellow paradise burger (1) , indi-tandoori pizza (1) , farmhouse pizza  (1) ', 1190, '2023-04-12 06:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(59, 'tomato-onion burger', 80, 'bu1.jpg'),
(60, 'aloo tikki burger', 70, 'bu5.jpg'),
(61, 'yellow paradise burger', 100, 'bu3.jpg'),
(62, 'farmhouse pizza ', 190, 'download.jpg'),
(63, 'paneer chilli pizza', 200, 'piz3.jpg'),
(64, 'indi-tandoori pizza', 250, 'piz.jpg'),
(65, 'fried curcure momos', 120, 'mo.jpg'),
(66, 'steam shezwan momos', 70, 'momo.jpg'),
(67, 'tandoori momos', 140, 'mos.jpg'),
(68, 'green sandwich', 40, 'saan1.jpg'),
(69, 'cheesy garlic bread', 60, 'san1.jpg'),
(85, 'patti samosa', 40, 'smk.jpg'),
(89, 'coca-cola', 30, 'xox.jpg'),
(90, 'sprite', 30, 'sprite.jpg'),
(91, 'Maja', 50, 'maza.jpg'),
(92, 'thums-up', 30, 'thumsup.jpg'),
(93, 'pepsi', 30, 'pepsi.jpg'),
(94, 'cola zero sugar', 30, 'colaz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE IF NOT EXISTS `try` (
  `name` text NOT NULL,
  `ph` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`name`, `ph`, `password`) VALUES
('dev', 98798798, 'dcjhsdblckd'),
('dscsdc', 85289, 'oy978jlk'),
('dev', 98798798, 'dcjhsdblckd'),
('dscsdc', 85289, 'oy978jlk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
