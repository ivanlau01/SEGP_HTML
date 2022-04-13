-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 11:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `segp`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(1) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNum` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmPass` varchar(20) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fullName`, `userName`, `email`, `phoneNum`, `password`, `confirmPass`, `code`, `status`) VALUES
(1, 'ivan lau', 'heheh', 'qm5796@gmail.com', 123456789, 'abcdefg', 'abcdefg', 364084, NULL),
(2, 'eevan', 'hohoh', 'lau@gmail.comn', 123456789, '123456789', '123456789', NULL, NULL),
(3, 'bobo', 'bobo', 'abc@gmail.com', 12345678, 'qwerty', 'qwerty', NULL, NULL),
(4, 'Yuki', 'yukieio.yj', 'yukieio2001@hotmail.com', 129038186, 'harlooo', 'harloooo', NULL, NULL),
(5, 'dfsd', 'dsf', 'dfss@gmail.com', 0, 'sdf', 'sdf', NULL, NULL),
(6, 'dfsd', 'dsf', 'dss@gmail.com', 0, 'fdsf', 'sdfsdf', NULL, NULL),
(7, 'sdaad', 'asdada', 'dsds@gmail.com', 0, 'sdfsf', 'sfsf', NULL, NULL),
(8, 'asdasd', 'sdadasd', 'adasd@gmail.com', 0, 'asdasd', 'dsaada', NULL, NULL),
(9, 'asdd', 'asdasd', 'asdasd@gmail.com', 0, 'sadad', 'sadada', NULL, NULL),
(10, 'dsfsdf', 'sdfsfs', '', 0, '', '', NULL, NULL),
(11, 'sda', 'asd', 'sad', 0, 'asd', 'asd', NULL, NULL),
(12, 'asdas', 'asd', 'asd@gmail.com', 0, 'asd', 'asd', NULL, NULL),
(13, 'asd', 'asd', 'asdas@gmail.com', 0, 'ajsnd', 'njasndakjndka', NULL, NULL),
(14, 'sda', 'sda', 'sdada@gmail.com', 123123, 'abc', 'adc', NULL, NULL),
(15, 'sdf', 'df', 'sdf@gmail.com', 0, 'fsd', 'fsd', NULL, NULL),
(16, 'asd', 'asd', 'adads@gmail.com', 0, 'sfs', 'fsdf', NULL, NULL),
(17, 'sfsdf', 'fdsf', 'sfsdfnk@gmail.com', 0, 'fsdf', 'iojoi', NULL, NULL),
(18, 'fbjsbfj', 'fdjbsjkgbj', 'sfsdf@gmail.com', 0, 'oop', 'oop', NULL, NULL),
(19, 'niubu', 'bb', 'efg@gmail.com', 196967428, 'poiuyt', 'poiuyt', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
