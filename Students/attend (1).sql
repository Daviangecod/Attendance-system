-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 06:50 PM
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
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE `attends` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `attendance` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`id`, `name`, `attendance`, `date`) VALUES
(14, 'favour', 'Absent', '2024-08-02 15:39:18'),
(15, 'Martha', 'Present', '2024-08-02 15:39:18'),
(16, 'Sylia', 'Absent', '2024-08-02 15:39:18'),
(17, 'jhsd', 'Present', '2024-08-02 15:39:41'),
(18, 'marth', 'Present', '2024-08-12 22:00:00'),
(19, 'another', 'Present', '2024-08-05 22:00:00'),
(20, 'jkd', 'Present', '2024-08-01 22:00:00'),
(21, ',qsdn', 'Present', '2024-08-01 22:00:00'),
(22, 'ytryt', 'Present', '2024-07-31 22:00:00'),
(23, ',qsdn', 'Present', '2024-08-01 22:00:00'),
(24, 'jbfjdh', 'Present', '2024-08-01 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attends`
--
ALTER TABLE `attends`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
