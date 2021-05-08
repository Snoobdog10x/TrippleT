-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripplet`
--
	create database tripplet
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` text COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`, `NAME`) VALUES
('duythanh', 'duythanh', 'Nguyễn Duy Thanh'),
('huythong', 'huythong', 'Đỗ Huy Thông'),
('minhtam', 'minhtam', 'Trần Đặng Minh Tâm');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` text COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL,
  `PHONE` text COLLATE utf8mb4_bin NOT NULL,
  `SEX` tinyint(1) NOT NULL,
  `ADDRESS` text COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OID` int(11) NOT NULL,
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `DATE` datetime NOT NULL,
  `TOTAL` decimal(20,3) NOT NULL,
  `STATUS` varchar(64) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `AMOUNT` bigint(20) NOT NULL,
  `UPRICE` decimal(20,3) NOT NULL,
  `TOTAL` decimal(20,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(11) NOT NULL,
  `TYPE` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL,
  `PRICE` decimal(20,3) NOT NULL,
  `IMG` text COLLATE utf8mb4_bin NOT NULL,
  `BRAND` text COLLATE utf8mb4_bin NOT NULL,
  `DETAIL` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `TYPE`, `NAME`, `PRICE`, `IMG`, `BRAND`, `DETAIL`) VALUES
(5, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D8-1.png', '', ''),
(6, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D6-1.png', '', ''),
(7, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D5-1.png', '', ''),
(8, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D4-1.png', '', ''),
(9, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D3-1.png', '', ''),
(10, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\D2-1.png', '', ''),
(11, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B6-1.png', '', ''),
(12, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B5-1.png', '', ''),
(13, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B4-1.png', '', ''),
(14, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B3-1.png', '', ''),
(15, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B2-1.png', '', ''),
(16, 'HOTPRODUCT', '', '0.000', 'images\\best-product\\B1-1.png', '', ''),
(17, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N6-1.png', '', ''),
(18, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N5-1.png', '', ''),
(19, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N4-1.png', '', ''),
(20, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N3.png', '', ''),
(21, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N2-1.png', '', ''),
(22, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\N1-1.png', '', ''),
(23, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D9-1.png', '', ''),
(24, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D7-1.png', '', ''),
(25, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D12-1.png', '', ''),
(26, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D11-1.png', '', ''),
(27, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D10-1.png', '', ''),
(28, 'FEATUREDPRODUCT', '', '0.000', 'images\\new-product\\D1-1.png', '', ''),
(29, 'MEN', '', '0.000', 'images\\products\\Men\\6-1.png', '', ''),
(30, 'MEN', '', '0.000', 'images\\products\\Men\\5-1.png', '', ''),
(31, 'MEN', '', '0.000', 'images\\products\\Men\\4-1.png', '', ''),
(32, 'MEN', '', '0.000', 'images\\products\\Men\\3-1.png', '', ''),
(33, 'MEN', '', '0.000', 'images\\products\\Men\\2-1.png', '', ''),
(34, 'MEN', '', '0.000', 'images\\products\\Men\\1-2.png', '', ''),
(35, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\6-1.png', '', ''),
(36, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\5-1.png', '', ''),
(37, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\4-1.png', '', ''),
(38, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\3-2.png', '', ''),
(39, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\2-1.png', '', ''),
(40, 'UNISEX', '', '0.000', 'images\\products\\Unisex\\1-2.png', '', ''),
(41, 'WOMEN', '', '0.000', 'images\\products\\Women\\6-1.png', '', ''),
(42, 'WOMEN', '', '0.000', 'images\\products\\Women\\5-1.png', '', ''),
(43, 'WOMEN', '', '0.000', 'images\\products\\Women\\4-1.png', '', ''),
(44, 'WOMEN', '', '0.000', 'images\\products\\Women\\3-1.png', '', ''),
(45, 'WOMEN', '', '0.000', 'images\\products\\Women\\2-1.png', '', ''),
(46, 'WOMEN', '', '0.000', 'images\\products\\Women\\1-1.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `TYPE` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`TYPE`) VALUES
('FEATUREDPRODUCT'),
('HOTPRODUCT'),
('MEN'),
('UNISEX'),
('WOMEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OID`,`USERNAME`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OID`,`PID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`,`TYPE`),
  ADD KEY `TYPE` (`TYPE`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`TYPE`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `customer` (`USERNAME`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OID`) REFERENCES `order` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `producttype` (`TYPE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
