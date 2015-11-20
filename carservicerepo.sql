-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 04:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carservicerepo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookservice`
--

CREATE TABLE IF NOT EXISTS `bookservice` (
  `book_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vehicle_ID` int(11) DEFAULT NULL,
  `Package_ID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`book_ID`),
  KEY `Vehicle_ID` (`Vehicle_ID`),
  KEY `Package_ID` (`Package_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `Package_ID` int(11) NOT NULL,
  `package_Name` varchar(20) DEFAULT NULL,
  `AdvancePayment` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`Package_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `Service_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vehicle_ID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Cost` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`Service_ID`),
  KEY `Vehicle_ID` (`Vehicle_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(20) DEFAULT NULL,
  `First_name` varchar(14) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `Address_no` varchar(10) DEFAULT NULL,
  `Address_street` varchar(20) DEFAULT NULL,
  `Address_city` varchar(20) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Email_address` varchar(30) NOT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `RequestType` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `Email_address` (`Email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `Vehicle_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `ChassiNumber` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Vehicle_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookservice`
--
ALTER TABLE `bookservice`
  ADD CONSTRAINT `bookservice_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicle` (`Vehicle_ID`),
  ADD CONSTRAINT `bookservice_ibfk_2` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicle` (`Vehicle_ID`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `userdetail` (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
