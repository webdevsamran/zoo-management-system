-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 09:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(255) CHARACTER SET latin1 NOT NULL,
  `createuser` varchar(255) DEFAULT NULL,
  `deleteuser` varchar(255) DEFAULT NULL,
  `createbid` varchar(255) DEFAULT NULL,
  `updatebid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `createuser`, `deleteuser`, `createbid`, `updatebid`) VALUES
(1, 'Superuser', '1', '1', '1', '1'),
(2, 'Admin', '1', NULL, '1', '1'),
(3, 'User', NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `Staffid` varchar(255) DEFAULT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `Photo` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'avatar15.jpg',
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `Staffid`, `AdminName`, `UserName`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Status`, `Photo`, `Password`, `AdminRegdate`) VALUES
(2, '10002', 'Admin', 'admin', 'John', 'Smith  ', 770546590, 'admin@gmail.com', 1, 'face19.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 10:18:39'),
(9, '10003', 'Admin', 'harry', 'Harry', 'Ronald ', 757537271, 'harry@gmail.com', 1, 'face27.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 07:08:48'),
(29, 'U002', 'User', 'morgan', 'Happy', 'Morgan', 770546590, 'morgan@gmail.com', 1, 'avatar15.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-07-21 14:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ID` int(10) NOT NULL,
  `AnimalName` varchar(200) DEFAULT NULL,
  `CageNumber` varchar(255) DEFAULT NULL,
  `FeedNumber` varchar(200) DEFAULT NULL,
  `Breed` varchar(200) DEFAULT NULL,
  `AnimalImage` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblanimal`
--

INSERT INTO `tblanimal` (`ID`, `AnimalName`, `CageNumber`, `FeedNumber`, `Breed`, `AnimalImage`, `Description`, `CreationDate`) VALUES
(1, 'Giraffe', '12300', 'FN-1001', 'Masai giraffe', '694cb29edd30cd1d86dda55dd904ee4b1596609931.jpg', 'The Masai giraffe (Giraffa camelopardalis tippelskirchii), also spelled Maasai giraffe, also called Kilimanjaro giraffe, is the largest subspecies of giraffe. It is native to East Africa. The Masai giraffe can be found in central and southern Kenya and in Tanzania.', '2021-06-05 06:51:45'),
(2, 'Giraffe', '12301', 'FN-1002', 'Reticulated giraffe', '7fdc1a630c238af0815181f9faa190f51596609868.jpg', 'The reticulated giraffe (Giraffa camelopardalis reticulata), also known as the Somali giraffe, is a subspecies of giraffe native to the Horn of Africa. It lives in Somalia, southern Ethiopia, and northern Kenya. There are approximately 8,500 individuals living in the wild.', '2021-06-05 06:51:15'),
(3, 'Tiger', '12302', 'FN-1003', 'Bengal Tiger', 'e692bd84570d9f467b75af761bf15c7c1596609789.jpg', 'The Bengal tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to the Indian subcontinent. It is threatened by poaching, loss, and fragmentation of habitat, and was estimated at comprising fewer than 2,500 individuals by 2011.', '2021-06-05 06:50:44'),
(4, 'Tiger', '12303', 'FN-1004', ' chinese Tiger', '031a51aa205bd3138f7afeb0d86999e51596611280.png', 'The Indochinese tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to Southeast Asia. This population occurs in Myanmar, Thailand, Laos, Vietnam, Cambodia and southwestern China.', '2021-07-21 14:33:53'),
(5, 'Tiger', '12304', 'FN-1005', 'Siberian Tiger', '1e6ae4ada992769567b71815f124fac51596609708.jpg', 'The Siberian tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to the Russian Far East, Northeast China, and possibly North Korea. It once ranged throughout the Korean Peninsula, north China, Russian Far East, and eastern Mongolia.', '2021-06-05 06:49:35'),
(6, 'Tiger', '12305', 'FN-1006', 'chinese Tiger', '37b3f2f8b979f990fbe8bbf02fb87ddb1596609488.jpg', 'The Indochinese tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to Southeast Asia. This population occurs in Myanmar, Thailand, Laos, Vietnam, Cambodia and southwestern China.', '2021-07-21 14:35:14'),
(7, 'Bear', '12307', 'FN-1007', 'Sloth Bear', 'efc1a80c391be252d7d777a437f868701596611141.jpg', 'The sloth bear (Melursus ursinus) is a myrmecophagous bear species native to the Indian subcontinent. It feeds on fruits, ants and termites. It is listed as Vulnerable on the IUCN Red List, mainly because of habitat loss and degradation.', '2021-07-10 09:40:11'),
(8, 'Bear', '12308', 'FN-1008', 'Sun Bear', '6c09a06117fd4daa8fd74f6d1560d6a01596609406.jpg', 'The sun bear (Helarctos malayanus) is a species in the family Ursidae occurring in the tropical forests of Southeast Asia. It is the smallest bear, standing nearly 70 centimetres (28 inches) at the shoulder and weighing 25–65 kilograms (55–143 pounds). It is stockily built, with large paws, strongly curved claws, small rounded ears and a short snout. The fur is generally jet-black, but can vary from grey to red. Sun bears get their name from the characteristic orange to cream coloured chest patch. Its unique morphology—inward-turned front feet, flattened chest, powerful forelimbs with large claws—suggests adaptations for climbing.', '2021-06-05 06:36:46'),
(11, 'Loin', '12309', 'FN-1009', 'Local lion', 'g2.jpg', '50 years old from north east of western lift valley in Uganda, it\'s food is meat of other animals.', '2021-11-25 08:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblticforeigner`
--

CREATE TABLE `tblticforeigner` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(200) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticforeigner`
--

INSERT INTO `tblticforeigner` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(1, '103618900', 2, 1, '1000', '800', '2021-06-30 12:05:44'),
(3, '671028076', 5, 2, '1000', '800', '2021-06-30 12:06:26'),
(4, '776418013', 5, 2, '1000', '800', '2021-06-30 12:09:33'),
(19, '467509736', 2, 1, '1100', '800', '2021-07-10 09:47:28'),
(20, '202792330', 2, 0, '1100', '800', '2021-07-10 12:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblticindian`
--

CREATE TABLE `tblticindian` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(100) NOT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticindian`
--

INSERT INTO `tblticindian` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(1, '340973208', 5, 3, '200', '100', '2021-06-30 08:04:11'),
(8, '528090550', 5, 3, '300', '80', '2021-06-04 05:15:17'),
(11, '529665688', 2, 2, '350', '80', '2021-06-12 09:00:01'),
(12, '187945062', 3, 3, '350', '80', '2021-06-12 09:02:12'),
(13, '839303414', 2, 1, '350', '100', '2021-07-10 12:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbltickettype`
--

CREATE TABLE `tbltickettype` (
  `ID` int(10) NOT NULL,
  `TicketType` varchar(200) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltickettype`
--

INSERT INTO `tbltickettype` (`ID`, `TicketType`, `Price`, `CreationDate`) VALUES
(1, 'Normal Adult', '350', '2019-12-30 06:31:56'),
(2, 'Normal Child', '100', '2019-12-30 06:32:27'),
(3, 'Foreigner Adult', '1100', '2019-12-30 06:33:16'),
(4, 'Foreigner Child', '800', '2019-12-30 06:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TicketID` (`TicketID`),
  ADD KEY `TicketID_2` (`TicketID`);

--
-- Indexes for table `tblticindian`
--
ALTER TABLE `tblticindian`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketID` (`TicketID`);

--
-- Indexes for table `tbltickettype`
--
ALTER TABLE `tbltickettype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketType` (`TicketType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblticindian`
--
ALTER TABLE `tblticindian`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbltickettype`
--
ALTER TABLE `tbltickettype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
