-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(65, 2, 'mohamed gomaa with child', 200, 1, 'bash.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 2, 'abdoo', 'abdoomes@gmail.com', '01102759273', 'asdojpeiwqfhoewhfoehw'),
(12, 2, 'abdoo', 'admin01@gmail.com', '12345621', 'ojasdihfeuwiqhf\r\nasdwq'),
(13, 2, 'abdoo', '0ik@gmail.com', '123456', 'sadfouiew\\\r\n'),
(14, 2, 'dark', 'abdoomes1@gmail.com', '01102759273', '010275957'),
(15, 3, 'abdoo', 'abdoom@gmail.com', '01102759273', 'aopjsafo\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(11, 2, 'dark', '01102759273', 'abdoomes@gmail.com', 'credit cart', 's09uadi', 'st', 'ake', 'dkppek', 'egypt', 1265465, 'mohamed gomaa with child (1) ', 200, '11-Jul-2023', 'pending'),
(12, 2, 'Headphone E32', '015645498', 'abdoomes@gmail.com', 'cash on delivery', 'l;ajsod', 'hsfou', 'sadi', 'knasd', 'elwasta', 13048, 'mohamed gomaa with child (1) ', 200, '11-Jul-2023', 'completed'),
(13, 2, 'Headphone E32', '015645498', 'abdoomes@gmail.com', 'cash on delivery', 'l;ajsod', 'hsfou', 'sadi', 'knasd', 'elwasta', 13048, 'mohamed gomaa with child (1) ', 200, '11-Jul-2023', 'pending'),
(14, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, 'Tue-Jul-2023-07', 'pending'),
(15, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-07-23-07', 'pending'),
(16, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-07-23-07:59', 'pending'),
(17, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-07-23-07:07', 'pending'),
(18, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-Jul-20232023', 'pending'),
(19, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-Jul-2023', 'pending'),
(20, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11/07/23', 'pending'),
(21, 2, 'abdoo', '4564', 'abdoomes@gmail.com', 'cash on delivery', 's09uadi', 'hsfou', 'sadi', 'knasd', 'elwasta', 123, 'mohamed gomaa with child (1) ', 200, '11-07-23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(26, 'mohamed gomaa with child', 200, 'bash.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'user', 'admin_user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
