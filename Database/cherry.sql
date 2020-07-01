-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 06:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cherry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cherry_service`
--

CREATE TABLE `cherry_service` (
  `Dev_id` int(10) NOT NULL,
  `Dev_n_ln` varchar(50) NOT NULL,
  `Dev_phone` varchar(10) NOT NULL,
  `B_film` varchar(50) NOT NULL,
  `G_film` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `F_date` date NOT NULL,
  `E_date` date NOT NULL,
  `Shiping` text NOT NULL,
  `st_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cherry_service`
--

INSERT INTO `cherry_service` (`Dev_id`, `Dev_n_ln`, `Dev_phone`, `B_film`, `G_film`, `qty`, `F_date`, `E_date`, `Shiping`, `st_id`) VALUES
(4, 'apisit amklang', '0968081641', 'Kodak', 'EKTAR 100', '1', '2020-01-31', '2020-01-31', 'ems to:bangkok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cherry_st`
--

CREATE TABLE `cherry_st` (
  `ST_ID` varchar(4) NOT NULL,
  `ST_NAME` varchar(20) NOT NULL,
  `ST_LNAME` varchar(20) NOT NULL,
  `ST_USER` varchar(20) NOT NULL,
  `ST_PASS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cherry_st`
--

INSERT INTO `cherry_st` (`ST_ID`, `ST_NAME`, `ST_LNAME`, `ST_USER`, `ST_PASS`) VALUES
('ST01', 'Apisit', 'Amklang', 'nine_507@hotmail.com', 'apisit9877');

-- --------------------------------------------------------

--
-- Table structure for table `status_tb`
--

CREATE TABLE `status_tb` (
  `sta_id` int(2) NOT NULL,
  `statuss` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_tb`
--

INSERT INTO `status_tb` (`sta_id`, `statuss`) VALUES
(0, 'ยังไม่เสร็จ'),
(1, 'เสร็จแล้ว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cherry_service`
--
ALTER TABLE `cherry_service`
  ADD PRIMARY KEY (`Dev_id`,`st_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `cherry_st`
--
ALTER TABLE `cherry_st`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `status_tb`
--
ALTER TABLE `status_tb`
  ADD PRIMARY KEY (`sta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cherry_service`
--
ALTER TABLE `cherry_service`
  MODIFY `Dev_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cherry_service`
--
ALTER TABLE `cherry_service`
  ADD CONSTRAINT `cherry_service_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `status_tb` (`sta_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
