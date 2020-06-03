-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 06:22 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adno` int(50) NOT NULL,
  `adname` varchar(50) DEFAULT NULL,
  `adpass` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adno`, `adname`, `adpass`) VALUES
(1, 'nadeem', 'nadeem');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sno`, `name`, `email`, `msg`) VALUES
(23, 'salman', 'salman@gmail.com', 'twinkle twinkle little star,\r\nhow i wonder what you are,\r\nup above the world so high,\r\nlike a diamond in the sky..							');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `sr` int(20) NOT NULL,
  `nm` varchar(50) DEFAULT NULL,
  `em` varchar(100) DEFAULT NULL,
  `ms` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`sr`, `nm`, `em`, `ms`) VALUES
(5, 'sofiya', 'sofi@gmail.com', '	quweyqwyqtq7etqq						'),
(6, 'farheen', 'farru@gmail.com', '	ieqyepweiruwerybwi						');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `srno` int(5) NOT NULL,
  `eno` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rno` int(5) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `upmonth` varchar(10) DEFAULT NULL,
  `nomonth` int(5) DEFAULT NULL,
  `rdate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`srno`, `eno`, `name`, `rno`, `amount`, `upmonth`, `nomonth`, `rdate`) VALUES
(15, 'gh5819', 'sofiya', 1, 4800, 'october', 3, '2018-05-10 06:31:10'),
(16, 'gi8037', 'maryam', 2, 4800, 'june', 3, '2018-05-28 06:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `fseater`
--

CREATE TABLE `fseater` (
  `rno` int(11) NOT NULL,
  `r1` varchar(10) DEFAULT NULL,
  `r2` varchar(10) DEFAULT NULL,
  `r3` varchar(10) DEFAULT NULL,
  `r4` varchar(10) DEFAULT NULL,
  `r5` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fseater`
--

INSERT INTO `fseater` (`rno`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(1, 'gh5819', NULL, NULL, NULL, NULL),
(2, NULL, 'gi8037', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sno`, `name`, `sid`, `address`, `pass`, `gender`, `post`, `contact`, `email`) VALUES
(11, 'usaid', '101', 'sambhal', 'usaid', 'male', 'manager', '9898989898', 'usaidonly4u@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stafflog`
--

CREATE TABLE `stafflog` (
  `srno` int(77) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafflog`
--

INSERT INTO `stafflog` (`srno`, `user`, `pass`) VALUES
(1, 'usaid', 'usaid');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `srno` int(100) NOT NULL,
  `enno` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `course` varchar(200) DEFAULT NULL,
  `allot_date` date DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `roomno` int(200) DEFAULT NULL,
  `feesubdate` date DEFAULT NULL,
  `uptomonth` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`srno`, `enno`, `password`, `name`, `course`, `allot_date`, `address`, `contact`, `email`, `roomno`, `feesubdate`, `uptomonth`) VALUES
(35, 'gh5819', 'sofiya', 'sofiya', 'bca', '2018-05-10', 'aligarh', '2323232323', 'sofi@gmail.com', 1, '2018-05-10', 'october'),
(36, 'gi8037', 'maryam', 'maryam', 'ba', '2018-05-28', 'sambhal', '4545454545', 'mary@gmail.com', 2, '2018-05-28', 'june'),
(34, 'gi9633', 'farheen', 'farheen', 'bca', NULL, 'amh', '2345678982', 'farru@gmail.com', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adno`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `fseater`
--
ALTER TABLE `fseater`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `stafflog`
--
ALTER TABLE `stafflog`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `unique` (`enno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `sr` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stafflog`
--
ALTER TABLE `stafflog`
  MODIFY `srno` int(77) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
