-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 08:58 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(10, 'Tahiana06', '$2y$10$RxT4TdO2lWKFYBuh6OUMG.pGXTwxB1lT5xAC/SrCzS8P.xbapFQbC'),
(14, 'soa', '$2y$10$qD7P3VphwMaQe55gJIjSfefohStdiH15uZJHr6bv//Ts0vcGtcGw2'),
(15, 'aina', '$2y$10$5CkxewoMHqnsJEO.6lDMEuNJHwh1JOhW98k6dqUTikwVmV.Jt/Vyq'),
(17, 'bat', '$2y$10$BpYW4ieLedSuVLhHy75wR.m945acqt6CWbb3vc3xo4UL4vv1KNzLO'),
(18, 'huibgasy', '$2y$10$AN1GNq8WUFVD0dbthOswy.Lup73yZjGWaGGJQuQjeuRCgR5TOlZl.'),
(19, 'rivo', '$2y$10$ygOAjV/5.STxOdPV4sM3COR.wEyNxFfBjtitK33Gn68OmBrxeLaQi'),
(20, 'chocolatexD', '$2y$10$dEctRXWtYAi1vGeUc5V0E.VKPhDXjFh/SEL3zkd2euPRIyMiXM2m.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
