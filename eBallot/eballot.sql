-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 11:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eballot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `SL` int(11) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`SL`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `axe`
--

CREATE TABLE `axe` (
  `SL` int(11) NOT NULL,
  `symbol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `SL` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pass` int(10) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `party` varchar(30) NOT NULL,
  `symbol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`SL`, `fname`, `lname`, `uname`, `pass`, `nid`, `party`, `symbol`) VALUES
(3, 'Tan', 'Zil', 'Tan123', 1234, '123456789', 'First Citizens Party', 'Axe'),
(4, 'RZ', 'Dihan', 'Dihan', 1122, '123456', 'Southern Future Party', 'Lotus');

-- --------------------------------------------------------

--
-- Table structure for table `clock`
--

CREATE TABLE `clock` (
  `SL` int(11) NOT NULL,
  `symbol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ec`
--

CREATE TABLE `ec` (
  `SL` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` int(5) NOT NULL,
  `area` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec`
--

INSERT INTO `ec` (`SL`, `fname`, `lname`, `uname`, `phone`, `pass`, `area`) VALUES
(11, 'Sanjida', 'Jim', 'EC', 1718257097, 5555, 'Gazipur 2'),
(12, 'Israd', 'Ayon', 'Ayon', 1718257097, 456, 'Gazipur 2'),
(13, 'Afrin', 'Jassi', 'Jassi', 1754628485, 789, 'Gazipur 1');

-- --------------------------------------------------------

--
-- Table structure for table `lotus`
--

CREATE TABLE `lotus` (
  `SL` int(11) NOT NULL,
  `symbol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `SL` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `nid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` int(11) NOT NULL,
  `area` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`SL`, `fname`, `lname`, `uname`, `nid`, `phone`, `pass`, `area`) VALUES
(7, 'RZ', 'Dihan', 'Dihan', 123456, 1718257097, 123, 'Gazipur 1'),
(10, 'Raj', 'Gosh', 'RG', 1122, 1648474774, 123456, 'Gazipur 2'),
(12, 'Israd', 'Ayon', 'Ayon', 114455, 1754628485, 123, 'Gazipur 1'),
(13, 'RZ', 'Dihan', 'Voter', 123456, 1754628485, 0, 'Gazipur 1'),
(14, 'nnjynjy', 'fdfdfds', 'admin', 123, 1648474774, 0, 'Gazipur 1');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `SL` int(11) NOT NULL,
  `symbol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`SL`, `symbol`) VALUES
(1, 'Clock'),
(2, 'Clock'),
(3, 'Lotus'),
(4, 'Lotus'),
(5, 'Axe'),
(6, 'Clock'),
(7, 'Axe'),
(8, 'Axe'),
(9, 'Lotus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `axe`
--
ALTER TABLE `axe`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `clock`
--
ALTER TABLE `clock`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `ec`
--
ALTER TABLE `ec`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `lotus`
--
ALTER TABLE `lotus`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `axe`
--
ALTER TABLE `axe`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clock`
--
ALTER TABLE `clock`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ec`
--
ALTER TABLE `ec`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lotus`
--
ALTER TABLE `lotus`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
