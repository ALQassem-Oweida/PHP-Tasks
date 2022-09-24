-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 06:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ouremployee`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `empID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `Location`, `Type`, `empID`) VALUES
(1, '111 University St. Amman, Jordan ', 'Office', 1),
(2, '60 St. Salt, Jordan ', 'Home', 1),
(3, '210 University St. Irbid, Jordan ', 'Office', 2),
(4, '30 Al-Saadeh St. Zarqa, Jordan ', 'Home', 2),
(5, '12 Prince Hamza St. Salt, Jordan', 'Home', 8),
(6, '76 Rainbow St. Amman, Jordan', 'Flat', 8),
(7, '12 Prince Hamza St. Salt, Jordan', 'Home', 6),
(8, '12 Prince Hamza St. Salt, Jordan', 'Home', 4),
(9, '234 Prince Hamza St. Salt, Jordan', 'Home', 3),
(10, '\r\n123 Hamza St. Salt, Jordan', 'Home', 5),
(11, '213 Prince Hamza St. Salt, Jordan', 'Home', 7);

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `id` int(100) NOT NULL,
  `PassportNum` varchar(50) NOT NULL,
  `PassportExpiryDate` date NOT NULL,
  `empID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `PassportNum`, `PassportExpiryDate`, `empID`) VALUES
(1, 'LM12345', '2025-09-17', 1),
(2, 'QM12455', '2023-09-13', 2),
(3, 'AM12344', '2026-09-17', 3),
(4, 'ZM12111', '2024-09-01', 4),
(5, 'DQ12222', '2022-09-30', 5),
(6, 'SM12128', '2022-12-23', 6),
(7, 'WX12111', '2022-10-21', 7),
(8, 'MM12588', '2022-09-23', 8);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `HiringDate` date NOT NULL,
  `Salary` int(11) NOT NULL,
  `Department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `Email`, `Phone`, `HiringDate`, `Salary`, `Department`) VALUES
(1, 'Khaled', 'Hamed', 'A01@gamil.com', '0787109976', '2022-09-30', 500, 'IT'),
(2, 'Ziad', 'AbaZaied', 'A2@gamil.com', '0777109977', '2022-09-30', 1000, 'ENG'),
(3, 'Mohammad', 'Aldbee', 'A3@gmail.com', '0777109978', '2022-09-30', 2500, 'ENG'),
(4, 'Hamza', 'Jwiehan', 'A4@gmail.com', '0777109979', '2024-09-30', 150, 'IT'),
(5, 'Rawan', 'Alkalile', 'A5@gmail.com', '0777109911', '2022-09-15', 650, 'Security '),
(6, 'Hana', 'Omari', 'A7@gmail.com', '0777103344', '2014-09-16', 760, 'Hr'),
(7, 'Maria', 'Zaher', 'A8@gmail.com', '0777104455', '2016-09-16', 1200, ''),
(8, 'Emran', 'AbuAzam', 'A9@gmail.com', '0777109922', '2022-09-09', 5000, '');

-- --------------------------------------------------------

--
-- Table structure for table `empskills`
--

CREATE TABLE `empskills` (
  `id` int(11) NOT NULL,
  `employID` int(11) NOT NULL,
  `skillId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empskills`
--

INSERT INTO `empskills` (`id`, `employID`, `skillId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 8, 1),
(4, 8, 2),
(5, 8, 5),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `Skill` varchar(50) NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `Skill`, `empID`) VALUES
(1, 'HTML5', 4),
(2, 'CSS3', 8),
(3, 'JavaScript', 7),
(4, 'PHP', 2),
(5, 'WordPress ', 8),
(6, 'SQL', 2),
(9, 'HTML5', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeedetails_ibfk_1` (`empID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empskills`
--
ALTER TABLE `empskills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empskills_ibfk_1` (`skillId`),
  ADD KEY `fk_Name_id` (`employID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empID` (`empID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employeedetails`
--
ALTER TABLE `employeedetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `empskills`
--
ALTER TABLE `empskills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD CONSTRAINT `employeedetails_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `empskills`
--
ALTER TABLE `empskills`
  ADD CONSTRAINT `empskills_ibfk_1` FOREIGN KEY (`skillId`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Name_id` FOREIGN KEY (`employID`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
