-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 03:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(5, 'nabil Afkar', 'nabilafkar', 'nabilafkar2@gmail.com', '$2y$10$sFYI6aCww3ghk68Q6E1oa.M6yjrL.zf8bN.d8KgB/Rvy6mElRzOKS'),
(7, 'Nabil Afkar', 'na', 'nabilafkar@student.telkomuniversity.ac.id', '$2y$10$NZuZwzkBi1eOGFWE7ddln.dYUhmi5V9i75rQsLk7EAKKHnhVqOXkW'),
(8, 'nabil Afkar', 'afkar1', 'nabilafkar2@gmail.com', '$2y$10$AiDa3nhe29F3vI70PEbQM.8dpAHSgBApPciKILeCQH8hUHQ8FOERC'),
(9, 'Nabil afkar', 'nabil', 'nabilafkar5@gmail.com', '$2y$10$vWruAfZb.Vac//BkjnWa4O4atUY9BXEzzPoRgsCK0aDf/ljWKfCjq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
