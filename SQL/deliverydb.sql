-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Feb 01, 2023 at 04:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliverydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `calculatorID` int(11) NOT NULL,
  `ZodiacID1` int(11) NOT NULL,
  `ZodiacID2` int(11) NOT NULL,
  `Result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`calculatorID`, `ZodiacID1`, `ZodiacID2`, `Result`) VALUES
(1, 1, 1, 'Great Match'),
(2, 1, 5, 'Great Match'),
(3, 1, 9, 'Great Match'),
(4, 1, 2, 'Not Comaptible'),
(5, 1, 6, 'Not Comaptible'),
(6, 1, 10, 'Not Comaptible'),
(7, 1, 3, 'Great Match'),
(8, 1, 7, 'Great Match'),
(9, 1, 11, 'Great Match'),
(10, 1, 4, 'Not Comaptible'),
(11, 1, 8, 'Not Comaptible'),
(12, 1, 12, 'Favorable'),
(13, 1, 1, 'Great Match'),
(14, 1, 5, 'Great Match'),
(15, 1, 9, 'Great Match'),
(16, 1, 2, 'Not Favorable'),
(17, 1, 6, 'Not Favorable'),
(18, 1, 10, 'Not Favorable'),
(19, 1, 3, 'Great Match'),
(20, 1, 7, 'Great Match'),
(21, 1, 11, 'Great Match'),
(22, 1, 4, 'Not Favorable'),
(23, 1, 8, 'Not Favorable'),
(24, 1, 12, 'Favorable'),
(25, 5, 1, 'Great Match'),
(26, 5, 5, 'Great Match'),
(27, 5, 9, 'Great Match'),
(28, 5, 2, 'Not Favorable'),
(29, 5, 6, 'Not Favorable'),
(30, 5, 10, 'Not Favorable'),
(31, 5, 3, 'Great Match'),
(32, 5, 7, 'Great Match'),
(33, 5, 11, 'Great Match'),
(34, 5, 4, 'Not Favorable'),
(35, 5, 8, 'Not Favorable'),
(36, 5, 12, 'Favorable'),
(37, 9, 1, 'Great Match'),
(38, 9, 5, 'Great Match'),
(39, 9, 9, 'Great Match'),
(40, 9, 2, 'Not Favorable'),
(41, 9, 6, 'Not Favorable'),
(42, 9, 10, 'Not Favorable'),
(43, 9, 3, 'Great Match'),
(44, 9, 7, 'Great Match'),
(45, 9, 11, 'Great Match'),
(46, 9, 4, 'Not Favorable'),
(47, 9, 8, 'Not Favorable'),
(48, 9, 12, 'Favorable'),
(49, 2, 1, 'Not Favorable'),
(50, 2, 5, 'Favorable'),
(51, 2, 9, 'Not Favorable'),
(52, 2, 2, 'Great Match'),
(53, 2, 6, 'Great Match'),
(54, 2, 10, 'Great Match'),
(55, 2, 3, 'Not Favorable'),
(56, 2, 7, 'Favorable'),
(57, 2, 11, 'Not Favorable'),
(58, 2, 4, 'Great Match'),
(59, 2, 8, 'Great Match'),
(60, 2, 12, 'Great Match'),
(61, 6, 1, 'Not Favorable'),
(62, 6, 5, 'Favorable'),
(63, 6, 9, 'Not Favorable'),
(64, 6, 2, 'Great Match'),
(65, 6, 6, 'Great Match'),
(66, 6, 10, 'Great Match'),
(67, 6, 3, 'Not Favorable'),
(68, 6, 7, 'Not Favorable'),
(69, 6, 11, 'Favorable'),
(70, 6, 4, 'Great Match'),
(71, 6, 8, 'Great Match'),
(72, 6, 12, 'Favorable'),
(73, 10, 1, 'Not Favorable'),
(74, 10, 5, 'Favorable'),
(75, 10, 9, 'Not Favorable'),
(76, 10, 2, 'Great Match'),
(77, 10, 6, 'Great Match'),
(78, 10, 10, 'Great Match'),
(79, 10, 3, 'Not Favorable'),
(80, 10, 7, 'Favorable'),
(81, 10, 11, 'Not Favorable'),
(82, 10, 4, 'Great Match'),
(83, 10, 8, 'Great Match'),
(84, 10, 12, 'Great Match'),
(85, 3, 1, 'Great Match'),
(86, 3, 5, 'Great Match'),
(87, 3, 9, 'Favorable'),
(88, 3, 2, 'Not Favorable'),
(89, 3, 6, 'Favorable'),
(90, 3, 10, 'Favorable'),
(91, 3, 3, 'Great Match'),
(92, 3, 7, 'Great Match'),
(93, 3, 11, 'Great Match'),
(94, 3, 4, 'Not Favorable'),
(95, 3, 8, 'Not Favorable'),
(96, 3, 12, 'Not Favorable'),
(97, 7, 1, 'Favorable'),
(98, 7, 5, 'Great Match'),
(99, 7, 9, 'Great Match'),
(100, 7, 2, 'Favorable'),
(101, 7, 6, 'Not Favorable'),
(102, 7, 10, 'Not Favorable'),
(103, 7, 3, 'Great Match'),
(104, 7, 7, 'Great Match'),
(105, 7, 11, 'Great Match'),
(106, 7, 4, 'Not Favorable'),
(107, 7, 8, 'Not Favorable'),
(108, 7, 12, 'Favorable'),
(109, 11, 1, 'Great Match'),
(110, 11, 5, 'Great Match'),
(111, 11, 9, 'Great Match'),
(112, 11, 2, 'Not Favorable'),
(113, 11, 6, 'Not Favorable'),
(114, 11, 10, 'Not Favorable'),
(115, 11, 3, 'Great Match'),
(116, 11, 7, 'Great Match'),
(117, 11, 11, 'Great Match'),
(118, 11, 4, 'Not Favorable'),
(119, 11, 8, 'Favorable'),
(120, 11, 12, 'Favorable'),
(121, 4, 1, 'Not Favorable'),
(122, 4, 5, 'Favorable'),
(123, 4, 9, 'Favorable'),
(124, 4, 2, 'Great Match'),
(125, 4, 6, 'Great Match'),
(126, 4, 10, 'Great Match'),
(127, 4, 3, 'Not Favorable'),
(128, 4, 7, 'Not Favorable'),
(129, 4, 11, 'Not Favorable'),
(130, 4, 4, 'Great Match'),
(131, 4, 8, 'Great Match'),
(132, 4, 12, 'Great Match'),
(133, 8, 1, 'Favorable'),
(134, 8, 5, 'Favorable'),
(135, 8, 9, 'Not Favorable'),
(136, 8, 2, 'Great Match'),
(137, 8, 6, 'Great Match'),
(138, 8, 10, 'Great Match'),
(139, 8, 3, 'Not Favorable'),
(140, 8, 7, 'Not Favorable'),
(141, 8, 11, 'Not Favorable'),
(142, 8, 4, 'Great Match'),
(143, 8, 8, 'Great Match'),
(144, 8, 12, 'Great Match'),
(145, 12, 1, 'Favorable'),
(146, 12, 5, 'Favorable'),
(147, 12, 9, 'Favorable'),
(148, 12, 2, 'Great Match'),
(149, 12, 6, 'Favorable'),
(150, 12, 10, 'Great Match'),
(151, 12, 3, 'Not Favorable'),
(152, 12, 7, 'Not Favorable'),
(153, 12, 11, 'Not Favorable'),
(154, 12, 4, 'Great Match'),
(155, 12, 8, 'Great Match'),
(156, 12, 12, 'Great Match');

-- --------------------------------------------------------

--
-- Table structure for table `prospect`
--

CREATE TABLE `prospect` (
  `ProspectID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `bDay` varchar(255) NOT NULL,
  `ZodiacID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prospect`
--

INSERT INTO `prospect` (`ProspectID`, `LastName`, `FirstName`, `bDay`, `ZodiacID`) VALUES
(2, 'Name', 'Name', 'February 25', 12),
(3, 'Love', 'True', 'October 1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `fName` varchar(225) NOT NULL,
  `lName` varchar(225) NOT NULL,
  `address1` varchar(225) NOT NULL,
  `address2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fName`, `lName`, `address1`, `address2`) VALUES
(1, 'rot', 'password', 'normal@gmail.com', 'Name', 'Name', 'Blk 6 Lot 22', 'Mango St. Dividend Homes'),
(2, 'root', 'root', 'email@gmail.com', 'First', 'Last', 'Blk 6 Lot 22', 'Mango St. Dividend Homes');

-- --------------------------------------------------------

--
-- Table structure for table `zodiac`
--

CREATE TABLE `zodiac` (
  `ZodiacID` int(11) NOT NULL,
  `zSign` varchar(255) NOT NULL,
  `zSymbol` varchar(255) NOT NULL,
  `zStartMonth` varchar(255) NOT NULL,
  `zStartDay` int(11) NOT NULL,
  `zLastMonth` varchar(255) NOT NULL,
  `zLastDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zodiac`
--

INSERT INTO `zodiac` (`ZodiacID`, `zSign`, `zSymbol`, `zStartMonth`, `zStartDay`, `zLastMonth`, `zLastDay`) VALUES
(1, 'Aries', 'Ram', 'March', 21, 'April', 19),
(2, 'Taurus', 'Bull', 'April', 20, 'May', 20),
(3, 'Gemini', 'Twins', 'May', 21, 'June', 21),
(4, 'Cancer', 'Crab', 'June', 22, 'July', 22),
(5, 'Leo', 'Lion', 'July', 23, 'August', 22),
(6, 'Virgo', 'Virgin', 'August', 23, 'September', 22),
(7, 'Libra', 'Balance', 'September', 23, 'October', 23),
(8, 'Scorpio', 'Scorpion', 'October', 24, 'November', 21),
(9, 'Sagittarius', 'Archer', 'November', 22, 'December', 21),
(10, 'Capricornus', 'Goat', 'December', 22, 'January', 19),
(11, 'Aquarius', 'Water', 'January', 20, 'February', 18),
(12, 'Pisces', 'Fish', 'February', 19, 'March', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`calculatorID`),
  ADD KEY `ZodiacID1` (`ZodiacID1`),
  ADD KEY `ZodiacID2` (`ZodiacID2`);

--
-- Indexes for table `prospect`
--
ALTER TABLE `prospect`
  ADD PRIMARY KEY (`ProspectID`),
  ADD KEY `ZodiacID` (`ZodiacID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zodiac`
--
ALTER TABLE `zodiac`
  ADD PRIMARY KEY (`ZodiacID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `calculatorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `prospect`
--
ALTER TABLE `prospect`
  MODIFY `ProspectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `zodiac`
--
ALTER TABLE `zodiac`
  MODIFY `ZodiacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calculator`
--
ALTER TABLE `calculator`
  ADD CONSTRAINT `calculator_ibfk_1` FOREIGN KEY (`ZodiacID1`) REFERENCES `zodiac` (`ZodiacID`),
  ADD CONSTRAINT `calculator_ibfk_2` FOREIGN KEY (`ZodiacID2`) REFERENCES `zodiac` (`ZodiacID`);

--
-- Constraints for table `prospect`
--
ALTER TABLE `prospect`
  ADD CONSTRAINT `prospect_ibfk_1` FOREIGN KEY (`ZodiacID`) REFERENCES `zodiac` (`ZodiacID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
