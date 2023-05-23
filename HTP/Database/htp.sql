-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 11:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_Id`, `UserId`, `Product_Id`, `Quantity`) VALUES
(4, 2, 1, 3),
(5, 1, 2, 3),
(6, 1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `UserId`, `Product_Id`, `Quantity`, `Time`) VALUES
(1, 1, 1, 1, '2023-03-01 11:17:07'),
(2, 1, 2, 1, '2023-03-01 11:17:07'),
(3, 1, 3, 1, '2023-03-01 11:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Img` varchar(255) NOT NULL,
  `Product_Des` text NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1,
  `Product_BDate` date NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `UserId`, `Product_Name`, `Product_Img`, `Product_Des`, `Product_Price`, `Quantity`, `Product_BDate`, `DateTime`) VALUES
(1, 1, 'T-shirt', './Server_Storage/tshirt.png', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut minus tenetur nostrum itaque! Impedit, architecto sequi. Ducimus, necessitatibus, cum eum laboriosam et incidunt deleniti, aperiam distinctio iste corrupti officiis quaerat!', 300, 2, '0000-00-00', '2023-03-01 16:15:52'),
(2, 2, 'Jeans', './Server_Storage/jeans.png', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut minus tenetur nostrum itaque! Impedit, architecto sequi. Ducimus, necessitatibus, cum eum laboriosam et incidunt deleniti, aperiam distinctio iste corrupti officiis quaerat!', 500, 3, '0000-00-00', '2023-03-01 16:19:55'),
(3, 2, 'Jacket', './Server_Storage/jacket.png', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut minus tenetur nostrum itaque! Impedit, architecto sequi. Ducimus, necessitatibus, cum eum laboriosam et incidunt deleniti, aperiam distinctio iste corrupti officiis quaerat!', 700, 4, '0000-00-00', '2023-03-01 16:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
