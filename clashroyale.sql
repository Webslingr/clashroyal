-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2020 at 11:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clashroyale`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `name_on_card` varchar(150) NOT NULL,
  `card_number` int(25) NOT NULL,
  `cvv` int(3) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `type` enum('Visa','Mastercard','American Express','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `name_on_card`, `card_number`, `cvv`, `exp_month`, `exp_year`, `type`) VALUES
(1, 'shahanah', 2147483647, 123, 7, 2020, 'Visa'),
(2, 'shahanah', 2147483647, 123, 8, 2021, 'Visa'),
(3, 'shahanah', 2147483647, 123, 8, 2021, 'Visa'),
(4, 'shahanah', 2147483647, 123, 12, 2025, 'Mastercard'),
(5, 'shahanah', 2147483647, 987, 12, 2022, 'Visa'),
(6, 'shahanah', 2147483647, 123, 12, 2033, 'Visa'),
(7, 'shahanah', -1, -1, -1, -1, 'Visa'),
(8, 'shahanah', -1, -1, -1, -1, 'Visa'),
(9, 'shahanah', -1, -1, -1, -1, 'Visa'),
(10, 'shahanah', -1, -1, -1, -1, 'Visa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `platform` enum('Android','iOS') NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `platform`, `message`) VALUES
(1, 'Shahanah', 'shahanahbp@gmail.com', 'Gater', 'Android', 'bisou'),
(2, 'Shahanah', 'shahanahbp@gmail.com', 'Gater', 'Android', 'bisou'),
(3, 'Shahanah', 'shahanahbp@gmail.com', 'Gater', 'Android', 'bisou');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `country` enum('England','Mauritius','USA') NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `name`, `country`, `address`, `city`, `phone_number`, `email`, `price`) VALUES
(1, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57849364, 'shahanahbp@gmail.com', 25),
(2, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57836475, 'shahanahbp@gmail.com', 25),
(3, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57836475, 'shahanahbp@gmail.com', 25),
(4, 'Shahanah', 'England', 'kot bb', 'Vacoas', 56788765, 'shahanahbp@gmail.com', 25),
(5, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50),
(6, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50),
(7, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50),
(8, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50),
(9, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50),
(10, 'Shahanah', 'Mauritius', 'sadally rd', 'vacoas', 57835473, 'shahanahbp@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(4) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_des` varchar(75) NOT NULL,
  `price` int(3) NOT NULL,
  `type` enum('Tshirt','Action Figure','Statue','keychain') NOT NULL,
  `product_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_des`, `price`, `type`, `product_image`) VALUES
('P001', 'Black Hog Shirt', '\"Ride to live, Live to Ride\" Hog Rider Club Shirt', 25, 'Tshirt', 'img/shop/shirts/black_hog_shirt.png'),
('P002', 'Ice Wizard Shirt', 'What\'s cooler than being cool? Being an Ice Wizard!', 25, 'Tshirt', 'img/shop/shirts/ice_wiz_shirt.png'),
('P003', 'PEKKA Shirt', 'Bring out the big swords with this awesome P.E.K.K.A shirt.', 25, 'Tshirt', 'img/shop/shirts/pekka_shirt.png'),
('P004', 'PEKKA(2) Shirt', 'P.E.K.K.A says grab style by the horns.', 25, 'Tshirt', 'img/shop/shirts/pekka_shirt_2.png'),
('P005', 'Red Hog Shirt', 'Celebrate Clash\'s favorite power couple - Hog and Rider ', 25, 'Tshirt', 'img/shop/shirts/red_hog_shirt.png'),
('P006', 'Black Skull Shirt', 'Air it out! Attack style from above with this unique shirt.', 25, 'Tshirt', 'img/shop/shirts/skull_shirt_black.png'),
('P007', 'Red Skull Shirt', 'Air it out! Attack style from above with this 2017 series shirt.', 25, 'Tshirt', 'img/shop/shirts/skull_shirt_red.png'),
('P008', 'Archer', 'This figure is right on point.', 25, 'Action Figure', 'img/shop/action/archer.png'),
('P009', 'Barbarian', 'A poignant mix of raw power and perfect facial hair.', 25, 'Action Figure', 'img/shop/action/barbarian.png'),
('P010', 'Pekka', 'Majestic enough to make all your other robots jealous.', 25, 'Action Figure', 'img/shop/action/pekka.png'),
('P011', 'Prince', 'Our most handsome figure... complete with a well-polished lance.', 25, 'Action Figure', 'img/shop/action/prince.png'),
('P012', 'Wizard', 'Conjur up the awe of all your house guests. Non-flammable.', 25, 'Action Figure', 'img/shop/action/wizard.png'),
('P013', 'Gold Pekka Statue', 'The most flashy P.E.K.K.A around.', 125, 'Statue', 'img/shop/statue/pekka_gold.png'),
('P014', 'Stone Pekka Statue', 'P.E.K.K.A has always been the strong silent type.\n', 80, 'Statue', 'img/shop/statue/pekka_stone.png'),
('P015', 'Balloon', 'These promoted skeletons enjoy destroying defenses.', 10, 'keychain', 'img/shop/keychain/balloon.png'),
('P016', 'Clash Of Clan', 'Clash of clan keychain', 10, 'keychain', 'img/shop/keychain/coc.png'),
('P017', 'Golem', 'The mighty Golem loves to soak up damage.', 10, 'keychain', 'img/shop/keychain/golem.png'),
('P018', 'Healer', 'This majestic creature lives to protect and aid her fellow troops.', 10, 'keychain', 'img/shop/keychain/healer.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(25) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(75) NOT NULL,
  `age` int(3) NOT NULL,
  `password` varchar(25) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `name`, `email`, `age`, `password`, `gender`) VALUES
('superhxman', 'Shahanah', 'shahanah@gmail.com', 22, '1234', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
