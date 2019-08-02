-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2019 at 04:28 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merch-tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_inventory_levels`
--

CREATE TABLE `daily_inventory_levels` (
  `day_date` date DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `remaining_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `product_variation` varchar(255) DEFAULT NULL,
  `product_gender` varchar(255) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_type`, `product_size`, `product_variation`, `product_gender`, `unit_price`, `reorder_level`) VALUES
(1, 't-shirt', 'S', 'undyed', 'male', 10, 5),
(2, 't-shirt', 'M', 'undyed', 'male', 10, 5),
(3, 't-shirt', 'L', 'undyed', 'male', 10, 5),
(4, 't-shirt', 'XL', 'undyed', 'male', 10, 5),
(5, 't-shirt', 'XXL', 'undyed', 'male', 10, 5),
(6, 't-shirt', 'S', 'dyed', 'male', 15, 5),
(7, 't-shirt', 'M', 'dyed', 'male', 15, 5),
(8, 't-shirt', 'L', 'dyed', 'male', 15, 5),
(9, 't-shirt', 'XL', 'dyed', 'male', 15, 5),
(10, 't-shirt', 'XXL', 'dyed', 'male', 15, 5),
(11, 't-shirt', 'S', 'dyed', 'female', 15, 5),
(12, 't-shirt', 'M', 'dyed', 'female', 15, 5),
(13, 't-shirt', 'L', 'dyed', 'female', 15, 5),
(14, 't-shirt', 'S', 'black', 'male', 10, 5),
(15, 't-shirt', 'M', 'black', 'male', 10, 5),
(16, 't-shirt', 'L', 'black', 'male', 10, 5),
(17, 't-shirt', 'XL', 'black', 'male', 10, 5),
(18, 't-shirt', 'XXL', 'black', 'male', 10, 5),
(19, 't-shirt', 'S', 'black', 'female', 10, 5),
(20, 't-shirt', 'M', 'black', 'female', 10, 5),
(21, 't-shirt', 'L', 'black', 'female', 10, 5),
(22, 'crop-top', 'XS/S', 'undyed', 'female', 10, 5),
(23, 'crop-top', 'M/L', 'undyed', 'female', 10, 5),
(24, 'crop-top', 'XS/S', 'dyed', 'female', 15, 5),
(25, 'crop-top', 'M/L', 'dyed', 'female', 15, 5),
(26, 'tank-top', 'S', 'undyed', 'male', 10, 5),
(27, 'tank-top', 'M', 'undyed', 'male', 10, 5),
(28, 'tank-top', 'L', 'undyed', 'male', 10, 5),
(29, 'tank-top', 'XL', 'undyed', 'male', 10, 5),
(30, 'tank-top', 'XXL', 'undyed', 'male', 10, 5),
(31, 'tank-top', 'S', 'dyed', 'male', 15, 5),
(32, 'tank-top', 'M', 'dyed', 'male', 15, 5),
(33, 'tank-top', 'L', 'dyed', 'male', 15, 5),
(34, 'tank-top', 'XL', 'dyed', 'male', 15, 5),
(35, 'tank-top', 'XXL', 'dyed', 'male', 15, 5),
(36, 'beanie', NULL, NULL, NULL, 15, 5),
(37, 'baseball-hat', NULL, NULL, NULL, 15, 5),
(38, 'outrun-the-sun', NULL, NULL, NULL, 5, 5),
(39, 'thursday-night-burrito-fight', NULL, NULL, NULL, 5, 5),
(40, 'poster', NULL, NULL, NULL, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products_in_sales`
--

CREATE TABLE `products_in_sales` (
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `per_product_earn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `product_type` varchar(255) NOT NULL,
  `parent_product_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`product_type`, `parent_product_type`) VALUES
('baseball-hat', 'headwear'),
('beanie', 'headwear'),
('crop-top', 'shirt'),
('outrun-the-sun', 'cd'),
('poster', 'decoration'),
('t-shirt', 'shirt'),
('tank-top', 'shirt'),
('thursday-night-burrito-fight', 'cd');

-- --------------------------------------------------------

--
-- Table structure for table `ref_calendar`
--

CREATE TABLE `ref_calendar` (
  `day_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `date_of_sale` date DEFAULT current_timestamp(),
  `venue_pay` int(11) DEFAULT NULL,
  `total_earn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `date_of_sale`, `venue_pay`, `total_earn`) VALUES
(1, '2019-07-14', 123, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_inventory_levels`
--
ALTER TABLE `daily_inventory_levels`
  ADD KEY `day_date` (`day_date`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `products_in_sales`
--
ALTER TABLE `products_in_sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD UNIQUE KEY `sales_id` (`sales_id`),
  ADD UNIQUE KEY `sales_id_2` (`sales_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`product_type`);

--
-- Indexes for table `ref_calendar`
--
ALTER TABLE `ref_calendar`
  ADD PRIMARY KEY (`day_date`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD UNIQUE KEY `sales_id` (`sales_id`),
  ADD UNIQUE KEY `sales_id_2` (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_inventory_levels`
--
ALTER TABLE `daily_inventory_levels`
  ADD CONSTRAINT `daily_inventory_levels_ibfk_1` FOREIGN KEY (`day_date`) REFERENCES `ref_calendar` (`day_date`),
  ADD CONSTRAINT `daily_inventory_levels_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_type`) REFERENCES `product_types` (`product_type`);

--
-- Constraints for table `products_in_sales`
--
ALTER TABLE `products_in_sales`
  ADD CONSTRAINT `products_in_sales_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `products_in_sales_ibfk_2` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`sales_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
