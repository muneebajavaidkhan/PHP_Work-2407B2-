-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2025 at 11:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(225) NOT NULL,
  `CategoryImage` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryId`, `CategoryName`, `CategoryImage`, `created_at`) VALUES
(1, 'Fruits', 'dist/images/cat-3.jpg', '2025-05-27 11:32:13'),
(3, 'Vegetable', 'dist/images/veg.jfif', '2025-05-30 04:37:58'),
(4, 'DryFruits', 'dist/images/cat-2.jpg', '2025-05-30 04:54:00'),
(5, 'Meats', 'dist/images/cat-5.jpg', '2025-05-30 05:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProdId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `ProdName` varchar(225) NOT NULL,
  `ProdDescription` varchar(225) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `ProdImage` varchar(225) NOT NULL,
  `Stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProdId`, `CategoryId`, `ProdName`, `ProdDescription`, `Price`, `ProdImage`, `Stock`, `created_at`) VALUES
(1, 1, 'Orange', 'xyz desc', '200', 'dist/images/cat-1.jpg', 5, '2025-05-30 05:37:42'),
(2, 1, 'Abc', 'xyz desc', '150', 'dist/images/cat-4.jpg', 10, '2025-05-30 06:03:39'),
(3, 3, 'Carrot', 'Carrot Desc', '150', 'dist/images/Carrot.jpg', 20, '2025-05-30 11:19:57'),
(4, 3, 'Tomato', 'Tomato Desc', '50', 'dist/images/tomato.jpg', 30, '2025-05-30 11:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Regid` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Role` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Regid`, `Name`, `Email`, `Password`, `Role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$x6KVqDEG1T6Hg1hUttWumOi5ZHRm6r5OrUCEONnyJZNIi67zxS7n6', 'A', '2025-05-27 07:52:16'),
(2, 'zahid', 'zahid@gmail.com', '$2y$10$n1E.h9e7JkX5JzgqMSg9T.zfXGqgHa5cU5cNVU2T5RMud7sp1Kf9S', 'V', '2025-05-27 07:52:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProdId`),
  ADD KEY `fk_catId` (`CategoryId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_catId` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`CategoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
