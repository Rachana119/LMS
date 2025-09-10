-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 11:42 PM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(20) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `usn`, `psw`, `status`) VALUES
(1, 'neelkantappa', '123', 'Active');
(2, 'madhu', '456', 'Active');
(3, 'vinod', '789', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(20) NOT NULL,
  `bid` int(20) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `cbook` varchar(50) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `count` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bid`, `bname`, `cbook`, `aname`, `ename`, `count`, `pic`) VALUES
(1, 434, 'wqe', 'WP', 'wqewq', 'wqe', '32', '../book/bg4.jpg'),
(2, 1969, 'Operating System Principles', 'OS', 'Abraham Silberschatz', '8th Edition', '10', '../book/bg2.jpg'),
(3, 4543, 'sdfsd', 'ML', 'dsf', 'fdsfcv', '43', '../book/bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_issued`
--

CREATE TABLE `book_issued` (
  `id` int(20) NOT NULL,
  `studentUSN` varchar(50) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `bid` int(20) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `idate` date NOT NULL,
  `rdate` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Requested'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_issued`
--

INSERT INTO `book_issued` (`id`, `studentUSN`, `studentName`, `bid`, `bname`, `aname`, `idate`, `rdate`, `status`) VALUES
(1, '4MC21CS102', 'Nandan CV', 1969, 'Operating system Principles', 'Abraham Silberschatz', '2024-07-11', '2024-07-11', 'Returned'),
(6, '4MC21CS102', 'Nandan CV', 1969, 'Operating', 'Abraham', '0000-00-00', '0000-00-00', 'Requested'),
(7, '4MC21CS102', 'Nandan CV', 1969, 'Operating', 'Abraham', '0000-00-00', '0000-00-00', 'Requested'),
(8, '4MC21CS102', 'Nandan CV', 1969, 'Operating', 'Abraham', '0000-00-00', '0000-00-00', 'Requested'),
(9, '4MC21CS102', 'Nandan CV', 1969, 'Operating', 'Abraham', '0000-00-00', '0000-00-00', 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(20) NOT NULL,
  `studentUSN` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentEmail` varchar(50) NOT NULL,
  `studentPSW` varchar(50) NOT NULL,
  `bookid` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `studentUSN`, `studentName`, `studentEmail`, `studentPSW`, `bookid`) VALUES
(1, '4MC21CS102', 'Nandan CV', 'nandanissac@gmail.com', '1234', 1969),
(2, 'mc123', 'asd', 'as@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_issued`
--
ALTER TABLE `book_issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_issued`
--
ALTER TABLE `book_issued`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
