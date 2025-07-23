-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2025 at 09:24 PM
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
-- Database: `wavelineapparel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admID` varchar(30) NOT NULL,
  `admName` varchar(100) NOT NULL,
  `admPhoneNum` varchar(12) NOT NULL,
  `admAddress` varchar(200) NOT NULL,
  `admPin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admID`, `admName`, `admPhoneNum`, `admAddress`, `admPin`) VALUES
('ADM001', 'Sarah Johnson', '0123456789', '123 Admin Street, Kuala Lumpur', '1234'),
('ADM002', 'Michael Chen', '0112345678', '456 Management Avenue, Penang', '1234'),
('ADM003', 'Aisha Rahman', '0198765432', '789 Executive Road, Johor Bahru', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `custID` varchar(30) NOT NULL,
  `prodID` varchar(30) NOT NULL,
  `cartQuantity` int(255) NOT NULL,
  `cartPrice` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`custID`, `prodID`, `cartQuantity`, `cartPrice`) VALUES
('CUST002', 'P4', 1, 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` varchar(30) NOT NULL,
  `custName` varchar(100) NOT NULL,
  `custAge` int(11) NOT NULL,
  `custGender` char(1) NOT NULL,
  `custAddress` varchar(200) NOT NULL,
  `custPhoneNumber` varchar(12) NOT NULL,
  `custPassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `custName`, `custAge`, `custGender`, `custAddress`, `custPhoneNumber`, `custPassword`) VALUES
('amin', 'MUHAMMAD AMIN BIN MUHAMMAD YURI', 18, 'M', 'NO. 28, JALAN KIAI KHUSAIRI 11/KS3, TAMAN ANEKA BARU, KAMPUNG SUNGAI UDANG, 41250, KLANG, SELANGOR', '011234657', 'AMIN1000'),
('aqil yuri', 'MUHAMMAD AQIL BIN MUHAMMAD YURI', 19, 'M', 'NO. 28, JALAN KIAI KHUSAIRI 11/KS3, TAMAN ANEKA BARU, KAMPUNG SUNGAI UDANG, 41250, KLANG, SELANGOR', '11234657', '00000000'),
('CUST001', 'Emma Watson', 28, 'F', '101 Beach View, Penang', '0123456789', 'emma1234'),
('CUST002', 'James Lee', 35, 'M', '202 Hillside Apartment, KL', '0112233445', 'james567'),
('CUST003', 'Sophia Tan', 22, 'F', '303 Garden Residence, Johor', '0198877665', 'sophia88'),
('CUST004', 'Daniel Wong', 40, 'M', '404 Lakeview Condo, Penang', '0167788990', 'daniel12'),
('CUST005', 'Olivia Ng', 31, 'F', '505 City Center, KL', '0176655443', 'olivia31'),
('hana', 'Nur Hannah Binti Muhammad Yuri', 20, 'F', 'NO. 28, JALAN KIAI KHUSAIRI 11/KS3, TAMAN ANEKA BARU, KAMPUNG SUNGAI UDANG, 41250, KLANG, SELANGOR', '01165597107', '12345678'),
('IntanHoshi', 'intan syahirah', 21, 'F', 'no. 9, Jalan Kura- kura, Kuala Ibai, Terengganu ', '0125556667', 'intan000'),
('Jeremy', 'Jeremy Smith', 38, 'M', '13, Bangsar South, Kuala Lumpur', '0187678987', 'jeremy11'),
('kelly', 'Khalilah Khalil Anuar', 20, 'F', '12, Jalan Ampang, Kuala Langat', '028765443', 'kelly999'),
('kim', 'Jason Kim', 29, 'M', '9, Jalan Kucai Lama, Kuantan', '0761237987', 'kim12345'),
('Mark', 'Lee Mark', 26, 'M', '13, Hongdae, South Korea', '08765432', 'mark1234'),
('najah', 'Siti Najah Nurdini', 20, 'F', '45, Jalan Keria, Antara Gapi, Selangor', '018765456576', 'najah111'),
('nughul', 'nurul hidayah', 20, 'F', '56, Ampang, Kuala Lumpur', '01222345677', 'nurul222'),
('Shoi', 'Aaeshah', 25, 'F', '123 jalan Mutiara, Kampung Delek, 41250, Klang, Selangor', '0111133446', 'Shoi1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` varchar(30) NOT NULL,
  `empName` varchar(100) NOT NULL,
  `empPhoneNum` varchar(12) NOT NULL,
  `empJobTitle` char(1) NOT NULL,
  `empPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `empName`, `empPhoneNum`, `empJobTitle`, `empPassword`) VALUES
('EMP001', 'David Lim', '0133344556', 'M', 'david123'),
('EMP002', 'Nurul Hassan', '0144455667', 'S', 'nurul456'),
('EMP003', 'Jason Raj', '0155566778', 'C', 'jason789'),
('EMP004', 'Mei Ling', '0166677889', 'W', 'meiling1'),
('EMP005', 'Ali Abdullah', '0177788990', 'D', 'ali12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fbID` varchar(30) NOT NULL,
  `fbDate` date NOT NULL,
  `fbRating` varchar(300) NOT NULL,
  `fbComment` varchar(300) NOT NULL,
  `custID` varchar(30) NOT NULL,
  `orderID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(30) NOT NULL,
  `orderDate` date NOT NULL,
  `orderShippingFee` decimal(20,2) NOT NULL,
  `custID` varchar(30) NOT NULL,
  `orderSubtotal` decimal(20,2) NOT NULL,
  `orderStatus` char(1) NOT NULL COMMENT 'P=Processing, C=Completed, X=Cancelled',
  `ordGrandTotal` decimal(20,2) NOT NULL,
  `ordPaymentMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `orderShippingFee`, `custID`, `orderSubtotal`, `orderStatus`, `ordGrandTotal`, `ordPaymentMethod`) VALUES
('ORD000', '2025-06-01', 0.00, 'Mark', 90.00, 'C', 90.00, 'Public Bank'),
('ORD002', '2025-07-14', 5.00, 'CUST004', 450.00, 'P', 455.00, 'RHB Now'),
('ORD008', '2025-05-18', 5.00, 'nughul', 60.00, 'C', 65.00, 'Ambank'),
('ORD009', '2025-06-22', 0.00, 'CUST002', 60.00, 'C', 90.00, 'Public Bank'),
('ORD019', '2025-05-02', 0.00, 'CUST004', 135.00, 'C', 135.00, 'CIMB Clicks'),
('ORD080', '2025-06-30', 0.00, 'aqil yuri', 80.00, 'C', 80.00, 'Alliance Bank'),
('ORD100', '2025-05-28', 5.00, 'IntanHoshi', 60.00, 'C', 65.00, 'RHB Now'),
('ORD110', '2025-06-17', 0.00, 'najah', 300.00, 'C', 300.00, 'Bank Islam'),
('ORD111', '2025-06-09', 0.00, 'nughul', 15.00, 'C', 15.00, 'RHB Now'),
('ORD112', '2025-06-05', 0.00, 'CUST001', 40.00, 'C', 40.00, 'Maybank2u'),
('ORD121', '2025-06-03', 0.00, 'kim', 120.00, 'C', 120.00, 'Hong Leong Connect'),
('ORD133', '2025-06-12', 0.00, 'Shoi', 40.00, 'C', 40.00, 'Maybank2u'),
('ORD178', '2025-07-14', 5.00, 'hana', 30.00, 'P', 35.00, 'CIMB Clicks'),
('ORD197', '2025-07-14', 5.00, 'CUST001', 60.00, 'P', 65.00, 'CIMB Clicks'),
('ORD232', '2025-06-16', 0.00, 'CUST005', 80.00, 'C', 80.00, 'Ambank'),
('ORD249', '2025-07-14', 5.00, 'IntanHoshi', 30.00, 'P', 35.00, 'Maybank2u'),
('ORD321', '2025-05-30', 5.00, 'hana', 90.00, 'C', 95.00, 'MyBSN'),
('ORD333', '2025-07-10', 0.00, 'hana', 80.00, 'C', 80.00, 'CIMB Clicks'),
('ORD347', '2025-07-14', 5.00, 'Shoi', 55.00, 'P', 60.00, 'Maybank2u'),
('ORD403', '2025-07-14', 5.00, 'Shoi', 195.00, 'P', 200.00, 'Hong Leong Connect'),
('ORD408', '2025-07-30', 5.00, 'Shoi', 160.00, 'C', 165.00, 'Alliance Bank'),
('ORD410', '2025-07-14', 5.00, 'CUST002', 115.00, 'P', 120.00, 'Ambank'),
('ORD444', '2025-05-07', 0.00, 'kelly', 90.00, 'C', 90.00, 'Maybank2u'),
('ORD537', '2025-07-14', 5.00, 'amin', 75.00, 'P', 80.00, 'Public Bank'),
('ORD566', '2025-06-27', 0.00, 'amin', 180.00, 'C', 180.00, 'Bank Rakyat'),
('ORD742', '2025-07-14', 5.00, 'CUST004', 200.00, 'P', 205.00, 'MyBSN'),
('ORD743', '2025-07-14', 5.00, 'CUST004', 120.00, 'P', 125.00, 'Maybank2u'),
('ORD761', '2025-07-14', 5.00, 'CUST003', 100.00, 'P', 105.00, 'CIMB Clicks'),
('ORD766', '2025-06-09', 0.00, 'IntanHoshi', 30.00, 'C', 80.00, 'CIMB Clicks'),
('ORD780', '2025-07-14', 5.00, 'CUST001', 80.00, 'P', 85.00, 'Maybank2u'),
('ORD793', '2025-07-14', 5.00, 'IntanHoshi', 100.00, 'P', 105.00, 'Maybank2u'),
('ORD845', '2025-07-14', 5.00, 'CUST002', 20.00, 'P', 25.00, 'CIMB Clicks'),
('ORD879', '2025-07-14', 5.00, 'kelly', 120.00, 'P', 125.00, 'Bank Islam'),
('ORD888', '2025-05-31', 5.00, 'CUST002', 100.00, 'C', 105.00, 'Public Bank'),
('ORD912', '2025-05-12', 5.00, 'kelly', 60.00, 'C', 65.00, 'RHB Now'),
('ORD944', '2025-05-01', 0.00, 'CUST003', 140.00, 'C', 140.00, 'Maybank2u'),
('ORD974', '2025-07-14', 5.00, 'amin', 80.00, 'P', 85.00, 'CIMB Clicks'),
('ORD986', '2025-07-14', 5.00, 'CUST004', 120.00, 'P', 125.00, 'Maybank2u'),
('ORD999', '2025-05-20', 0.00, 'Jeremy', 135.00, 'C', 135.00, 'Bank Rakyat');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detailID` varchar(30) NOT NULL,
  `orderID` varchar(30) NOT NULL,
  `order_detailQuantity` int(200) NOT NULL,
  `order_detailPrice` decimal(20,2) NOT NULL,
  `prodID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detailID`, `orderID`, `order_detailQuantity`, `order_detailPrice`, `prodID`) VALUES
('ORD000001', 'ORD000', 1, 30.00, 'P4'),
('ORD000002', 'ORD000', 1, 30.00, 'P6'),
('ORD000003', 'ORD000', 1, 30.00, 'P7'),
('ORD002001', 'ORD002', 6, 40.00, 'P2'),
('ORD002002', 'ORD002', 7, 30.00, 'P4'),
('ORD008001', 'ORD008', 2, 30.00, 'P4'),
('ORD009001', 'ORD009', 1, 60.00, 'P8'),
('ORD019001', 'ORD019', 1, 15.00, 'P10'),
('ORD019002', 'ORD019', 1, 40.00, 'P1'),
('ORD019003', 'ORD019', 2, 40.00, 'P2'),
('ORD080001', 'ORD080', 2, 40.00, 'P1'),
('ORD100001', 'ORD100', 1, 60.00, 'P8'),
('ORD110001', 'ORD110', 1, 60.00, 'P8'),
('ORD110002', 'ORD110', 1, 60.00, 'P9'),
('ORD110003', 'ORD110', 2, 60.00, 'P15'),
('ORD110004', 'ORD110', 1, 60.00, 'P16'),
('ORD111001', 'ORD111', 1, 15.00, 'P10'),
('ORD112001', 'ORD112', 1, 40.00, 'P5'),
('ORD121001', 'ORD121', 1, 60.00, 'P15'),
('ORD121002', 'ORD121', 1, 60.00, 'P16'),
('ORD133001', 'ORD133', 1, 20.00, 'P11'),
('ORD133002', 'ORD133', 1, 20.00, 'P12'),
('ORD178001', 'ORD178', 1, 30.00, 'P4'),
('ORD197001', 'ORD197', 2, 30.00, 'P4'),
('ORD232001', 'ORD232', 1, 40.00, 'P5'),
('ORD232002', 'ORD232', 1, 40.00, 'P1'),
('ORD249001', 'ORD249', 1, 30.00, 'P6'),
('ORD321001', 'ORD321', 1, 60.00, 'P16'),
('ORD321002', 'ORD321', 1, 30.00, 'P7'),
('ORD333001', 'ORD333', 1, 40.00, 'P1'),
('ORD333002', 'ORD333', 1, 40.00, 'P2'),
('ORD347001', 'ORD347', 1, 55.00, 'P3'),
('ORD403001', 'ORD403', 3, 40.00, 'P1'),
('ORD403002', 'ORD403', 1, 60.00, 'P8'),
('ORD403003', 'ORD403', 1, 15.00, 'P10'),
('ORD408001', 'ORD408', 2, 40.00, 'P1'),
('ORD408002', 'ORD408', 2, 40.00, 'P2'),
('ORD410001', 'ORD410', 2, 20.00, 'P12'),
('ORD410002', 'ORD410', 1, 60.00, 'P9'),
('ORD410003', 'ORD410', 1, 15.00, 'P13'),
('ORD444001', 'ORD444', 3, 30.00, 'P6'),
('ORD537001', 'ORD537', 1, 55.00, 'P3'),
('ORD537002', 'ORD537', 1, 20.00, 'P11'),
('ORD566001', 'ORD566', 3, 60.00, 'P9'),
('ORD742001', 'ORD742', 5, 40.00, 'P2'),
('ORD743001', 'ORD743', 2, 60.00, 'P15'),
('ORD761001', 'ORD761', 1, 30.00, 'P7'),
('ORD761002', 'ORD761', 1, 40.00, 'P5'),
('ORD761003', 'ORD761', 1, 30.00, 'P4'),
('ORD766001', 'ORD766', 1, 30.00, 'P6'),
('ORD780001', 'ORD780', 2, 30.00, 'P6'),
('ORD780002', 'ORD780', 1, 20.00, 'P14'),
('ORD793001', 'ORD793', 1, 40.00, 'P2'),
('ORD793002', 'ORD793', 1, 60.00, 'P16'),
('ORD845001', 'ORD845', 1, 20.00, 'P11'),
('ORD879001', 'ORD879', 1, 60.00, 'P8'),
('ORD879002', 'ORD879', 1, 60.00, 'P9'),
('ORD888001', 'ORD888', 1, 60.00, 'P9'),
('ORD888002', 'ORD888', 1, 40.00, 'P5'),
('ORD912001', 'ORD912', 2, 30.00, 'P4'),
('ORD944001', 'ORD944', 2, 20.00, 'P11'),
('ORD944002', 'ORD944', 2, 20.00, 'P12'),
('ORD944003', 'ORD944', 1, 60.00, 'P15'),
('ORD974001', 'ORD974', 1, 40.00, 'P1'),
('ORD974002', 'ORD974', 1, 40.00, 'P2'),
('ORD986001', 'ORD986', 2, 40.00, 'P1'),
('ORD986002', 'ORD986', 1, 40.00, 'P2'),
('ORD999001', 'ORD999', 1, 40.00, 'P1'),
('ORD999002', 'ORD999', 1, 40.00, 'P2'),
('ORD999003', 'ORD999', 1, 55.00, 'P3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodID` varchar(30) NOT NULL,
  `prodName` varchar(200) NOT NULL,
  `prodPrice` decimal(20,2) NOT NULL,
  `prodCategory` char(1) NOT NULL COMMENT 'A=Accessories, F=Women, M=Men, K=Kids, U=Unisex',
  `prodStatus` char(1) NOT NULL COMMENT 'A=Active, I=Inactive',
  `prodStock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodID`, `prodName`, `prodPrice`, `prodCategory`, `prodStatus`, `prodStock`) VALUES
('P1', 'Ocean Vibe Tee', 40.00, 'M', 'A', 100),
('P10', 'Cozy Knit Ankle Socks', 15.00, 'A', 'A', 100),
('P11', 'Sleek Shades Sunglasses', 20.00, 'A', 'A', 100),
('P12', 'Vibe Band Stretch Headband', 20.00, 'A', 'A', 100),
('P13', 'Snap Style Cap', 15.00, 'A', 'A', 100),
('P14', 'Chill Brim Sun Hat', 20.00, 'A', 'A', 100),
('P15', 'Core Sweat Unisex Sweater', 60.00, 'U', 'A', 100),
('P16', 'Street Heat Unisex Hoodie', 60.00, 'U', 'A', 100),
('P2', 'Urban Tee', 40.00, 'M', 'A', 100),
('P3', 'Flex Fit Pants', 55.00, 'M', 'A', 100),
('P4', 'Chic Cut Shirt', 30.00, 'F', 'A', 99),
('P5', 'Elegance Long Shirt', 40.00, 'F', 'A', 100),
('P6', 'Breezy Sleeveless Top', 30.00, 'F', 'A', 100),
('P7', 'Women\'s Power Pants', 30.00, 'F', 'A', 100),
('P8', 'Lil\' Miss Style Set', 60.00, 'K', 'A', 100),
('P9', 'Lil\' Champ Outfit', 60.00, 'K', 'A', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`custID`,`prodID`),
  ADD KEY `prodID` (`prodID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbID`),
  ADD KEY `custID` (`custID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `custID` (`custID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detailID`),
  ADD KEY `prodID` (`prodID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodID`),
  ADD KEY `prodCategory` (`prodCategory`),
  ADD KEY `prodStatus` (`prodStatus`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
