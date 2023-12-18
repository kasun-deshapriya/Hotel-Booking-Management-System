-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 12:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` int(10) NOT NULL,
  `Customer_ID` int(10) NOT NULL,
  `Room _ID` int(10) NOT NULL,
  `Hall_ID` int(10) NOT NULL,
  `Date_Of_Check-in` date NOT NULL,
  `Date_Of_Check-out` date NOT NULL,
  `Number_Of_Guests` int(10) NOT NULL,
  `Package_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `M_ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`M_ID`, `Name`, `Email`, `Subject`, `Massage`) VALUES
(1, 'Kasun Deshappriya', ' abc123@gmail.com', 'hello', 'I am here'),
(2, 'Dilan Kanishka', ' dilan134@gmail.com', 'hello', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact_Number` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Name`, `Username`, `Password`, `Address`, `Contact_Number`, `Email`) VALUES
(1, 'Kasun Deshappriya', 'Kasun', '123', 'No05,Kurunagala', '0775518779', 'abc123@gmail.com'),
(2, 'Dilan Kanishka', 'Dilan', 'abc', 'No 10,puththalam road,Kuurunagala ', '0784522002', 'dilan134@gmail.com'),
(11, 'Thilin nuwan', 'nuwan', '120', 'kurunagala', '0478512625', 'thilin456@gmail.com'),
(12, 'Mohamed Siyam', 'siyam', '12345', 'ati,kurunegale', '0777546574', 'ssd@1gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_ID` int(10) NOT NULL,
  `Booking_ID` int(10) NOT NULL,
  `Invoice_Date` date NOT NULL,
  `Bill_Amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `Package_ID` int(10) NOT NULL,
  `Package_Type` varchar(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(10) NOT NULL,
  `Booking_ID` int(10) NOT NULL,
  `Payment_Method` varchar(20) NOT NULL,
  `Amount_Paid` varchar(10) NOT NULL,
  `Date_Of_Payment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` int(10) NOT NULL,
  `Room_Type` varchar(10) NOT NULL,
  `Room_Capacity` int(10) NOT NULL,
  `Room_Description` varchar(50) NOT NULL,
  `Room_Price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_hall`
--

CREATE TABLE `wedding_hall` (
  `Hall_ID` int(10) NOT NULL,
  `Hall_Type` varchar(20) NOT NULL,
  `Hall_Capacity` int(20) NOT NULL,
  `Hall_Description` varchar(50) NOT NULL,
  `Hall_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `booking_1` (`Customer_ID`),
  ADD KEY `booking_2` (`Hall_ID`),
  ADD KEY `Room _ID` (`Room _ID`),
  ADD KEY `Package_ID` (`Package_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_ID`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `wedding_hall`
--
ALTER TABLE `wedding_hall`
  ADD PRIMARY KEY (`Hall_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `M_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_2` FOREIGN KEY (`Hall_ID`) REFERENCES `wedding_hall` (`Hall_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Room _ID`) REFERENCES `room` (`Room_ID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Package_ID`) REFERENCES `packages` (`Package_ID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `booking` (`Booking_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `booking` (`Booking_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
