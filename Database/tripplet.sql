-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 06:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `TYPE`, `NAME`, `PRICE`, `IMG`, `BRAND`, `DETAIL`) VALUES
(1, 'HOTPRODUCT', 'Narciso Rodriguez', '51.000', 'images/products/D6-1.png', 'for him', '..'),
(2, 'HOTPRODUCT', 'Lacoste Eau De Lacoste ', '49.000', 'images/products/D5-1.png', 'Lacoste', '..'),
(3, 'HOTPRODUCT', 'Paco Rabanne ', '69.590', 'images/products/D4-1.png', 'Lady Million', '..'),
(4, 'HOTPRODUCT', 'L\'eau D\'issey ', '59.250', 'images/products/D3-1.png', ' Issey Miyake,', '..'),
(5, 'HOTPRODUCT', 'Olympea Intense', '53.540', 'images/products/D2-1.png', 'Paco Rabanne', '..'),
(6, 'HOTPRODUCT', 'Dolce Perfume', '42.120', 'images/products/B6-1.png', 'Dolce & Gabbana', '..'),
(7, 'HOTPRODUCT', 'Jimmy Choo Fever ', '35.190', 'images/products/B5-1.png', 'Jimmy Choo', '..'),
(8, 'HOTPRODUCT', 'Mugler Aura', '57.110', 'images/products/B4-1.png', 'Thierry Mugler', '..'),
(9, 'HOTPRODUCT', '212 Vip', '57.110', 'images/products/B3-1.png', 'Carolina Herrera', '..'),
(10, 'HOTPRODUCT', 'Jean Paul Gaultier', '67.110', 'images/products/B2-1.png', 'Jean Paul Gaultier', '..'),
(11, 'HOTPRODUCT', 'The Only One Intense', '84.990', 'images/products/B1-1.png', 'Dolce & Gabbana', '..'),
(12, 'FEATUREDPRODUCT', 'Kenzo World', '48.540', 'images/products/N6-1.png', 'Kenzo', '..'),
(13, 'FEATUREDPRODUCT', 'Signorina Misteriosa', '67.990', 'images/products/N5-1.png', 'Salvatore Ferragamo', '..\r\n'),
(14, 'FEATUREDPRODUCT', 'Amo Ferragamo Per Lei', '52.830', 'images/products/N4-1.png', 'Salvatore Ferragamo', '..'),
(15, 'FEATUREDPRODUCT', 'Versace Eros', '47.830', 'images/products/N3.png', ' Versace', '..'),
(16, 'FEATUREDPRODUCT', 'Coach Floral Blush', '47.830', 'images/products/N2-1.png', 'Coach', '..'),
(17, 'FEATUREDPRODUCT', 'Splendida Iris D\'or', '42.490', 'images/products/N1-1.png', 'Bvlgari', '..'),
(18, 'FEATUREDPRODUCT', 'Wish', '22.840', 'images/products/D9-1.png', 'Chopard', '..'),
(19, 'FEATUREDPRODUCT', 'Rose Extase', '39.980', 'images/products/D7-1.png', 'Nina Ricci', '..'),
(20, 'FEATUREDPRODUCT', 'Goldea The Roman ', '48.540', 'images/products/D12-1.png', 'Bvlgari', '..'),
(21, 'FEATUREDPRODUCT', 'Illicit Flower', '31.410', 'images/products/D11-1.png', 'Jimmy Choo', '..'),
(22, 'FEATUREDPRODUCT', 'Lady Emblem', '29.270', 'images/products/D10-1.png', 'Mont Blanc', '..'),
(23, 'FEATUREDPRODUCT', 'Boss Bottled Night ', '25.700', 'images/products/D1-1.png', 'Hugo Boss', '..'),
(24, 'MEN', 'Classic Black ', '17.130', 'images/products/M-1.png', 'Jaguar', '..'),
(25, 'MEN', 'Bad Boy Cologne', '96.380', 'images/products/M-2.png', 'Carolina Herrera', '..'),
(26, 'MEN', 'Invictus Cologne', '57.110', 'images/products/M-3.png', 'Paco Rabanne', '..'),
(27, 'MEN', 'Dunhill Icon Racing ', '41.400', 'images/products/M-4.png', 'Alfred Dunhill', '..'),
(28, 'MEN', 'Acqua Di Gio', '123.680', 'images/products/M-5.png', 'Giorgio Armani', '..'),
(29, 'MEN', 'Pour Homme', '35.690', 'images/products/M-6.png', 'Versace', '..'),
(30, 'UNISEX', 'Oudesire Perfume', '135.990', 'images/products/U-1.png', 'Ajmal, Oud', '..'),
(31, 'UNISEX', 'Maahir Eau De', '63.070', 'images/products/U-2.png', 'Lattafa', '..'),
(32, 'UNISEX', 'Black Is Black', '14.270', 'images/products/U-3.png', 'Nu Parfums', '..'),
(33, 'UNISEX', 'Ck One Summer', '18.660', 'images/products/U-4.png', 'Calvin Klein', '.'),
(34, 'UNISEX', 'Ajmal Amber Wood', '82.880', 'images/products/U-5.png', 'Ajmal', '..'),
(35, 'UNISEX', 'L\'occitane Verbena ', '56.950', 'images/products/U-6.png', 'L\'occitane', '..'),
(36, 'WOMEN', 'The Only One', '84.990', 'images/products/W-1.png', 'Dolce & Gabbana', '..'),
(37, 'WOMEN', 'Scandal', '67.110', 'images/products/W-2.png', 'Jean Paul Gaultier', '..'),
(38, 'WOMEN', 'Good Girl', '48.450', 'images/products/W-3.png', ' Carolina Herrera', '..'),
(39, 'WOMEN', 'Dylan Blue', '49.970', 'images/products/W-4.png', 'Versace', '..'),
(40, 'WOMEN', 'Splendida Tubereuse ', '76.490', 'images/products/W-5.png', 'Bvlgari', '..'),
(41, 'WOMEN', 'Sexy Amber ', '64.970', 'images/products/W-6.png', 'Michael Kors', '..'),
(42, 'HOTPRODUCT', 'MB Woman ', '33.990', 'images/products/D8-1.png', 'Mercedes Benz', '..'),
(43, 'MEN', 'Pure Xs', '74.790', 'images/products/a.png', 'Paco Rabanne', 'asdsa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `producttype` (`TYPE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
