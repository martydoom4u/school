-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 11:18 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `griftland`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserveringen`
--

CREATE TABLE `reserveringen` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ruimte_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `begin` time NOT NULL,
  `eind` time NOT NULL,
  `bijzonderheden` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserveringen`
--

INSERT INTO `reserveringen` (`Id`, `user_id`, `ruimte_id`, `datum`, `begin`, `eind`, `bijzonderheden`) VALUES
(11, 1, 1, '2018-05-01', '06:07:00', '04:04:00', ''),
(13, 1, 1, '2018-05-22', '11:00:00', '12:00:00', ''),
(17, 1, 2, '2018-05-30', '12:23:00', '13:03:00', 'koffie'),
(18, 1, 2, '2018-05-11', '10:15:00', '11:00:00', 'koffie'),
(19, 1, 1, '2018-06-06', '08:30:00', '12:00:00', 'koek'),
(20, 1, 1, '2018-05-31', '14:30:00', '15:00:00', 'koffie, koek, thee, ijs');

-- --------------------------------------------------------

--
-- Table structure for table `ruimtes`
--

CREATE TABLE `ruimtes` (
  `ID` int(11) NOT NULL,
  `ruimte` varchar(255) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `beamer` tinyint(1) NOT NULL,
  `whiteboard` tinyint(1) NOT NULL,
  `oplaadpunten` tinyint(1) NOT NULL,
  `computer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruimtes`
--

INSERT INTO `ruimtes` (`ID`, `ruimte`, `tv`, `beamer`, `whiteboard`, `oplaadpunten`, `computer`) VALUES
(1, 'lokaal 12', 0, 1, 1, 1, 0),
(2, 'kantoor 1', 1, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `afdeling` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `voornaam`, `achternaam`, `afdeling`, `email`) VALUES
(1, 'martijn', '$2y$10$j/zB185qr7Cs98ixR8uIZ.Y.xfg5zkqVGObLR1SEZ3qoUZZVBYxca', 'martijn', 'gravesteijn', 'afdeling ict', 'martijn.gravesteijn@ziggo.nl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ruimte_id` (`ruimte_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ruimtes`
--
ALTER TABLE `ruimtes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ruimtes`
--
ALTER TABLE `ruimtes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD CONSTRAINT `reserveringen_ibfk_1` FOREIGN KEY (`ruimte_id`) REFERENCES `ruimtes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
