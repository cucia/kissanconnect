-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 08:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kissanconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allproduct`
--

CREATE TABLE `tbl_allproduct` (
  `pid` int(10) NOT NULL,
  `catid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryid` int(10) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catimg` varchar(100) DEFAULT NULL,
  `cattype` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryid`, `catname`, `catimg`, `cattype`, `status`) VALUES
(1, 'djgfjhgfaskjsgsdfg', NULL, 'expert', 0),
(2, 'zxcv', NULL, 'expert', 0),
(3, 'Crop Production', NULL, 'expert', 0),
(4, 'Natural Resources', NULL, 'expert', 0),
(5, 'thtgh', NULL, 'expert', 0),
(6, 'qwerty', NULL, 'expert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert`
--

CREATE TABLE `tbl_expert` (
  `expertid` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `eaddress` varchar(100) NOT NULL,
  `eemail` varchar(100) NOT NULL,
  `econtact` varchar(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qulaification` varchar(50) NOT NULL,
  `field` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expert`
--

INSERT INTO `tbl_expert` (`expertid`, `ename`, `eaddress`, `eemail`, `econtact`, `designation`, `qulaification`, `field`, `image`, `status`) VALUES
(9, 'Mohan  Kunar', 'Vadakkethil', 'mohan@gmail.com', '9087654321', 'Agri-Expert', 'Msc.Plant Biotechnology', 'Natural Resources', 'images/t2.jpg', 0),
(10, 'Teena Mathew', 'Teena House', 'teena@gmail.com', '9087654322', 'Agricultural Engineer', 'BS in Agricultural engineering', 'Crop Production', 'images/t1.jpg', 0),
(11, 'abcd', 'abcdefg', 'abcd@gmail.com', '123456', 'qwert', 'asdfg', 'zxcv', 'images/t3.jpg', 0),
(12, 'Expert', 'address', 'expert1@gmail.com', '1234567', 'Agri-Expert', 'BS in Agricultural engineering', 'Crop Production', 'images/15.jpg', 0),
(13, 'expert22', 'address1', 'expert2@gmail.com', '12345', 'designation', 'BS in Agricultural engineering', 'Natural Resources', 'images/14.jpg', 0),
(14, 'jomol', 'adqwrfswrfed', 'jomol564@gmail.com', '1234567234', 'frghtf', 'rtgreytytry', 'thtgh', 'images/Screenshot (109).png', 0),
(15, 'jane ', 'mannarkad', 'jane@rit.com', '758512546', 'qwerty', 'mbbs', 'qwerty', 'images/12.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

CREATE TABLE `tbl_farmer` (
  `farmerid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `faddr` varchar(100) NOT NULL,
  `fdistrict` varchar(50) NOT NULL,
  `fstate` varchar(50) NOT NULL,
  `fcontact` varchar(10) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_farmer`
--

INSERT INTO `tbl_farmer` (`farmerid`, `fname`, `faddr`, `fdistrict`, `fstate`, `fcontact`, `femail`, `status`) VALUES
(4, 'Philip Varghese', 'Kochuparambil House', 'Pathanamthitta', 'Kerala', '9876543211', 'philip@gmail.com', 0),
(5, 'Geetha Suresh', 'Geethalayam house', 'Pathanamthitta', 'Kerala', '9876543210', 'geetha@gmail.com', 0),
(6, 'farmer', 'farm house', 'pathanamthitta', 'kerala', '122333', 'farmer@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedid` int(10) NOT NULL,
  `farmerid` int(10) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedid`, `farmerid`, `feedback`, `reply`, `status`) VALUES
(1, 1, 'good helping mentality', 'good', 1),
(2, 4, 'wref', 'retry', 1),
(3, 4, 'good ', 'thanks ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finding`
--

CREATE TABLE `tbl_finding` (
  `findingid` int(10) NOT NULL,
  `expertid` int(10) NOT NULL,
  `fnote` varchar(100) NOT NULL,
  `fdescri` varchar(100) NOT NULL,
  `uplddate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finding`
--

INSERT INTO `tbl_finding` (`findingid`, `expertid`, `fnote`, `fdescri`, `uplddate`, `status`) VALUES
(3, 10, '../findings/KISSANCONNECT.pdf', 'project file ', '2022-02-01', 1),
(4, 10, '../findings/KissanConnect[Mini Project].pdf', 'Kissan connect', '2022-02-04', 2),
(5, 10, '../findings/data-entry-operator.pdf', 'FR3W5', '2022-02-12', 2),
(6, 12, '../findings/assistant-grade2.pdf', 'utryujki', '2022-02-13', 2),
(7, 12, '../findings/assistantORauditor.pdf', 'herydjki', '2022-02-13', 2),
(8, 10, '../findings/34-jinsa_joy-cycle1-MAD LAB record.pdf', 'qweqre', '2022-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fproduct`
--

CREATE TABLE `tbl_fproduct` (
  `pid` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fproduct`
--

INSERT INTO `tbl_fproduct` (`pid`, `fid`, `category`, `pname`, `quantity`, `price`, `image`, `status`) VALUES
(1, 4, 'dg4eratb', 're', 1, 1, '../images/farmeritem/google.jpg', 0),
(2, 4, 'tyuio', 't6yi8', 3, 12, '../images/farmeritem/Screenshot (91).png', 0),
(3, 0, 'tyuio', 't6yi8', 1, 23, '../images/farmeritem/Screenshot (76).png', 0),
(4, 4, 'vegetable', 'eeweqfr', 1, 100, '../images/farmeritem/4.jpg', 0),
(5, 4, 'fruits ', 'apple ', 30, 112, '../images/farmeritem/Screenshot (76).png', 0),
(6, 4, '', 'apple ', 22, 22, '../images/farmeritem/Screenshot (109).png', 0),
(7, 5, '', 'apple ', 2, 22, '../images/farmeritem/Screenshot (95).png', 0),
(8, 5, '', 'ruirtfn', 1, 1111, '../images/farmeritem/Screenshot (119).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `username`, `password`, `usertype`, `status`) VALUES
(17, 'abcd@gmail.com', '123456', 'expert', 1),
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(18, 'expert1@gmail.com', '1234567', 'expert', 1),
(19, 'expert2@gmail.com', '12345', 'expert', 2),
(22, 'farmer@gmail.com', '122333', 'farmer', 1),
(14, 'geetha@gmail.com', '9876543210', 'farmer', 1),
(21, 'jane@rit.com', '758512546', 'expert', 2),
(20, 'jomol564@gmail.com', '1234567234', 'expert', 1),
(15, 'mohan@gmail.com', '9087654321', 'expert', 1),
(13, 'philip@gmail.com', '9876543211', 'farmer', 1),
(16, 'teena@gmail.com', '9087654322', 'expert', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_query`
--

CREATE TABLE `tbl_query` (
  `qid` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `catid` int(10) NOT NULL,
  `query` varchar(100) NOT NULL,
  `qdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_query`
--

INSERT INTO `tbl_query` (`qid`, `fid`, `catid`, `query`, `qdate`, `status`) VALUES
(1, 4, 3, 'suitable fertilizer', '2022-01-26', 0),
(2, 4, 1, 'RETGETY', '2022-02-12', 0),
(3, 4, 6, 'why but y\r\n', '2022-02-23', 0),
(4, 4, 3, 'which fertilizer is best\r\n', '2022-02-25', 0),
(5, 5, 3, 'crop production steps\r\n', '2022-02-26', 0),
(6, 5, 4, 'how to save resources', '2022-02-26', 0),
(8, 5, 4, 'how to preserve natural resources\r\n', '2022-02-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queryreply`
--

CREATE TABLE `tbl_queryreply` (
  `qrid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `exid` int(10) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `qrdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_queryreply`
--

INSERT INTO `tbl_queryreply` (`qrid`, `qid`, `exid`, `reply`, `qrdate`, `status`) VALUES
(2, 1, 10, 'GHHBNFGHFTN', '2022-02-12', 0),
(3, 6, 9, 'Control pollution', '2022-02-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sdate` date NOT NULL,
  `ldate` date NOT NULL,
  `sdescri` varchar(50) NOT NULL,
  `stype` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`sid`, `sname`, `sdate`, `ldate`, `sdescri`, `stype`, `status`) VALUES
(1, 'fertilizer', '2022-02-24', '2022-02-26', 'tyghuji', 'fhtgh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_allproduct`
--
ALTER TABLE `tbl_allproduct`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tbl_expert`
--
ALTER TABLE `tbl_expert`
  ADD PRIMARY KEY (`expertid`);

--
-- Indexes for table `tbl_farmer`
--
ALTER TABLE `tbl_farmer`
  ADD PRIMARY KEY (`farmerid`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `tbl_finding`
--
ALTER TABLE `tbl_finding`
  ADD PRIMARY KEY (`findingid`);

--
-- Indexes for table `tbl_fproduct`
--
ALTER TABLE `tbl_fproduct`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `tbl_query`
--
ALTER TABLE `tbl_query`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_queryreply`
--
ALTER TABLE `tbl_queryreply`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_allproduct`
--
ALTER TABLE `tbl_allproduct`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_expert`
--
ALTER TABLE `tbl_expert`
  MODIFY `expertid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_farmer`
--
ALTER TABLE `tbl_farmer`
  MODIFY `farmerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_finding`
--
ALTER TABLE `tbl_finding`
  MODIFY `findingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_fproduct`
--
ALTER TABLE `tbl_fproduct`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_query`
--
ALTER TABLE `tbl_query`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_queryreply`
--
ALTER TABLE `tbl_queryreply`
  MODIFY `qrid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
