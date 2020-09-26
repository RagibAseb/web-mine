-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2020 at 08:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myself`
--

-- --------------------------------------------------------

--
-- Table structure for table `Academic_Info`
--

CREATE TABLE `Academic_Info` (
  `Exam` varchar(20) NOT NULL,
  `Institute name` varchar(256) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `CGPA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Academic_Info`
--

INSERT INTO `Academic_Info` (`Exam`, `Institute name`, `Board`, `CGPA`) VALUES
('SSS', 'Hasnabad Kamuchanshah High School', 'Dhaka', '5.00'),
('HSC', 'Govt. Kabi Nazrul College', 'Dhaka', '4.83'),
('B.Sc', 'Bangladesh University of Professionals', 'Dhaka', '3.72');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `language` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`language`, `skill`, `experience`) VALUES
('Structure language', '92%', '1 years'),
('C++', '80%', '1 years'),
('Java', '80%', '1 years'),
('PHP', '30%', '2 weeks'),
('JS', '40%', '3 months');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
