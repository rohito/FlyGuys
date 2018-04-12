-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 12:47 AM
-- Server version: 10.0.21-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_k1553451`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administrator`
--

CREATE TABLE IF NOT EXISTS `Administrator` (
  `Admin ID` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Administrator`
--

INSERT INTO `Administrator` (`Admin ID`, `Name`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Basket`
--

CREATE TABLE IF NOT EXISTS `Basket` (
  `BasketID` int(10) NOT NULL,
  `CustomerID` int(10) DEFAULT NULL,
  `DestinationID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Basket`
--

INSERT INTO `Basket` (`BasketID`, `CustomerID`, `DestinationID`, `Quantity`) VALUES
(1, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE IF NOT EXISTS `Booking` (
  `BookingID` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`BookingID`, `Date`) VALUES
(1, '2018-04-06'),
(2, '2018-04-06'),
(3, '2018-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `CustomerID` int(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Surname` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `Name`, `Surname`, `Email`) VALUES
(1, 'Hugo ', 'Allen', 'hugoallen@gmail.com'),
(2, 'Carol', 'Cart', 'carol@carol.co.uk'),
(3, 'Sheldon', 'Copper', 'S.copper@hotmail.com'),
(4, 'Tom', 'Flash', 'T.flash@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Destination`
--

CREATE TABLE IF NOT EXISTS `Destination` (
  `DestinationID` int(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Type` int(2) NOT NULL,
  `Duration` double(3,2) NOT NULL,
  `DepartureDate` varchar(10) NOT NULL,
  `DepartureDay` varchar(10) NOT NULL,
  `DepartureTime` double(3,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Destination`
--

INSERT INTO `Destination` (`DestinationID`, `Name`, `Type`, `Duration`, `DepartureDate`, `DepartureDay`, `DepartureTime`) VALUES
(1, 'Manchester', 1, 1.00, '13/04/2018', 'Friday', 8.30),
(2, 'Glasglow', 1, 1.50, '13/04/2018', 'Friday', 8.30),
(3, 'Dublin', 1, 1.25, '13/04/2018', 'Saturday', 8.30),
(4, 'Paris', 2, 1.25, '16/02/2018', 'Friday', 8.00),
(5, 'Madrid', 2, 2.50, '02/04/2018', 'Monday', 8.00),
(6, 'Brussels', 2, 1.25, '16/04/2018', 'Sunday', 8.00),
(7, 'Milan Bergamo', 2, 2.75, '15/04/2018', 'Saturday', 8.00),
(8, 'Barcelona', 2, 1.75, '14/04/2018', 'Friday', 8.00),
(9, 'Porto', 2, 2.75, '15/04/2018', 'Sunday', 9.00),
(10, 'Bahamas', 2, 9.99, '17/04/2018', 'Tuesday', 9.00),
(11, 'Ktm', 2, 8.50, '09/04/2018', 'Monday', 9.05),
(12, 'Bologna', 2, 2.25, '16/04/2018', 'Monday', 9.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`Admin ID`);

--
-- Indexes for table `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`BasketID`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `Destination`
--
ALTER TABLE `Destination`
  ADD PRIMARY KEY (`DestinationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administrator`
--
ALTER TABLE `Administrator`
  MODIFY `Admin ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Basket`
--
ALTER TABLE `Basket`
  MODIFY `BasketID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `BookingID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Destination`
--
ALTER TABLE `Destination`
  MODIFY `DestinationID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
