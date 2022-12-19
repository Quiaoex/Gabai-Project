-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:14 PM
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
-- Table structure for table `gabai_group`
--

CREATE TABLE `gabai_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `grp_unique_id` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gabai_group`
--

INSERT INTO `gabai_group` (`group_id`, `group_name`, `grp_unique_id`) VALUES
(1, 'Group 3', 1),
(2, 'Group 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gabai_group_notes`
--

CREATE TABLE `gabai_group_notes` (
  `id` int(11) NOT NULL,
  `group_name_id` int(25) NOT NULL,
  `member_unique_id` int(11) DEFAULT NULL,
  `group_note_title` varchar(255) DEFAULT NULL,
  `group_note_body` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gabai_group_notes`
--

INSERT INTO `gabai_group_notes` (`id`, `group_name_id`, `member_unique_id`, `group_note_title`, `group_note_body`, `created_by`, `date_created`) VALUES
(1, 1, 1, 'Head', 'Hello', 'John Kyle Cruz', '2022-12-19 20:09:16'),
(2, 1, 1, 'head', 'hello', 'Kyle Cruz', '2022-12-19 20:09:16'),
(3, 2, 2, 'HAHAHAHAHA', 'Hotdog!', NULL, '2022-12-19 20:09:16'),
(5, 2, 2, 'Hello', 'hahahaha', NULL, '2022-12-20 01:38:09'),
(6, 1, 1, 'Hahahaha', 'Hello', 'Jana Mari Cruz', '2022-12-20 01:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `gabai_user`
--

CREATE TABLE `gabai_user` (
  `user_id` int(25) NOT NULL,
  `grp_unique_ids` int(25) DEFAULT NULL,
  `unique_user_id` int(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gabai_user`
--

INSERT INTO `gabai_user` (`user_id`, `grp_unique_ids`, `unique_user_id`, `first_name`, `last_name`, `email`, `password`, `access`, `date_created`) VALUES
(1, NULL, 1, 'Jana Mari', 'Cruz', 'jana.mari@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'admin', '2022-12-19 18:12:46'),
(2, 2, 2, 'John Kyle', 'Cruz', 'cruz.johnkyle.4501@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'user', '2022-12-19 18:16:39'),
(3, 1, 3, 'Kyle', 'Cruz', 'kyle@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'user', '2022-12-19 18:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `gabai_user_notes`
--

CREATE TABLE `gabai_user_notes` (
  `note_id` int(255) NOT NULL,
  `note_title` varchar(255) DEFAULT NULL,
  `note_body` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gabai_user_notes`
--

INSERT INTO `gabai_user_notes` (`note_id`, `note_title`, `note_body`, `created_by`, `date_created`) VALUES
(2, 'PHP', 'Hello World!', 'John Kyle Cruz', '2022-12-19 20:02:45'),
(3, 'GAGAGAGAG', 'AGAGAGG', 'John Kyle Cruz', '2022-12-19 20:10:58'),
(1, 'Hahahaha', 'Hello', 'Jana Mari Cruz', '2022-12-19 22:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `group_thrash`
--

CREATE TABLE `group_thrash` (
  `group_note_id` int(11) NOT NULL,
  `group_note_title` varchar(255) NOT NULL,
  `group_note_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_thrash`
--

CREATE TABLE `user_thrash` (
  `note_id` int(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `g_note_title` varchar(255) NOT NULL,
  `g_note_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gabai_group`
--
ALTER TABLE `gabai_group`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`),
  ADD KEY `grp_unique_id` (`grp_unique_id`);

--
-- Indexes for table `gabai_group_notes`
--
ALTER TABLE `gabai_group_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_name` (`group_name_id`),
  ADD KEY `member_unique_id` (`member_unique_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `gabai_user`
--
ALTER TABLE `gabai_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `unique_user_id` (`unique_user_id`),
  ADD KEY `gabai_user_ibfk_1` (`grp_unique_ids`),
  ADD KEY `first_name` (`first_name`,`last_name`);

--
-- Indexes for table `gabai_user_notes`
--
ALTER TABLE `gabai_user_notes`
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `group_thrash`
--
ALTER TABLE `group_thrash`
  ADD KEY `group_note_id` (`group_note_id`);

--
-- Indexes for table `user_thrash`
--
ALTER TABLE `user_thrash`
  ADD KEY `note_id` (`note_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gabai_group`
--
ALTER TABLE `gabai_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546068;

--
-- AUTO_INCREMENT for table `gabai_group_notes`
--
ALTER TABLE `gabai_group_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gabai_user`
--
ALTER TABLE `gabai_user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gabai_group_notes`
--
ALTER TABLE `gabai_group_notes`
  ADD CONSTRAINT `gabai_group_notes_ibfk_1` FOREIGN KEY (`group_name_id`) REFERENCES `gabai_group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gabai_group_notes_ibfk_2` FOREIGN KEY (`member_unique_id`) REFERENCES `gabai_group` (`grp_unique_id`);

--
-- Constraints for table `gabai_user`
--
ALTER TABLE `gabai_user`
  ADD CONSTRAINT `gabai_user_ibfk_1` FOREIGN KEY (`grp_unique_ids`) REFERENCES `gabai_group` (`grp_unique_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gabai_user_notes`
--
ALTER TABLE `gabai_user_notes`
  ADD CONSTRAINT `gabai_user_notes_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `gabai_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_thrash`
--
ALTER TABLE `group_thrash`
  ADD CONSTRAINT `group_thrash_ibfk_1` FOREIGN KEY (`group_note_id`) REFERENCES `gabai_group_notes` (`group_name_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_thrash`
--
ALTER TABLE `user_thrash`
  ADD CONSTRAINT `user_thrash_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `gabai_user_notes` (`note_id`),
  ADD CONSTRAINT `user_thrash_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `gabai_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
