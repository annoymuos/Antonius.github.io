-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 02:39 AM
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
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

CREATE TABLE `feedback1` (
  `ID` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `massage` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback1`
--

INSERT INTO `feedback1` (`ID`, `name`, `massage`, `created_at`, `email`) VALUES
(25, 'dhueh', 'hiiiiiii apakabar', '2023-11-23', 'test@gmail.com'),
(26, 'test', 'pouA HFIA', '2023-11-23', 'test@gmail.com'),
(27, 'azka', 'anjing', '2023-11-24', 'anjay@gemail.com'),
(28, 'test', 'BaBi', '2023-11-24', 'test@gmail.com'),
(29, 'test', 'babi', '2023-11-24', 'panduajaykan@gmail.com'),
(30, 'anonymous', 'anjay keren bang', '2023-11-24', 'test@gmail.com'),
(31, 'fsivf', 'usfui', '2023-12-06', ''),
(32, '', '', '2023-12-07', ''),
(33, 'asep', 'anjir keren banget bang', '2023-12-07', 'asep@gmail.com'),
(34, 'du', 'jfbzhe', '2023-12-07', 'abdibfiu'),
(40, 'anonymous', 'anjir keren banget bang', '2023-12-13', 'panduajaykan@gmail.com'),
(41, '', 'anjayyy keren banget bang', '2023-12-15', 'test@gmail.com'),
(42, 'test', 'Anjay keren banget bang', '2023-12-18', 'test@gmail.com'),
(43, 'test', 'ANjay keren banget bang', '2023-12-18', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback1`
--
ALTER TABLE `feedback1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback1`
--
ALTER TABLE `feedback1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
