-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `username` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `uid`, `date`, `qty`) VALUES
(10, '4', '1', '2025/03/01 07:03:00', '1'),
(11, '4', '1', '2025/03/01 07:03:20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Necklace'),
(2, 'Ring'),
(3, 'Jhumka'),
(4, 'Chain'),
(5, 'Nose Pin'),
(6, 'earing');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `sp` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `uid`, `price`, `sp`, `address`, `status`, `date`, `qty`) VALUES
(1, '10', '1', '2500', '2000', 'yuglu;i', 'Placed', '2025/02/19 06:02:23', '1'),
(2, '9', '1', '2500', '2000', 'yuglu;i', '', '2025/02/19 06:02:23', '1'),
(3, '8', '1', '500', '100', 'yuglu;i', '', '2025/02/19 06:02:23', '1'),
(4, '4', '1', '500', '50', 'gjhlkujo;', 'placed', '2025/02/19 06:02:59', '1'),
(5, '8', '1', '500', '100', 'auhfshufis', 'Delivery', '2025/02/27 07:02:12', '1'),
(6, '10', '1', '2500', '2000', 'kuhjhlk', 'Placed', '2025/02/27 03:02:50', '1'),
(7, '9', '1', '2500', '2000', 'utkiylih', 'Placed', '2025/03/01 06:03:08', '1'),
(8, '10', '1', '2500', '2000', 'utkiylih', 'Placed', '2025/03/01 06:03:08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `sellingprice` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `sellingprice`, `category`, `description`, `image`) VALUES
(8, 'JHUMKA', 'Tanishq', '120000', '119000', '3', 'Good product', '1738995882362.jpeg'),
(14, 'JHUMKA', 'Tanishq', '100000', '99000', '3', 'best design', '1743656440491.jpg'),
(15, 'JHUMKA', 'Tanishq', '118000', '117000', '3', 'Good product', '1743657584745.jpeg'),
(16, 'JHUMKA', 'Tanishq', '121000', '120000', '3', 'Good product', '1743657657973.jpeg'),
(17, 'EARING', 'Tanishq', '30000', '25000', '6', 'Good product', '1743657953524.jpeg'),
(18, 'EARING', 'Tanishq', '130000', '125000', '6', 'Good product', '174365799224.jpg'),
(19, 'EARING', 'Tanishq', '40000', '35000', '6', 'Good product', '174365804177.jpeg'),
(20, 'EARING', 'Tanishq', '95000', '90000', '6', 'Good product', '1743658082436.jpeg'),
(21, 'NECKLACE', 'Tanishq', '160000', '150000', '1', 'Good product', '1743658668268.jpeg'),
(22, 'NECKLACE', 'Tanishq', '110000', '100000', '1', 'Good product', '1743658889701.jpeg'),
(23, 'NECKLACE', 'Tanishq', '80000', '70000', '1', 'Good product', '1743658962537.jpeg'),
(24, 'NECKLACE', 'Tanishq', '210000', '200000', '1', 'Good product', '1743659019450.jpeg'),
(25, 'RING', 'Tanishq', '210000', '200000', '2', 'Good product', '1743659111976.jpeg'),
(26, 'RING', 'Tanishq', '60000', '55000', '2', 'Good product', '1743659355828.jpeg'),
(27, 'RING', 'Tanishq', '57000', '50000', '2', 'Good product', '1743659396914.jpeg'),
(28, 'RING', 'Tanishq', '54000', '52000', '2', 'Good product', '1743659425284.jpeg'),
(29, 'CHAIN', 'Tanishq', '160000', '150000', '4', 'Good product', '1743659556100.jpeg'),
(30, 'CHAIN', 'Tanishq', '82000', '80000', '4', 'Good product', '1743659725758.jpeg'),
(31, 'CHAIN', 'Tanishq', '82000', '80000', '4', 'Good product', '1743659753886.jpeg'),
(32, 'CHAIN', 'Tanishq', '72000', '70000', '4', 'Good product', '1743659826772.jpeg'),
(33, 'NOSEPIN', 'Tanishq', '20000', '19000', '5', 'Good product', '1743659968782.jpeg'),
(34, 'NOSEPIN', 'Tanishq', '16000', '15000', '5', 'Good product', '1743660003158.jpeg'),
(35, 'NOSEPIN', 'Tanishq', '16000', '15000', '5', 'Good product', '1743660040755.jpeg'),
(36, 'NOSEPIN', 'Tanishq', '16000', '15000', '5', 'Good product', '1743660131545.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `fullname` varchar(75) DEFAULT NULL,
  `username` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  `phonenumber` varchar(75) DEFAULT NULL,
  `address` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`, `address`) VALUES
(1, 'Ranju Kumari', 'Ranju', 'priyadarshiranju@gmail.com', '12', '09798764977', 'Vill Mednipur PO Pandaul Buzurg Ps Nanpur district sitamarchi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
