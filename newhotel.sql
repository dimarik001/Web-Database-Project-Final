-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 04:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newhotel`
--
CREATE DATABASE IF NOT EXISTS `newhotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `newhotel`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `CarId` int(11) NOT NULL,
  `CarName` varchar(40) NOT NULL,
  `CarPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `FoodId` int(11) NOT NULL,
  `FoodName` varchar(40) NOT NULL,
  `FoodPrice` float NOT NULL,
  `FoodType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `UserName` varchar(50) NOT NULL,
  `NumberofPerson` int(200) NOT NULL,
  `RoomType` int(50) NOT NULL,
  `ArrivalDate` date NOT NULL,
  `DepartureDate` date NOT NULL,
  `FoodIncluded` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`UserName`, `NumberofPerson`, `RoomType`, `ArrivalDate`, `DepartureDate`, `FoodIncluded`) VALUES
('aa', 1212, 1, '2018-08-22', '2018-08-15', 0),
('aa', 1212, 2, '2018-08-22', '2018-08-15', 0),
('aaaa', 3, 3, '2018-08-02', '2018-08-11', 0),
('Golemi', 2, 4, '2018-08-03', '2018-08-18', 0),
('', 0, 5, '0000-00-00', '0000-00-00', 0),
('sasas', 3, 6, '2018-08-04', '2018-08-25', 0),
('peter', 5, 7, '2018-12-01', '2018-12-05', 0),
('', 0, 8, '0000-00-00', '0000-00-00', 0),
('', 0, 9, '0000-00-00', '0000-00-00', 0),
('1s1s1', 2, 10, '2018-08-04', '2018-08-11', 0),
('Atanasov', 4, 11, '2018-08-09', '2018-08-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `RoomType` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `UserName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailAdress` varchar(30) NOT NULL,
  `TelNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`UserName`, `password`, `emailAdress`, `TelNumber`) VALUES
('', '', '', 0),
('aaa', 'aaaaa', 'mail@address.com', 0),
('aaaaaaabbbbbba', 'aaaaaaaaaa', 'aaaaaaaaaa', 0),
('Ani', '1234', 'ani@gill.com', 2147483647),
('Dima', '2411', 'dima@dima.com', 2147483647),
('james', 'b123', 'aa@gmail.com', 514),
('qqq', 'asasa', 'asasasa', 0),
('test2', '1111', 'asas', 0),
('z', 'z', 'z', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CarId`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`FoodId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`RoomType`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomType`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `CarId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `FoodId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `RoomType` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `RoomType` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
