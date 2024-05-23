-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umucyo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `event_id` int(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `member_id`, `event_id`, `Amount`, `dates`) VALUES
(1, 2, 2, '500', '2024-02-09'),
(2, 2, 2, '1000', '2024-02-10'),
(3, 2, 2, '1000', '0000-00-00'),
(4, 2, 2, '1000', '2009-02-24'),
(5, 2, 1, '1000', '2009-02-24'),
(6, 2, 1, '', '2009-02-24'),
(7, 2, 2, '1000', '2010-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_list`
--

CREATE TABLE `attendance_list` (
  `attend_id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Secord_name` varchar(255) NOT NULL,
  `attendence` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_list`
--

INSERT INTO `attendance_list` (`attend_id`, `First_name`, `Secord_name`, `attendence`, `date`) VALUES
(1, 'harerimana', 'jean claude', 'yes', '30/01/24'),
(2, 'Harerimana', 'Jean Claude', 'yes', '02/02/24'),
(3, 'Harerimana', 'Jean Claude', 'yes', '02/02/24'),
(4, 'Harerimana', 'Jean Claude', 'yes', '20/05/24'),
(5, 'The ', 'CypherGhost', 'yes', '20/05/24');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `inchage` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `Amount`, `inchage`, `date`) VALUES
(1, 'gusura abarwayi ', '1500', 'harerimana', '2025-01-24'),
(2, 'Class Meeting', '500', 'The Ghost', '2024-02-09'),
(3, 'vala days', '2000', 'The ghost', '2024-02-28'),
(4, 'Kwitanga', '1500', 'The CypherGhost', '2010-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Secord_name` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `First_name`, `Secord_name`, `Telephone`, `district`) VALUES
(2, 'Harerimana', 'Jean Claude', '0781018758', 'gasabo'),
(4, 'The ', 'CypherGhost', '+250788897573', 'Gasabo'),
(5, 'Jearclaude@gmail.com', '123', '0781018758', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `conform_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`),
  ADD KEY `member_id` (`member_id`,`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `attendance_list`
--
ALTER TABLE `attendance_list`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance_list`
--
ALTER TABLE `attendance_list`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `activities_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
