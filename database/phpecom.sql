-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 11:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(29, 'Mobiles', 'learnwordpresstutoriallearnwordpresstutorial', '   learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 0, 1, '1657511676.jpg', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', '2022-07-10 08:31:56'),
(31, 'Electronics', 'John DoeJohn DoeJohn DoeJohn Doe', '  John DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn Doe', 0, 1, '1657511449.jpg', 'John DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn Doe', 'John DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn Doe', 'John DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn DoeJohn Doe', '2022-07-10 15:11:45'),
(32, 'Fashion', 'Jane DoeJane DoeJane DoeJane DoeJane Doe', '  Jane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane Doe', 0, 1, '1657511467.jpg', 'Jane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane Doe', 'Jane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane Doe', 'Jane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane DoeJane Doe', '2022-07-10 15:12:29'),
(33, 'Laptops', 'LaptopsLaptopsLaptopsLaptops', ' LaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptops', 0, 1, '1657511482.jpg', 'LaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptops', 'LaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptops', 'LaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptopsLaptops', '2022-07-11 03:17:12'),
(34, 'Footwear', 'FootwearFootwearFootwear', ' FootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwear', 0, 1, '1657511518.jpg', 'FootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwear', 'FootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwear', 'FootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwearFootwear', '2022-07-11 03:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(12, 29, 'learnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial    ', '    learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial    ', 20000, 20000, '1657441962.jpg', 2000, 1, 0, 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial    ', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', '2022-07-12 02:21:03'),
(13, 29, 'learnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial ', ' learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial ', 20000, 20000, '1657465113.jpg', 2000, 0, 1, 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial ', 'learnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutoriallearnwordpresstutorial', '2022-07-11 09:18:49'),
(14, 29, 'Phone', 'PhonePhonePhonePhonePhonePhone', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 20000, 20000, '1657531200.jpg', 2000, 0, 1, 'PhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhone', 'PhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhone  ', 'PhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhonePhone', '2022-07-12 14:19:42'),
(15, 29, 'Phone_two', 'Phone_twoPhone_twoPhone_two', 'Phone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_two ', ' Phone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_two ', 20000, 20000, '1657591875.jpg', 2000, 0, 1, 'Phone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_two', 'Phone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_two ', 'Phone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_twoPhone_two', '2022-07-12 02:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `role_as`) VALUES
(1, 'duane', 'duane@email.com', 1111, '1234', '2022-06-24 02:29:42', 0),
(3, 'admin', 'admin@email.com', 222, '81dc9bdb52d04dc20036dbd8313ed055', '2022-06-24 06:54:43', 1),
(4, 'ivan', 'ivan@email.com', 333, '81dc9bdb52d04dc20036dbd8313ed055', '2022-06-24 07:29:46', 0),
(5, 'auden', 'auden@email.com', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', '2022-07-11 06:10:30', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
