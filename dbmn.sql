-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2021 at 10:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmn`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccID` varchar(6) NOT NULL,
  `Acc_Date` date NOT NULL,
  `Detail` varchar(100) NOT NULL,
  `Income` float NOT NULL,
  `Outcome` float NOT NULL,
  `ListID` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccID`, `Acc_Date`, `Detail`, `Income`, `Outcome`, `ListID`) VALUES
('000001', '2020-01-01', 'ขายของ', 10000, 0, 'i1'),
('000002', '2020-01-02', 'เงินเดือน', 20000, 0, 'i2'),
('000003', '2020-01-03', 'ซื้อของ', 0, 3000, 'o1'),
('000004', '2020-02-03', 'ซื้อขนม', 0, 400, 'o3');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ListID` varchar(2) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ListID`, `Name`) VALUES
('i1', 'รายรับ'),
('i2', 'เงินเดือน'),
('o1', 'รายจ่าย'),
('o2', 'อาหาร'),
('o3', 'ลงทุน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccID`),
  ADD KEY `ListID` (`ListID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ListID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`ListID`) REFERENCES `list` (`ListID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
