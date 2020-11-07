-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2020 at 01:19 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laurenreynarddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Space Rocks', 5.95, 'Beer', '2020-11-07 13:08:07', '2020-11-07 13:08:07', 'Imperial Stout', 'img/rocket1.jpg', 'img/rocket1.jpg'),
(2, 'Mars Retreat', 6.96, 'Beer', '2020-11-07 13:08:48', '2020-11-07 13:08:48', 'Sour Gose', 'img/rocket2.jpg', 'img/rocket2.jpg'),
(3, 'Asteroid Ascending', 5.95, 'Beer', '2020-11-07 13:09:42', '2020-11-07 13:09:42', 'Double IPA', 'img/rocket3.jpg', 'img/rocket3.jpg'),
(4, 'Astroid Attack', 5.95, 'Beer', '2020-11-07 13:10:26', '2020-11-07 13:10:26', 'Pale Lager', 'img/rocket4.jpg', 'img/rocket4.jpg'),
(5, 'Space Walk', 6.96, 'Beer', '2020-11-07 13:11:02', '2020-11-07 13:11:02', 'Pilsner', 'img/rocket5.jpg', 'img/rocket5.jpg'),
(6, 'Mars Explorer', 5.95, 'Beer', '2020-11-07 13:11:41', '2020-11-07 13:11:41', 'Amber Ale', 'img/rocket6.jpg', 'img/rocket6.jpg'),
(7, 'Jupiter Drops', 6.96, 'Beer', '2020-11-07 13:12:18', '2020-11-07 13:12:18', 'Vienna Lager', 'img/rocket7.jpg', 'img/rocket7.jpg'),
(8, 'Saturns Rings', 6.96, 'Beer', '2020-11-07 13:12:56', '2020-11-07 13:12:56', 'Pale Ale', 'img/rocket8.jpg', 'img/rocket8.jpg'),
(9, 'Rocket Fuel', 5.95, 'Beer', '2020-11-07 13:13:35', '2020-11-07 13:13:35', 'Baltic Porter', 'img/rocket9.jpg', 'img/rocket9.jpg'),
(10, 'Beer Glass', 11.95, 'Merchandise', '2020-11-07 13:14:45', '2020-11-07 13:14:45', 'Authentic Rocket Brewing Co. Beer Glass etched with our logo', 'img/rocket10.jpg', 'img/rocket10.jpg'),
(11, 'Rocket T-Shirt', 26.96, 'Merchandise', '2020-11-07 13:15:39', '2020-11-07 13:15:39', 'Authentic Rocket Brewing Co. T-shirt', 'img/rocket11.jpg', 'img/rocket11.jpg'),
(12, 'Rocket Brewing Co. Phone Case', 8.95, 'Merchandise', '2020-11-07 13:16:34', '2020-11-07 13:16:34', 'Authentic Rocket Brewing Co. Phone Case in White', 'img/rocket12.jpg', 'img/rocket12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
