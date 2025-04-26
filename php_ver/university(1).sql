-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 08:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'lanya@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `prerequisites` varchar(255) DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `instructor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `title`, `description`, `video_url`, `prerequisites`, `credits`, `department`, `instructor`) VALUES
(1, 'CPE4360', 'Operating system', 'This course examines the reasons for the inherent complexity of software construction and presents structured methods to deal with it effectively. Focusing on the object-oriented approach for analysis and design, students will gain an appreciation of the difference between writing programs and doing analysis and design. Problem formulation and decomposition (analysis) and solution building (design) will be covered. Students will work in small groups, each group responsible for analysis, design, and implementation of a software system, with case tools used throughout the process.', 'https://www.youtube.com/watch?v=1kzvQSu9J5I', 'Computer Organization and Architecture', 3, 'Computer Science, Computer Engineering', 'Dr. sara');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `week` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `file_url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `course_name`, `week`, `title`, `file_url`) VALUES
(1, 'Operating System', 1, 'Introduction', 'week1.pdf'),
(2, 'Operating System', 2, 'Operating System Structures', 'week2.pdf'),
(3, 'Operating System', 3, 'Processes', 'week3.pdf'),
(4, 'Operating System', 4, ' Threading', 'week4.pdf'),
(5, 'Operating System', 5, 'Process Scheduling', 'week5.pdf'),
(6, 'Operating System', 6, 'Process Synchronization', 'week6.pdf'),
(7, 'Operating System', 7, 'Deadlocks', 'week7.pdf'),
(8, 'Operating System', 8, 'Memory Management Strategies', 'week8.pdf'),
(9, 'Operating System', 9, 'Virtual Memory Management', 'week9.pdf'),
(10, 'Operating System', 10, 'File-System', 'week10.pdf'),
(11, 'Operating System', 11, 'nergy-Efficient Scheduling and Resource Management', 'week11.pdf'),
(12, 'Operating System', 12, 'Sustainable Storage Systems', 'week12.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'lanya', 'lanya@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
