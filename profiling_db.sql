-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2015 at 05:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profiling_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`ApplicationNumber` int(8) NOT NULL,
  `DateofApplication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `BirthPlace` varchar(255) NOT NULL,
  `Height` decimal(10,2) NOT NULL,
  `Weight` int(10) NOT NULL,
  `FatherName` varchar(100) NOT NULL,
  `FatherOccupation` varchar(100) NOT NULL,
  `MotherName` varchar(100) NOT NULL,
  `MotherOccupation` varchar(100) NOT NULL,
  `GuardianName` varchar(100) NOT NULL,
  `GuardianOccupation` varchar(100) NOT NULL,
  `SiblingBoys` int(10) NOT NULL DEFAULT '0',
  `SiblingGirls` int(10) NOT NULL DEFAULT '0',
  `PurokStreet` varchar(100) NOT NULL,
  `Barangay` varchar(100) NOT NULL,
  `Municipality` varchar(100) NOT NULL,
  `AddressOutside` varchar(255) NOT NULL,
  `FamilyIncome` int(10) NOT NULL,
  `SchoolLastAttended` varchar(255) NOT NULL,
  `StartYL` int(10) NOT NULL,
  `CurrentYL` int(10) NOT NULL,
  `GWA` varchar(10) NOT NULL,
  `TypeOfScholarship` varchar(100) NOT NULL,
  `ScholarshipByWayOf` varchar(100) NOT NULL,
  `StatusOfScholarship` varchar(100) NOT NULL,
  `Remarks` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20150007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ApplicationNumber`, `DateofApplication`, `FirstName`, `MiddleName`, `LastName`, `ContactNumber`, `Gender`, `CivilStatus`, `Birthdate`, `BirthPlace`, `Height`, `Weight`, `FatherName`, `FatherOccupation`, `MotherName`, `MotherOccupation`, `GuardianName`, `GuardianOccupation`, `SiblingBoys`, `SiblingGirls`, `PurokStreet`, `Barangay`, `Municipality`, `AddressOutside`, `FamilyIncome`, `SchoolLastAttended`, `StartYL`, `CurrentYL`, `GWA`, `TypeOfScholarship`, `ScholarshipByWayOf`, `StatusOfScholarship`, `Remarks`) VALUES
(20150000, '2015-06-22 10:21:55', 'Dummy', 'Dummy', 'Dummy', '00000000000', 'Male', 'Single', '2015-06-12', 'Dummy', '0.00', 0, 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 0, 0, 'Dummy', 'Dummy', 'Dummy', '', 0, '', 0, 0, '100', 'Tertiary', 'Valedictorian', 'Scholar', 'Dummy'),
(20150001, '2015-07-01 15:31:53', 'Lance', 'Baratita', 'Reyes', '09991293220', 'Male', 'Single', '1995-01-08', 'Nova QC', '1.75', 73, 'B', 'Unemployed, ', 'A', 'Unemployed, ', 'G', 'Unemployed, ', 0, 0, 'Bangus St.', 'Parang', 'Jose Panganiban', '', 0, 'JPNHS', 0, 1, '75', 'Tertiary', 'Valedictorian', 'Applicant', ' Student is a valedictorian. '),
(20150002, '2015-07-05 15:17:40', 'a', 'a', 'a', 'a', 'Male', 'Single', '1970-01-01', 'asd', '1.00', 0, 'a', 'Unemployed, ', 'a', 'Unemployed, ', 'c', 'Carwasher, ', 0, 0, 'asd', 'Bactas', 'Basud', '', 120000, 'adsa', 0, 1, '75', 'Tertiary', 'Valedictorian', 'Applicant', ' Student is a valedictorian. '),
(20150003, '2015-07-05 15:19:48', 'a', 'a', 'a', 'asd', 'Male', 'Single', '1995-08-01', 'asd', '1.00', 0, 'a', 'Unemployed, ', 'a', 'Unemployed, ', 'a', 'Automechanic, ', 0, 0, 'asd', 'Calabaca', 'Capalonga', '', 120001, 'adsa', 0, 1, '75', 'Tertiary', 'Valedictorian', 'Applicant', ' Student is a valedictorian. Annual income exceeds 120000. (DISQUALIFIED)'),
(20150004, '2015-07-05 15:29:20', 'a', 'a', 'a', '12123', 'Male', 'Single', '2015-07-05', 'asd', '1.00', 0, 'a', 'Automechanic, asd', 's', 'Automechanic, asd', 'c', 'Unemployed, ', 0, 0, 'asdad', 'Angas', 'Basud', '', 31680000, 'adsa', 0, 1, '75', 'Tertiary', 'Valedictorian', 'Applicant', ' Student is a valedictorian. Annual income exceeds 120000. (DISQUALIFIED)'),
(20150005, '2015-07-06 14:09:20', 'Lance', 'Baratita', 'Reyes', '09991293220', 'Male', 'Single', '1995-01-08', 'Place', '1.72', 72, 'A', 'Unemployed, ', 'B', 'Unemployed, ', 'C', 'Unemployed, ', 0, 0, 'Bangust St.', 'Parang', 'Jose Panganiban', '', 0, 'JPNHS', 0, 1, '75', 'Tertiary', 'Examination', 'Applicant', ' '),
(20150006, '2015-07-06 15:17:24', 'Howell', 'Lance', 'Reyes', '09991293220', 'Male', 'Single', '1995-01-08', 'Nova QC', '1.00', 0, 'A', 'Carpenter, ', 'B', 'Carwasher, ', 'C', 'Electrician, ', 0, 0, 'asd', 'Barangay I (Ilaod)', 'Daet', '', 120000, 'JPNHS', 0, 1, '75', 'Tertiary', 'Valedictorian', 'Applicant', ' Student is a valedictorian. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`ApplicationNumber`), ADD KEY `ApplicationNumber` (`ApplicationNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `ApplicationNumber` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20150007;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
