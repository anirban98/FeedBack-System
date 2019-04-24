-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2018 at 02:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `automata`
--

CREATE TABLE `automata` (
  `subject` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `30/04/2018` varchar(20) NOT NULL,
  `01/05/2018` varchar(30) NOT NULL,
  `02/05/2018` varchar(21) NOT NULL,
  `03/05/2018` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automata`
--

INSERT INTO `automata` (`subject`, `id`, `name`, `feedback`, `report`, `30/04/2018`, `01/05/2018`, `02/05/2018`, `03/05/2018`) VALUES
('automata', 1, 'sid', '', '', '', 'A', '', ''),
('automata', 2, 'ayush', '', '', '', 'A', '', ''),
('automata', 3, 'aman', '', '', '', 'A', '', ''),
('automata', 4, 'abhinav', '', '', '', 'A', '', ''),
('automata', 5, 'amish', '', '', '', 'A', '', ''),
('automata', 6, 'prateek', '', '', '', 'A', '', ''),
('automata', 7, 'samyak', '', '', '', 'A', '', ''),
('automata', 8, 'manish', '', '', '', 'A', '', ''),
('automata', 9, 'ramesh', '', '', '', 'A', '', ''),
('automata', 10, 'sam', '', '', '', 'A', '', ''),
('automata', 11, 'mudit', '', '', 'p', 'P', '', ''),
('automata', 12, 'akhil', '', '', '', '', '', ''),
('automata', 88, 'subhi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cbnst`
--

CREATE TABLE `cbnst` (
  `subject` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `30/04/2018` varchar(20) NOT NULL,
  `01/05/2018` varchar(30) NOT NULL,
  `02/05/2018` varchar(10) NOT NULL,
  `06/02/2018` varchar(10) NOT NULL,
  `03/05/2018` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbnst`
--

INSERT INTO `cbnst` (`subject`, `id`, `name`, `feedback`, `report`, `30/04/2018`, `01/05/2018`, `02/05/2018`, `06/02/2018`, `03/05/2018`) VALUES
('cbnst', 1, 'sid', '', '', '', 'P', 'A', '', ''),
('cbnst', 2, 'ayush', '', '', '', 'P', 'A', '', ''),
('cbnst', 3, 'aman', '', '', '', 'P', 'A', '', ''),
('cbnst', 4, 'abhinav', '', '', '', 'P', 'A', '', ''),
('cbnst', 5, 'amish', '', '', '', 'P', 'A', '', ''),
('cbnst', 6, 'prateek', '', '', '', 'P', 'A', '', ''),
('cbnst', 7, 'samyak', '', '', '', 'P', 'A', '', ''),
('cbnst', 8, 'manish', '', '', '', 'P', 'A', '', ''),
('cbnst', 9, 'ramesh', '', '', '', 'P', 'A', '', ''),
('cbnst', 10, 'sam', '', '', '', 'P', 'A', '', ''),
('cbnst', 11, 'mudit', '', '', '', 'P', 'A', '', ''),
('cbnst', 12, 'akhil', '', '', '', '', '', '', ''),
('cbnst', 88, 'subhi', 'qqqqq', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `subject` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `30/04/2018` varchar(30) NOT NULL,
  `01/05/2018` varchar(30) NOT NULL,
  `02/05/2018` varchar(12) NOT NULL,
  `03/05/2018` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`subject`, `id`, `name`, `feedback`, `report`, `30/04/2018`, `01/05/2018`, `02/05/2018`, `03/05/2018`) VALUES
('cc', 1, 'sid', '', '', '', 'P', '', ''),
('cc', 2, 'ayush', '', '', '', 'A', '', ''),
('cc', 3, 'aman', '', '', '', 'P', '', ''),
('cc', 4, 'abhinav', '', '', '', 'A', '', ''),
('cc', 5, 'amish', '', '', '', 'P', '', ''),
('cc', 6, 'prateek', '', '', '', 'P', '', ''),
('cc', 7, 'samyak', '', '', '', 'P', '', ''),
('cc', 8, 'manish', '', '', '', 'A', '', ''),
('cc', 9, 'ramesh', '', '', '', 'P', '', ''),
('cc', 10, 'sam', '', '', '', 'A', '', ''),
('cc', 11, 'mudit', '', '', '', 'P', '', ''),
('cc', 12, 'akhil', '', '', '', '', '', ''),
('cc', 88, 'subhi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `subject` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `30/04/2018` varchar(20) NOT NULL,
  `01/05/2018` varchar(30) NOT NULL,
  `02/05/2018` varchar(21) NOT NULL,
  `03/05/2018` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`subject`, `id`, `name`, `feedback`, `report`, `30/04/2018`, `01/05/2018`, `02/05/2018`, `03/05/2018`) VALUES
('co', 1, 'sid', '', '', '', 'P', '', ''),
('co', 2, 'ayush', '', '', '', 'P', '', ''),
('co', 3, 'aman', '', '', '', 'A', '', ''),
('co', 4, 'abhinav', '', '', '', 'A', '', ''),
('co', 5, 'amish', '', '', '', 'P', '', ''),
('co', 6, 'prateek', '', '', '', 'P', '', ''),
('co', 7, 'samyak', '', '', '', 'A', '', ''),
('co', 8, 'manish', '', '', '', 'A', '', ''),
('co', 9, 'ramesh', '', '', '', 'P', '', ''),
('co', 10, 'sam', '', '', '', 'P', '', ''),
('co', 11, 'mudit', '', '', '', 'A', '', ''),
('co', 12, 'akhil', '', '', '', '', '', ''),
('co', 88, 'subhi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `subject` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `30/04/2018` varchar(20) NOT NULL,
  `01/05/2018` varchar(30) NOT NULL,
  `02/05/2018` varchar(21) NOT NULL,
  `03/05/2018` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`subject`, `id`, `name`, `feedback`, `report`, `30/04/2018`, `01/05/2018`, `02/05/2018`, `03/05/2018`) VALUES
('java', 1, 'sid', '', '', '', 'P', '', ''),
('java', 2, 'ayush', '', '', '', 'P', '', ''),
('java', 3, 'aman', '', '', '', 'P', '', ''),
('java', 4, 'abhinav', '', '', '', 'P', '', ''),
('java', 5, 'amish', '', '', '', 'P', '', ''),
('java', 6, 'prateek', '', '', '', 'P', '', ''),
('java', 7, 'samyak', '', '', '', 'P', '', ''),
('java', 8, 'manish', '', '', '', 'P', '', ''),
('java', 9, 'ramesh', '', '', '', 'P', '', ''),
('java', 10, 'sam', '', '', '', 'P', '', ''),
('java', 11, 'mudit', '', '', '', 'P', '', ''),
('java', 12, 'akhil', '', '', '', '', '', ''),
('java', 88, 'subhi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `micro`
--

CREATE TABLE `micro` (
  `subject` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `feedback` text NOT NULL,
  `report` text NOT NULL,
  `01/05/2018` varchar(20) NOT NULL,
  `02/05/2018` varchar(22) NOT NULL,
  `06/02/2018` varchar(10) NOT NULL,
  `03/05/2018` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `micro`
--

INSERT INTO `micro` (`subject`, `id`, `name`, `feedback`, `report`, `01/05/2018`, `02/05/2018`, `06/02/2018`, `03/05/2018`) VALUES
('micro', 1, 'sid', '', '', 'A', '', '', ''),
('micro', 2, 'ayush', '', '', 'A', '', '', ''),
('micro', 3, 'aman', '', '', 'A', '', '', ''),
('micro', 4, 'abhinav', '', '', 'A', '', '', ''),
('micro', 5, 'amish', '', '', 'A', '', '', ''),
('micro', 6, 'prateek', '', '', 'A', '', '', ''),
('micro', 7, 'samyak', '', '', 'A', '', '', ''),
('micro', 8, 'manish', '', '', 'A', '', '', ''),
('micro', 9, 'ramesh', '', '', 'A', '', '', ''),
('micro', 10, 'sam', '', '', 'A', '', '', ''),
('micro', 11, 'mudit', '', '', 'A', '', '', ''),
('micro', 12, 'akhil', '', '', '', '', '', ''),
('micro', 88, 'subhi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_database`
--

CREATE TABLE `student_database` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `course` varchar(10) NOT NULL,
  `section` varchar(2) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_database`
--

INSERT INTO `student_database` (`id`, `name`, `username`, `email`, `course`, `section`, `password`) VALUES
(1, 'sid', 'sid', 'asasasa@asasa', 'btech', 's', '698d51a19d8a121ce581499d7b701668'),
(2, 'ayush', 'ayush', 'ayush@ayush', 'btech', 'cc', '202cb962ac59075b964b07152d234b70'),
(3, 'aman', 'aman', 'aman@aman', 'btech', 'a', '202cb962ac59075b964b07152d234b70'),
(4, 'abhinav', 'abhinav', 'abhinav@abhinav', 'btech', 'cc', '202cb962ac59075b964b07152d234b70'),
(5, 'amish', 'amish', 'amish@amish', 'btech', 'cc', '202cb962ac59075b964b07152d234b70'),
(6, 'prateek', 'prateek', 'prateek@prateek', 'Btech', 'CC', '202cb962ac59075b964b07152d234b70'),
(7, 'samyak', 'samyak', 'samyak@samyak', 'btech', 'CC', '202cb962ac59075b964b07152d234b70'),
(8, 'manish', 'manish', 'manish@manish', 'btech', 'CC', '202cb962ac59075b964b07152d234b70'),
(9, 'ramesh', 'ramesh', 'ramesh@ramesh', 'btech', 'cc', '202cb962ac59075b964b07152d234b70'),
(10, 'sam', 'sam', 'sam@sam', 'btech', 'cc', '123'),
(11, 'mudit', 'mudit', 'mudit@mudit', 'btech', 'cc', '202cb962ac59075b964b07152d234b70'),
(12, 'akhil', 'akhil', 'akhil@akhil.com', '', 'cc', '202cb962ac59075b964b07152d234b70'),
(88, 'subhi', 'subhi', 'subhi.123@124', '', 'cc', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_database`
--

CREATE TABLE `teacher_database` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_database`
--

INSERT INTO `teacher_database` (`id`, `name`, `username`, `email`, `subject`, `password`) VALUES
(1, 'aman', 'aman', 'aman@aman.com', 'micro', '202cb962ac59075b964b07152d234b70'),
(2, 'at', 'at', 'at@at', 'cc', '202cb962ac59075b964b07152d234b70'),
(3, 'arjun singh', 'arjun', 'arjunsingh73362@gmail.com', 'cbnst', '202cb962ac59075b964b07152d234b70'),
(4, 'ayush tripathi', 'ayush', 'ayush.me001@gmail.com', 'automata', '202cb962ac59075b964b07152d234b70'),
(5, 'sumit', 'sumit', 'sumit@sumit', 'co', '202cb962ac59075b964b07152d234b70'),
(6, 'bhaskar', 'bhaskar', 'bhaskar@bhaskar', 'java', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automata`
--
ALTER TABLE `automata`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cbnst`
--
ALTER TABLE `cbnst`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `micro`
--
ALTER TABLE `micro`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_database`
--
ALTER TABLE `student_database`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `teacher_database`
--
ALTER TABLE `teacher_database`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
