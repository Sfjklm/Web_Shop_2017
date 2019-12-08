-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 01:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `id_cat`, `category`) VALUES
(1, 1, 'man'),
(2, 2, 'woman');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category` int(200) NOT NULL,
  `subcategory` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `description` text NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `subcategory`, `name`, `brand`, `img`, `price`, `description`, `sale`) VALUES
(2, 1, 'sneakers', 'Gobert', 'Nike', 's.jpg', '211', 'Awesome sneakers especialy on rain weather', 1),
(3, 1, 'sneakers', 'Rudi', 'adidas', 'ss.jpg', '322', 'rgdhdfhdfhdhdh', 1),
(4, 1, 'sneakers', 'Nightgazer', 'Nike', 'sss.jpg', '180', 'asdadasdd', 1),
(5, 1, 'sneakers', 'Somet', 'Nike', 'HYPERVENOMX PROXIMO.jpg', '333', 'sfsfsdf', 1),
(6, 1, 'sneakers', 'Nike', 'Nike', 'PATIKE SPRINGBLADE.jpg', '111', 'fdsfdsfsf', 2),
(7, 1, 'sneakers', 'Patike', 'Nike', 'ULTRABOOST.jpg', '232', 'sdgdsgs', 1),
(8, 1, 'sneakers', 'Express', 'Nike', 'PATIKE GEL-KAYANO 23.jpg', '3', 'sdfsfdsfdsf', 2),
(9, 1, 'Sneakers ', 'Razor', 'NIke', 'PATIKE MEN''S KOBE.jpg', '2222', 'best price ', 1),
(10, 1, '1', 'manzoor', 'local', 'E:Xampp	mpphpDB26.tmp', '231', 'sdsd', 0),
(11, 1, '2', 'manzoor', 'local', 'E:Xampp	mpphpEF67.tmp', '231', 'sdsd', 0),
(12, 1, '7', 'nomi', 'pumma', 'E:Xampp	mpphpCB63.tmp', '900', 'bbbbbbb', 0),
(13, 2, '5', 'tine', 'sani', 'E:Xampp	mpphp9164.tmp', '900', 'jdewdhfsjkfds', 0),
(14, 2, '1', 'name', 'name', 'E:Xampp	mpphp540.tmp', '0', 'ffjfdjfsdjkfsdhjkf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` varchar(1111) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`) VALUES
(1, 'Sales', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sale2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `products` varchar(444) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `adress`, `products`) VALUES
(3, 'Miki', 'sd', '{"2":9,"3":15,"4":"2"}'),
(4, 'dfdf', 'sgdgd', '{"4":"2"}'),
(5, 'dfdf', 'dsfsfsdf', '{"3":"4"}'),
(6, 'vvv', 'vvv', '{"2":16,"3":"1","6":"3"}');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category` int(200) NOT NULL,
  `subcategory` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `subcategory`) VALUES
(1, 1, 'Sneakers'),
(2, 1, 'Sale'),
(3, 1, 'Tshirts'),
(5, 2, 'Sneakers'),
(6, 2, 'Dresses'),
(7, 2, 'Sale'),
(8, 3, 'New Arrivals');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `joindate`, `status`) VALUES
(5, 'Miki', 'miki@k.com', '3805fe56a0cfa92089e4a4f53d230108', '2017-07-11 22:32:36', 1),
(11, 'dsfdsfs', 'drama@drama.com', '115f89503138416a242f40fb7d7f338e', '2017-07-24 17:06:45', 1),
(10, 'admin', '', '123', '2017-07-24 16:42:23', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
