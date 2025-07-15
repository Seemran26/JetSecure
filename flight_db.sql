-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 03:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `Flight_id` int(11) NOT NULL,
  `Fly_From` varchar(255) NOT NULL,
  `Fly_To` varchar(255) NOT NULL,
  `DepartureDateTime` datetime NOT NULL,
  `ArrivalDateTime` datetime NOT NULL,
  `SeatCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Flight_id`, `Fly_From`, `Fly_To`, `DepartureDateTime`, `ArrivalDateTime`, `SeatCapacity`) VALUES
(1, 'Delhi', 'Goa', '2023-11-22 00:00:00', '2023-11-25 00:00:00', 0),
(2, 'Delhi', 'Mumbai', '2023-11-29 00:00:00', '2023-12-01 00:00:00', 0),
(11, 'New Delhi', 'Goa', '2023-11-22 00:00:00', '2023-11-24 00:00:00', 0),
(17, 'New Delhi', 'Dubai', '2023-11-21 00:00:00', '2023-12-01 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_avail`
--

CREATE TABLE `flight_avail` (
  `Flight_Id` int(11) NOT NULL,
  `Fly_From` varchar(255) NOT NULL,
  `Fly_To` varchar(255) NOT NULL,
  `DepartureTime` varchar(255) NOT NULL,
  `ArrivalTime` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Flight_name` varchar(255) NOT NULL,
  `Stop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_avail`
--

INSERT INTO `flight_avail` (`Flight_Id`, `Fly_From`, `Fly_To`, `DepartureTime`, `ArrivalTime`, `Price`, `Duration`, `Flight_name`, `Stop`) VALUES
(1, 'New Delhi', 'Dubai', '10:30', '	\r\n01:30', '40,000/-', '4hr 30mins', 'Indigo', 'Direct'),
(2, 'Goa', 'London', '01:00', '23:00', '51,000/-', '8hr 45mins ', 'Indigo', 'Direct'),
(3, 'Goa', 'London', '10:20', '07:35', '68,190', '15hr 45mins', 'SWISS', '1 Stop'),
(4, 'Goa', 'London', '02:55', '09:45', '50,025/-', '12hr 20mins', 'SWISS', '1 Stop'),
(5, 'Goa', 'London', '06:00', '22:25', '53,044/-', '10hr 55m', 'Airways', '1 Stop'),
(6, 'New Delhi', 'Dubai', '01:35', '08:55', '55,024/-', '12hr 50mins', 'Atlantic', 'Direct');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('abc', 'abc'),
('sam', 'sam123\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`User_id`, `Username`, `Email`, `Password`) VALUES
(16, 'hello', 'hello@123', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Flight_id`);

--
-- Indexes for table `flight_avail`
--
ALTER TABLE `flight_avail`
  ADD PRIMARY KEY (`Flight_Id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `Flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `flight_avail`
--
ALTER TABLE `flight_avail`
  MODIFY `Flight_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
