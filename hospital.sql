-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_login_id` int(11) NOT NULL,
  `admin_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_test`
--

CREATE TABLE `patient_test` (
  `patient_ID` int(20) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `phone_number` int(14) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `cost` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_test`
--

INSERT INTO `patient_test` (`patient_ID`, `patient_name`, `phone_number`, `test_name`, `cost`) VALUES
(1, 'Karim', 1234567897, 'Blood Test', 350),
(2, 'Tanzim', 1234567897, 'Blood test', 350),
(33, 'Rahim', 1234567897, 'Urine test', 450);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('nafizfuad', '12345678'),
('anisislam', '12345678'),
('nafizfuad', '12345678'),
('anisislam', '12345678'),
('aksh12', '12345678'),
('akash12', '12345678'),
('', ''),
('tanzim', '12345678'),
('yasir', '12345678'),
('arif', '12345678'),
('nafiz', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_test`
--
ALTER TABLE `patient_test`
  ADD PRIMARY KEY (`patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
