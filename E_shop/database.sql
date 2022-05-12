-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 05:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `warehouse` varchar(10) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `model`, `brand`, `warehouse`, `created`, `updated`) VALUES
(1, 'Fotoaparatai', 'Canon sf 123', 'Canon ', 'taip', '2022-05-12 09:10:09', '2022-05-12 16:23:39'),
(2, 'Fotoaparatai', 'Sony ss 123', 'Sony', 'taip', '2022-05-12 16:00:41', '2022-05-12 16:00:41'),
(3, 'Kompiuteriai', 'Asus 123', 'Asus', 'taip', '2022-05-12 16:01:14', '2022-05-12 16:05:25'),
(4, 'Kompiuteriai', 'HP 123', 'HP', 'ne', '2022-05-12 16:05:17', '2022-05-12 16:05:30'),
(5, 'Telefonai', 'Samsung GSII', 'Samsung', 'ne', '2022-05-12 16:07:39', '2022-05-12 16:07:39'),
(6, 'Telefonai', 'Iphone 5', 'Apple', 'taip', '2022-05-12 16:08:01', '2022-05-12 16:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created`, `updated`) VALUES
(1, 'admin', '2022-05-12 17:51:45', '2022-05-12 17:51:45'),
(2, 'user', '2022-05-12 17:51:45', '2022-05-12 17:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `password` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `first_name`, `last_name`, `email`, `role_id`, `password`, `created`, `updated`) VALUES
(2, 'Admin', '123', '123', '123@gmail.com', 1, '$2y$10$qo5MqwrLeTIDVkZ2/lMykuUKJ8jpMbA13vzF7zqBPpKxMIWVA9.ha', '2022-05-12 10:31:34', '2022-05-12 17:49:17'),
(7, 'asta', 'Asta', 'Astaite', 'asta@gmail.com', 2, '$2y$10$h/o0i3gwXJ72YVx1Nz/KhuKoLOiFNfYwrkGN1O8tTi4JGJDDkKBly', '2022-05-12 15:23:15', '2022-05-12 15:23:15'),
(8, 'jonas', 'Jonas', 'Jonauskas', 'Jonas@gmail.com', 2, '$2y$10$qePK3aUYLdsU.rVgLSyuDeJQHqpj43TqYA4YRw4yyEDC4VDj76pNS', '2022-05-12 16:08:53', '2022-05-12 16:08:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
