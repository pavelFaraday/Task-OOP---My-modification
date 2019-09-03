-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 08:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geo_phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `barcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `width` varchar(10) DEFAULT NULL,
  `length` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `name`, `price`, `size`, `height`, `width`, `length`, `weight`, `image`) VALUES
(190, 'SKU-5d4475', 'Home Alone (DVD)', 14, '120 MB', NULL, NULL, NULL, NULL, 'images\\products\\disc.jpg'),
(191, 'SKU-5d4475', 'CSS Lessons', 17, NULL, NULL, NULL, NULL, '0.8 KG', 'images\\products\\book.jpg'),
(192, 'SKU-5d4475', 'IKEA', 300, NULL, '200 x ', '300 x', '400 CM', NULL, 'images\\products\\furniture.jpg'),
(193, 'SKU-5d4477', 'BedRoom', 400, NULL, '600 x', '700 x', '400 CM', NULL, 'images\\products\\furniture.jpg'),
(194, 'SKU-5d4477', 'HTML', 20, NULL, NULL, NULL, NULL, '2 KG', 'images\\products\\book.jpg'),
(198, 'SKU-5d4478', 'MAKAU (MDF)', 1200, NULL, '1200 x', '300 x', '500 CM', NULL, 'images\\products\\furniture.jpg'),
(201, 'SKU-5d4479', 'DISK 2', 5, '1 GB', NULL, NULL, NULL, NULL, 'images\\products\\disc.jpg'),
(202, 'SKU-5d4479', 'BOOK 2', 23, NULL, NULL, NULL, NULL, '13 KG', 'images\\products\\book.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
