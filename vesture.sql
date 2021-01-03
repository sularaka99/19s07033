-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 11:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vesture`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catagory_id` int(11) NOT NULL,
  `catagory_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catagory_id`, `catagory_name`) VALUES
(1, 'work wear'),
(2, 'frocks'),
(3, 'skirts'),
(4, 'tops'),
(5, 'shorts');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Discription` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Name`, `Price`, `Discription`, `stock`, `catagory_id`, `image`) VALUES
(1, 'Work Wear 001', '2000', '', 30, 1, 'images/ofzwears/image1.jpg'),
(2, 'Work Wear 002', '2500', '', 20, 1, 'images/ofzwears/image2.jpg'),
(3, 'Work Wear 003', '1250', '', 30, 1, 'images/ofzwears/image3.jpg'),
(4, 'Work Wear 004', '2750', '', 20, 1, 'images/ofzwears/image4.jpg'),
(5, 'Work Wear 005', '1500', '', 20, 1, 'images/ofzwears/image5.jpg'),
(6, ' Work Wear 006', '2500', '', 20, 1, 'images/ofzwears/image6.jpg'),
(7, 'Work Wear 007', '1750', '', 20, 1, 'images/ofzwears/image7.jpg'),
(8, 'Work Wear 008', '1250', '', 20, 1, 'images/ofzwears/image8.jpg'),
(9, 'Work Wear 009', '2750', '', 20, 1, 'images/ofzwears/image9.jpg'),
(10, 'Work Wear 010', '2000', '', 20, 1, 'images/ofzwears/image10.jpg'),
(11, 'Work Wear 011', '1250', '', 20, 1, 'images/ofzwears/image11.jpg'),
(12, 'Work Wear 012', '2500', '', 30, 1, 'images/ofzwears/image12.jpg'),
(13, 'Frock 001', '1250', '', 20, 2, 'images/dresses/image1.jpg'),
(14, 'Frock 002', '2750', '', 20, 2, 'images/dresses/image2.jpg'),
(15, 'Frock 003', '2000', '', 30, 2, 'images/dresses/image3.jpg'),
(16, 'Frock 004', '2500', '', 30, 2, 'images/dresses/image4.jpg'),
(17, 'Frock 005', '1500', '', 10, 2, 'images/dresses/image5.jpg'),
(18, 'Frock 006', '1500', '', 10, 2, 'images/dresses/image6.jpg'),
(19, 'Frock 007', '2000', '', 20, 2, 'images/dresses/image7.jpg'),
(20, 'Frock 008', '2500', '', 20, 2, 'images/dresses/image8.jpg'),
(21, 'Frock 009', '2750', '', 20, 2, 'images/dresses/image9.jpg'),
(22, 'Frock 010', '1250', '', 20, 2, 'images/dresses/image10.jpg'),
(23, 'Frock 011', '3000', '', 20, 2, 'images/dresses/image11.jpg'),
(24, 'Frock 012', '1250', '', 20, 2, 'images/dresses/image12.jpg'),
(25, 'Skirt 001', '1250', '', 20, 3, 'images/skirts/image1.jpg'),
(26, 'Skirt 002', '1500', '', 20, 3, 'images/skirts/image2.jpg'),
(28, 'Skirt 003', '2500', '', 30, 3, 'images/skirts/image3.jpg'),
(29, 'Skirt 004', '2750', '', 30, 3, 'images/skirts/image4.jpg'),
(30, 'Skirt 005', '3000', '', 20, 3, 'images/skirts/image5.jpg'),
(31, 'Skirt 006', '1500', '', 30, 3, 'images/skirts/image6.jpg'),
(32, 'Skirt 007', '1250', '', 20, 3, 'images/skirts/image7.jpg'),
(33, 'Skirt 008', '3000', '', 30, 3, 'images/skirts/image8.jpg'),
(34, 'Skirt 009', '1500', '', 20, 3, 'images/skirts/image9.jpg'),
(35, 'Skirt 010', '1250', '', 30, 3, 'images/skirts/image10.jpg'),
(36, 'Skirt 011', '1500', '', 30, 3, 'images/skirts/image11.jpg'),
(37, 'Skirt 012', '2750', '', 30, 3, 'images/skirts/image12.jpg'),
(38, 'Top 001', '1250', '', 30, 4, 'images/tops/image1.jpg'),
(39, 'Top 002', '2500', '', 20, 4, 'images/tops/image2.jpg'),
(40, 'Top 003', '1500', '', 30, 4, 'images/tops/image3.jpg'),
(41, 'Top 004', '1500', '', 20, 4, 'images/tops/image4.jpg'),
(42, 'Top 005', '2500', '', 30, 4, 'images/tops/image5.jpg'),
(43, 'Top 006', '2750', '', 30, 4, 'images/tops/image6.jpg'),
(44, 'Top 007', '2500', '', 30, 4, 'images/tops/image7.jpg\r\n'),
(45, 'Top 008', '2750', '', 20, 4, 'images/tops/image8.jpg\r\n'),
(46, 'Top 009', '2750', '', 20, 4, 'images/tops/image9.jpg\r\n'),
(47, 'Top 010', '2500', '', 20, 4, 'images/tops/image10.jpg\r\n'),
(48, 'Top 11', '1500', '', 20, 4, 'images/tops/image11.jpg\r\n'),
(49, 'Top 12', '2750', '', 20, 4, 'images/tops/image12.jpg\r\n'),
(50, 'Short 001', '1500', '', 20, 5, 'images/shorts/image6.jpg'),
(51, 'Short 002', '2750', '', 30, 5, 'images/shorts/image2.jpg'),
(52, 'Short 003', '1500', '', 20, 5, 'images/shorts/image3.jpg'),
(53, 'Short 004', '2500', '', 20, 5, 'images/shorts/image4.jpg'),
(54, 'Short 005', '1250', '', 20, 5, 'images/shorts/image5.jpg'),
(55, 'Short 006', '2750', '', 20, 5, 'images/shorts/image6.jpg'),
(56, 'Short 007', '2750', '', 20, 5, 'images/shorts/image7.jpg'),
(57, '\r\nShort 008', '2500', '', 30, 5, 'images/shorts/image8.jpg'),
(58, 'Short 009', '1500', '', 20, 5, 'images/shorts/image2.jpg'),
(59, 'Short 010', '2750', '', 30, 5, 'images/shorts/image10.jpg'),
(60, 'Short 011', '1500', '', 20, 5, 'images/shorts/image11.jpg'),
(61, 'Short 001', '1500', '', 20, 5, 'images/shorts/image12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `telephone`, `address`) VALUES
('cabello', 'pulinamahima26@gmail.com', '$2y$10$JLb1awH7dY/iOw/JfJuAa.gq7ULF0xAl9mIUwXwbS.v', 2147483647, '14/2'),
('pakaya', 'gshhjjj@gmail.com', '$2y$10$nUtstHaxzX0zpQLFFXdmAe9kDCEw0OIZekmuqTbnz.S', 2147483647, '14/2'),
('shineDC', 'pulinamahima26@gmail.com', '$2y$10$SuxCZR8z5IzrJeNK0cXNuOnUBCNx3CN0UaObWIM85Dx', 774779548, '14/2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`product_id`,`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `delete_constraints` (`catagory_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `delete_constraints` FOREIGN KEY (`catagory_id`) REFERENCES `catagory` (`catagory_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
