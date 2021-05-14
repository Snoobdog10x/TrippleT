-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 01:37 PM
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
CREATE DATABASE IF NOT EXISTS `tripplet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `tripplet`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` text COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`USERNAME`)
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

CREATE TABLE IF NOT EXISTS `customer` (
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` text COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `PHONE` text COLLATE utf8mb4_bin NOT NULL,
  `SEX` text COLLATE utf8mb4_bin NOT NULL,
  `ADDRESS` text COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`USERNAME`, `PASSWORD`, `NAME`, `BIRTHDAY`, `PHONE`, `SEX`, `ADDRESS`, `EMAIL`) VALUES
('duythanh', 'duythanh', 'Nguyen Duy Thanh', '2001-08-28', '0858497861', 'MEN', '574/15/1/29 sinco binhtan', 'duythanh1565@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `OID` int(11) NOT NULL,
  `USERNAME` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `DATE` datetime NOT NULL,
  `TOTAL` decimal(20,3) NOT NULL,
  `STATUS` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`OID`,`USERNAME`),
  KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `OID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `AMOUNT` bigint(20) NOT NULL,
  `UPRICE` decimal(20,3) NOT NULL,
  `TOTAL` decimal(20,3) NOT NULL,
  PRIMARY KEY (`OID`,`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `NAME` text COLLATE utf8mb4_bin NOT NULL,
  `PRICE` decimal(20,3) NOT NULL,
  `IMG` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `BRAND` text COLLATE utf8mb4_bin NOT NULL,
  `DETAIL` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`PID`) USING BTREE,
  KEY `TYPE` (`TYPE`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `TYPE`, `NAME`, `PRICE`, `IMG`, `BRAND`, `DETAIL`) VALUES
(1, 'HOTPRODUCT', 'adssa', '213.000', 'images/products/D6-1.png', 'sdasd', 'dsasad11111'),
(2, 'HOTPRODUCT', '', '0.000', 'images/products/D5-1.png', '', ''),
(3, 'HOTPRODUCT', '', '0.000', 'images/products/D4-1.png', '', ''),
(4, 'HOTPRODUCT', '', '0.000', 'images/products/D3-1.png', '', ''),
(5, 'HOTPRODUCT', '', '0.000', 'images/products/D2-1.png', '', ''),
(6, 'HOTPRODUCT', '', '0.000', 'images/products/B6-1.png', '', ''),
(7, 'HOTPRODUCT', '', '0.000', 'images/products/B5-1.png', '', ''),
(8, 'HOTPRODUCT', '', '0.000', 'images/products/B4-1.png', '', ''),
(9, 'HOTPRODUCT', '', '0.000', 'images/products/B3-1.png', '', ''),
(10, 'HOTPRODUCT', '', '0.000', 'images/products/B2-1.png', '', ''),
(11, 'HOTPRODUCT', '', '0.000', 'images/products/B1-1.png', '', ''),
(12, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N6-1.png', '', ''),
(13, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N5-1.png', '', ''),
(14, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N4-1.png', '', ''),
(15, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N3.png', '', ''),
(16, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N2-1.png', '', ''),
(17, 'FEATUREDPRODUCT', '', '0.000', 'images/products/N1-1.png', '', ''),
(18, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D9-1.png', '', ''),
(19, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D7-1.png', '', ''),
(20, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D12-1.png', '', ''),
(21, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D11-1.png', '', ''),
(22, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D10-1.png', '', ''),
(23, 'FEATUREDPRODUCT', '', '0.000', 'images/products/D1-1.png', '', ''),
(24, 'MEN', '', '0.000', 'images/products/M-1.png', '', ''),
(25, 'MEN', '', '0.000', 'images/products/M-2.png', '', ''),
(26, 'MEN', '', '0.000', 'images/products/M-3.png', '', ''),
(27, 'MEN', '', '0.000', 'images/products/M-4.png', '', ''),
(28, 'MEN', '', '0.000', 'images/products/M-5.png', '', ''),
(29, 'MEN', '', '0.000', 'images/products/M-6.png', '', ''),
(30, 'UNISEX', '', '0.000', 'images/products/U-1.png', '', ''),
(31, 'UNISEX', '', '0.000', 'images/products/U-2.png', '', ''),
(32, 'UNISEX', '', '0.000', 'images/products/U-3.png', '', ''),
(33, 'UNISEX', '', '0.000', 'images/products/U-4.png', '', ''),
(34, 'UNISEX', '', '0.000', 'images/products/U-5.png', '', ''),
(35, 'UNISEX', '', '0.000', 'images/products/U-6.png', '', ''),
(36, 'WOMEN', '', '0.000', 'images/products/W-1.png', '', ''),
(37, 'WOMEN', '', '0.000', 'images/products/W-2.png', '', ''),
(38, 'WOMEN', '', '0.000', 'images/products/W-3.png', '', ''),
(39, 'WOMEN', '', '0.000', 'images/products/W-4.png', '', ''),
(40, 'WOMEN', '', '0.000', 'images/products/W-5.png', '', ''),
(41, 'WOMEN', '', '0.000', 'images/products/W-6.png', '', ''),
(42, 'HOTPRODUCT', '', '0.000', 'images/products/D8-1.png', '', ''),
(43, 'MEN', 'dasda', '21321.000', 'images/products/a.png', 'dsadas', 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `TYPE` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`TYPE`)
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
