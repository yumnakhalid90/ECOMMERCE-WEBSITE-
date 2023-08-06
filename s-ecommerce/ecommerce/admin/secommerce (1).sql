-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 12:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `ProductImage` varchar(255) DEFAULT NULL,
  `ProductCategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ProductName`, `ProductPrice`, `ProductImage`, `ProductCategory`) VALUES
(3, 'Laptop Bag', 5000, ' uploadImage/bag3.jpg', 'Bag'),
(4, 'DELL LAPTOPS', 220000, ' uploadImage/tech4.jpg', 'Laptop'),
(5, 'Women Jacket green', 5300, ' uploadImage/jacket2.jpg', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `PImage` varchar(250) NOT NULL,
  `PCategory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `PImage`, `PCategory`) VALUES
(1, 'Black Laptop Bag', '5000', 'uploadimage/bag1.jpg', 'Bag'),
(2, 'DELL LAPTOP i7', '80000', 'uploadimage/tech4.jpg', 'Laptop'),
(3, 'MEN WHITE JACKET ', '5500', 'uploadimage/MEN JACKET.jpg', 'Home'),
(5, 'Blue Laptop Bag ', '5200', 'uploadimage/bag3.jpg', 'Bag'),
(6, 'Gray Laptop Bag ', '6250', 'uploadimage/bag2.jpg', 'Bag'),
(7, 'Bacho ka basta ', '1200', 'uploadimage/BAG5.jpeg', 'Home'),
(8, 'Black Coat For Men ', '5600', 'uploadimage/COAT MEN JACKET.jpg', 'Home'),
(9, 'Apple Laptop', '220000', 'uploadimage/LAPTOP4.jpg', 'Laptop'),
(10, 'Huawei Nova 8', '60000', 'uploadimage/Huawei-P60-300x300.jpg', 'Mobile'),
(11, 'Samsang S23', '70000', 'uploadimage/samsangs23.jfif', 'Mobile'),
(12, 'Apple 12', '300000', 'uploadimage/APPLE 12.jfif', 'Mobile'),
(13, 'HP LAPTOPS', '150000', 'uploadimage/tech3.jpg', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `username`, `email`, `number`, `password`) VALUES
(1, 'Mariaalam9', 'mariasheikh78@gmail.com', '92672637121', '123'),
(2, 'Yumnakhalid8', 'yumnakhalid@aptechnorth.edu.pk', '9262637811', '123'),
(3, 'Ridayousuf67', 'ridayousuf57@gmail.com', '92637267891', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
