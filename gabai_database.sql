-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 08:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabai_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_img` blob DEFAULT NULL,
  `access` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_img`, `access`, `date_added`) VALUES
(33, 'John Kyle', 'Cruz', 'johnkyle.cruz.dc@bulsu.edu.ph', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 'admin', '2022-12-18 11:23:09'),
(34, 'John Kyle', 'Cruz', 'cruz.johnkyle.4501@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, 'user', '2022-12-18 11:36:37'),
(35, 'ja', 'cruz', 'jana.2005cruz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'admin', '2022-12-18 11:39:05'),
(36, 'John Kyle', 'Cruz', 'JKyle.Cruz5@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, 'admin', '2022-12-18 11:55:59'),
(38, 'kyle', 'Cruz', 'kyle@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, 'admin', '2022-12-18 12:49:37'),
(39, 'asdasdasd', 'Duck124124', 'j@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, 'user', '2022-12-18 14:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
