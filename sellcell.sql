-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2020 at 01:28 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sellcell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Address1` varchar(20) NOT NULL,
  `Address2` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `Address1`, `Address2`, `State`, `Pincode`, `Phone`) VALUES
(1, 'deepika', 'dee_agrawal5@yahoo.com', '3dcec89bbac898667700f0d73db88a90', 'rohini', 'sector 9', 'delhi', '110085', '7289017078');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `pimage` varchar(20) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`mid`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'deepika', 'dee_agrawal5@yahoo.com', 'hello', 'hnjk');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `pimage` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `order_no` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`pid`, `pname`, `price`, `username`, `number`, `pimage`, `date`, `order_no`) VALUES
(3, 'Vivo V15 Pro', 28990, 'deepika', 9, 'image/vivo.jpeg', '2019-03-28', 17599),
(20, 'Samsung Galaxy J8', 15990, 'deepika', 10, 'image/samsung-2.jpeg', '2019-03-28', 17599),
(7, 'Redmi Note 6 Pro', 13999, 'deepika', 11, 'image/redmi.jpeg', '2019-03-29', 13577),
(3, 'Vivo V15 Pro', 28990, 'deepika', 12, 'image/vivo.jpeg', '2019-04-30', 29291),
(23, 'Redmi Y2', 7999, 'deepika', 13, 'image/redmi-3.jpeg', '2019-04-30', 29291),
(12, 'Vivo Y91', 10990, 'deepika', 14, 'image/vivo-3.jpeg', '2019-04-30', 29291);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `username` varchar(20) NOT NULL,
  `order_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `confirm` int(11) NOT NULL,
  `date` date NOT NULL,
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `order_no`, `amount`, `confirm`, `date`, `order_id`) VALUES
('deepika', 17599, 50378, 1, '2019-03-28', 6),
('deepika', 13577, 15679, 1, '2019-03-29', 7),
('deepika', 5417, 41428, 1, '2019-04-30', 8),
('deepika', 29291, 53736, 1, '2019-04-30', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PId` int(11) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(30) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `pimage` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `RAM` varchar(20) NOT NULL,
  `camera` varchar(20) NOT NULL,
  PRIMARY KEY (`PId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `Pname`, `Company`, `Price`, `pimage`, `color`, `RAM`, `camera`) VALUES
(3, 'Vivo V15 Pro', 'Vivo', 28990, 'image/vivo.jpeg', 'red', '4 GB', '15 megapixel'),
(4, 'Oppo K1', 'Oppo', 16990, 'image/new_1.jpeg', 'pink', '2 GB', '14 megapixel'),
(5, 'Honor 10 Lite', 'Honor', 13999, 'image/new_honor.jpeg', 'black', '3 GB', '13 megapixel'),
(6, 'Asus ZenFone Max Pro M2 ', 'Asus', 13999, 'image/new_asus.jpeg', 'white', '2 GB', '13 megapixel'),
(7, 'Redmi Note 6 Pro', 'Xiomi', 13999, 'image/redmi.jpeg', 'black', '3 GB', '12 megapixel'),
(8, 'Samsung Galaxy A9', 'Samsung', 30990, 'image/samsung.jpeg', 'red', '2 GB', '15 Megapixel'),
(9, 'Lenovo A5', 'Lenovo', 5999, 'image/new_lenovo.jpeg', 'black', '3 GB ', '8 megapixel'),
(10, 'Asus ZenFone Lite L1', 'Asus', 4999, 'image/asus.jpeg', 'black', '3 GB ', '6 megapixel'),
(11, 'Vivo V11', 'Vivo', 19990, 'image/vivo-2.jpeg', 'black', '4 GB', '15 megapixel'),
(12, 'Vivo Y91', 'Vivo', 10990, 'image/vivo-3.jpeg', 'white', '4 GB', '15 megapixel'),
(13, 'Oppo F9 Pro', 'Oppo', 19990, 'image/oppo-2.jpeg', 'pink', '3 GB ', '12 megapixel'),
(14, 'Oppo A83', 'Oppo', 13990, 'image/oppo-3.jpeg', 'red', '3 GB ', '12 megapixel'),
(15, 'Honor 9N', 'Honor', 10499, 'image/honor-2.jpeg', 'white', '4 GB', '13 megapixel'),
(16, 'Honor 7A', 'Honor', 7999, 'image/honor-3.jpeg', 'red', '2 GB', '13 megapixel'),
(17, 'Asus ZenFone 5Z', 'Asus', 28999, 'image/asus-2.jpeg', 'white', '2 GB', '14 megapixel'),
(18, 'Lenovo K9', 'Lenovo', 8999, 'image/lenovo-3.jpeg', 'pink', '2 GB', '10 megapixel'),
(19, 'Lenovo K8 Note', 'lenovo', 8499, 'image/lenovo-2.jpeg', 'red', '3 GB', '10 megapixel'),
(20, 'Samsung Galaxy J8', 'samsung', 15990, 'image/samsung-2.jpeg', 'white', '2 GB', '13 megapixel'),
(21, 'Samsung Galaxy On Nxt', 'Samsung', 10490, 'image/samsung-3.jpeg', 'pink', '3 GB', '13 megapixel'),
(22, 'Redmi Note 5 pro', 'Xiomi', 11999, 'image/redmi-2.jpeg', 'white', '2 GB', '13 megapixel'),
(23, 'Redmi Y2', 'xiomi', 7999, 'image/redmi-3.jpeg', 'red', '3 GB', '10 megapixel'),
(24, 'iphone', 'iphone', 15000, 'images/fghj', 'red', '2 gb', '15 megapixel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Address1` varchar(20) NOT NULL,
  `Address2` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Address1`, `Address2`, `State`, `Pincode`, `Phone`) VALUES
(1, 'deepika', 'dee_agrawal5@yahoo.com', '3dcec89bbac898667700f0d73db88a90', 'rohini', 'sector 9', 'delhi', '110085', '7289017078'),
(2, 'harsh', 'deeagrawal5@gmail.com', 'd75bd8ee7cd48f662d96b6b29b93bf48', 'home', 'school', 'new delhi', '110085', '9521402097'),
(3, 'guru', 'guru@gmail.com', '77e69c137812518e359196bb2f5e9bb9', 'pachim vihar', 'delhi', 'delhi', '110085', '12345678'),
(5, 'jyoti', 'cute_jyoti16@gmail.com', '1411a3e2bd0e7c77fd51adc1e17a834e', 'rohini', 'delhi', 'delhi', '110085', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pimage` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
