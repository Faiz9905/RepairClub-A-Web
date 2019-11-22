-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 03:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repairclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `bookingid` int(11) NOT NULL,
  `nameofcust` text NOT NULL,
  `address` text NOT NULL,
  `nearby` text NOT NULL,
  `city` text NOT NULL,
  `day` text NOT NULL,
  `require1` text NOT NULL,
  `require2` text NOT NULL,
  `require3` text NOT NULL,
  `Additional` text NOT NULL,
  `mobilenumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`bookingid`, `nameofcust`, `address`, `nearby`, `city`, `day`, `require1`, `require2`, `require3`, `Additional`, `mobilenumber`) VALUES
(1, 'Sweta', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', 'roomheater', 'other', '', '9905834067'),
(2, 'Sweta', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', 'roomheater', 'other', '', '9905834067'),
(3, 'Sweta', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', 'roomheater', 'other', '', '9905834067'),
(4, 'Sweta', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', '', '', '', ''),
(5, '123', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', '', '', '', '9905834067'),
(6, '123', 'Boring Road', 'Krishna apartment', 'Patna', 'Today', 'geysor', '', '', '', '9905834067'),
(7, 'Faizan', 'Boring Road', 'Krishna apartment', 'Delhi', 'Tommorrow', 'geysor', '', 'other', '', '9905834067'),
(8, 'Faizan', 'Boring Road', 'Krishna apartment', 'Patna', 'Today', 'geysor', '', '', '', '9905834067'),
(9, '123', 'Boring Road', 'Krishna apartment', 'Patna', 'Tommorrow', '', 'roomheater', '', '', '9905834067'),
(10, 'qwer', 'Boring Road,sdfghjkl,ertyuiop,sdfghjkl,  sdfghjkl,xcvbnm dfghjk', 'Krishna apartment', 'Patna', 'Tommorrow', 'geysor', '', '', '', '9905834067'),
(11, 'Faizan khansdfghjkl', 'dfghj,', 'dfghnm,.', 'Patna', 'Tommorrow', 'geysor', 'roomheater', 'other', '', '9905834067'),
(12, 'Faizan', '', 'Krishna Apt', '', 'Tomorrow', 'Windows AC', 'Split AC', '', '', '9905834067'),
(13, 'Zaffar', 'Pls come before 10 AM', 'Purani Masjid', '', 'Day After Tomorrow', '', '', 'Other AC', '', '9905834067'),
(14, 'Farz', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', 'Plae come 4', '9905834067'),
(15, 'Suraj', 'Boring Road', 'SK Puri park', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(16, 'Abc', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(17, 'Hello', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(18, 'Manoj Agarwal', 'Boring Road', 'Purani Masjid', 'Patna', 'Today', '', 'Split AC', '', '', '9905834067'),
(19, 'Nadeem Jio', 'Jamal Road', 'near house of art', 'Patna', 'Today', 'Windows AC', '', '', 'please come with option', '9905834067'),
(20, 'Nadeem M Macet', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', 'Split AC', '', '', '9905834067'),
(21, 'three', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(22, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(23, 'Faizan Khan', 'Boring Road', ' Near OAras Hmri', 'Patna', 'Tomorrow', 'Windows AC', '', '', 'Please add me in your group ', '9905834067'),
(24, 'Five', 'Boring Road', 'Krishna Apt', 'Patna', 'Tomorrow', '', 'Split AC', '', '', '9905834067'),
(25, 'Seven', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(26, 'Eight', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(27, 'three', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', '', '', '', '9905834067'),
(28, 'Last', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', '', '', '', '9905834067'),
(29, 'Last', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', 'Double Door', 'other Refridgerator', 'Please come at 6PM', '9905834067'),
(30, 'Room 1', 'Boring Road', 'Krishna Apt', 'Patna', 'Day After Tomorrow', 'Room Heater', 'Room Heater', '', '', '9905834067'),
(31, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', 'Front Loader', '', '', '9905834067'),
(32, 'Danyal', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(33, 'Danyal', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(34, 'Faizan', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(35, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Tomorrow', 'Windows AC', '', '', '', '9905834067'),
(36, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', '', '', '', '9905834067'),
(37, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(38, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(39, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(40, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(41, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', '', '', '', '9905834067'),
(42, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(43, 'three', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(44, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(45, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Tomorrow', 'Single Door', '', '', '', '9905834067'),
(46, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(47, 'Hello', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(48, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(49, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(50, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Tomorrow', 'Single Door', '', '', '', '9905834067'),
(51, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(52, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(53, 'Suraj', 'Boring Road', '', 'Patna', 'Tomorrow', 'Room Heater', 'Room Heater', '', '', '9905834067'),
(54, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Room Heater', 'Room Heater', '', '', '9905834067'),
(55, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Room Heater', 'Room Heater', '', '', '9905834067'),
(56, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Room Heater', 'Room Heater', '', '', '9905834067'),
(57, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Top Loader', '', '', '', '9905834067'),
(58, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(59, 'Faizan khan', 'Boring Road', 'AP PAt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(60, 'Faizan khan', 'Boring Road', 'AP PAt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(61, 'Suraj', 'Boring R3776oad', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(62, 'Faizal', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(63, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(64, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Single Door', '', '', '', '9905834067'),
(65, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Room Heater', '', '', '', '9905834067'),
(66, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Room Heater', '', '', '', '9905834067'),
(67, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Top Loader', '', '', '', '9905834067'),
(68, 'Suraj', 'Boring Road', '', 'Patna', 'Today', '', '', '', '', '9905834067'),
(69, 'Vikash ', 'Boring Road', 'AP PAt', 'Patna', 'Tomorrow', 'Windows AC', '', '', '', '8083052999'),
(70, 'Faizan khan', 'Boring Road', 'AP PAt', 'Patna', 'Today', '', 'Split AC', '', 'spdfghjklsdfghjkl sdfghjkl;xcvh ', '9905834067'),
(71, 'Hello', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(72, 'Suraj', 'Boring Road', 'Krishna Apt', 'Patna', 'Today', '', '', '', '', '9905834067'),
(73, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(74, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(75, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(76, 'Suraj', 'Boring Road', '', 'Patna', 'Today', '', '', '', '', '9905834067'),
(77, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(78, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(79, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(80, 'Suraj', 'Bailley Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067'),
(81, 'Suraj', 'Boring Road', '', 'Patna', 'Today', 'Windows AC', '', '', '', '9905834067');

-- --------------------------------------------------------

--
-- Table structure for table `customeridentity`
--

CREATE TABLE `customeridentity` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customeridentity`
--

INSERT INTO `customeridentity` (`ID`, `name`, `email`, `mobile`) VALUES
(2, '', '', '123'),
(3, '', '', '321'),
(5, '', '', ''),
(6, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(22, '', '', '123'),
(23, '', '', '1234'),
(24, '', '', '1234'),
(30, '', '', 'bac'),
(31, '', '', 'ghjkl'),
(32, '', '', 'one'),
(33, '', '', 'one'),
(34, '', '', 'two'),
(35, '', '', 'hello'),
(36, '', '', 'three'),
(63, 'Faizan ', 'arham@gmail.com', '9905834067'),
(64, ' Vikash Kumar', ' ', '8083052999');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiryid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `service` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiryid`, `name`, `email`, `phonenumber`, `service`, `message`) VALUES
(1, 'three', 'kfs_faizan@yahoo.com', '9905834067', '3', ''),
(2, 'three', 'kfs_faizan@yahoo.com', '09876543', '3', ''),
(3, 'four', 'aa@gmail.com', '9905834067', '1', 'I sdfghjk hjk dfghjkl sdfghjkl dfghjkl;....'),
(4, 'Faizan khan', 'farazkhan5683@gmail.com', '9905834067', '4', ''),
(5, 'four', 'aa@gmail.com', '9905834067', '1', 'I sdfghjk hjk dfghjkl sdfghjkl dfghjkl;....'),
(6, 'Faizan khan', 'farazkhan5683@gmail.com', '9905834067', '4', ''),
(7, 'Arham', 'arham@gmail.com', '1234567890', '', ''),
(8, 'Arham', 'kfs_faizan@yahoo.com', '9905834067', 'Air Conditioning', ''),
(9, 'Faizan', '', '9905834067', 'Air Conditioning', ''),
(10, 'Noor alam', 'arham@gmail.com', '123', 'Washing Machine', ''),
(11, 'Zaffar', 'zaffar@yahoo.com', '620158586', 'Air Conditioning', ''),
(12, 'Faizan', 'kfs.faizan@yahoo.com', '9905834067', 'Air Conditioning', ''),
(13, 'Faizan', 'kfs.faizan@yahoo.com', '9905834067', 'Air Conditioning', ''),
(14, 'Suraj', 'arham@gmail.com', '1234567890', 'Air Conditioning', ''),
(15, 'Hello', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(16, 'Hello', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(17, 'Hello', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(18, 'Faizan khan', 'farazkhan5683@gmail.com', '9905834067', 'Air Conditioning', ''),
(19, 'Suraj', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(20, 'Suraj', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(21, 'Suraj', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(22, 'Suraj', 'arham@gmail.com', '9905834067', 'Air Conditioning', ''),
(23, 'Vikash ', 'farazkhan5683@gmail.com', '9905834067', 'Air Conditioning', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `customeridentity`
--
ALTER TABLE `customeridentity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customeridentity`
--
ALTER TABLE `customeridentity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
