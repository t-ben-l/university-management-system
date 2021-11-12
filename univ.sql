-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 05:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`) VALUES
(12345, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `S_id` int(6) NOT NULL,
  `I_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`S_id`, `I_id`) VALUES
(164465, 12345),
(164470, 15151),
(164471, 22222),
(164467, 83821),
(164466, 98345),
(164475, 98345);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `building` varchar(25) NOT NULL,
  `room_no` int(7) NOT NULL,
  `capacity` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`building`, `room_no`, `capacity`) VALUES
('packard', 115, 46),
('packard', 312, 80),
('painter', 113, 60),
('painter', 132, 45),
('taylor', 111, 45),
('taylor', 152, 90),
('watson', 112, 50),
('watson', 122, 30),
('watson', 222, 75);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(8) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `dept_name` varchar(10) DEFAULT NULL,
  `credits` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES
('BI0-233', 'Human organs', 'biology', 4),
('BIO-101', 'Intro. to biology', 'biology', 4),
('BIO-301', 'genetics', 'biology', 3),
('BIO-399', 'computation biology', 'biology', 4),
('COMP-117', 'introduction to programming', 'software', 4),
('COMP-124', 'advanced intro to programming', 'software', 0),
('COMP-189', '', 'physics', 0),
('CS-101', 'intro. to computer science', 'comp. sci.', 4),
('CS-190', ' game design', 'comp. sci.', 3),
('CS-315', 'robotics', 'comp. sci.', 3),
('CS-319', 'image proccessing  ', 'comp. sci.', 3),
('CS-347 ', 'database system concepts', 'comp. sci.', 3),
('EE-181', 'intro. to digital systems ', 'elec. eng.', 3),
('FIN-201', 'inverstment banking', 'finance', 3),
('HIS-351', 'world history', 'history', 3),
('MU-199', 'music video production', 'music', 3),
('PHY-101', 'physical principles', 'physics', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(30) NOT NULL,
  `building` varchar(25) DEFAULT NULL,
  `budget` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `building`, `budget`) VALUES
('biology', 'watson', '90000'),
('comp. sci. ', 'taylor ', '100000'),
('elec. eng.', 'taylor ', '85000'),
('finance', ' painter', '120000'),
('history', 'painter', '50000'),
('hoticulture', 'watson', '140000'),
('law', 'painter', '13000'),
('music ', 'packard', '80000'),
('physics', 'watson', '70000'),
('software', 'taylor', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ID` int(6) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `dept_name` varchar(35) DEFAULT NULL,
  `salary` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ID`, `name`, `dept_name`, `salary`) VALUES
(10101, 'Srinivasan', 'comp. sci.', '55000'),
(12121, 'Wu', 'finance', '90000'),
(12345, 'Ferhun', 'software', '90000'),
(15151, 'Mozart', 'music', '40000'),
(22222, 'Einstein', 'physics', '95000'),
(32343, 'EI Said', 'history', '60000'),
(33456, 'Gold', 'physics', '87000'),
(45565, 'Katz', 'comp. sci. ', '75000'),
(56574, 'guy', 'history', '876786'),
(58583, 'Califieri', 'history', '62000'),
(76543, 'Singh', 'finance', '80000'),
(76766, 'Crick', 'biology', '72000'),
(83821, 'Brandt', 'comp. sci.', '92000'),
(98345, 'Kim', 'elec. eng.', '80000'),
(565221, 'Murin', 'music', '70000');

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(10) NOT NULL,
  `prereq_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prereq`
--

INSERT INTO `prereq` (`course_id`, `prereq_id`) VALUES
('BIO-101', 'BIO-301'),
('BIO-301', 'BIO-399'),
('COMP-117', 'COMP-124'),
('CS-101', 'CS-190'),
('CS-190', 'CS-315'),
('CS-315', 'CS-319'),
('CS-319', 'CS-347');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` varchar(10) NOT NULL,
  `time_slot_id` varchar(11) DEFAULT NULL,
  `semester` varchar(15) NOT NULL,
  `building` varchar(25) DEFAULT NULL,
  `sec_id` varchar(10) NOT NULL,
  `year` int(7) NOT NULL,
  `room_no` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`course_id`, `time_slot_id`, `semester`, `building`, `sec_id`, `year`, `room_no`) VALUES
('BIO-101', '7', 'Fall', 'watson', '1', 2009, 122),
('BIO-301', '1', 'Fall', 'watson', '1', 2009, 122),
('BIO-399', '1', 'Fall', 'watson', '1', 2010, 112),
('COMP-117', '2', 'Fall', 'taylor', '1', 2009, 111),
('COMP-124', '6', 'Fall', 'taylor', '1', 2009, 152),
('COMP-189', '7', 'Fall', 'watson', '1', 2009, 122),
('CS-101', '4', 'Fall', 'taylor', '1', 2009, 111),
('CS-190', '7', 'Fall', 'taylor', '1', 2009, 111),
('CS-315', '9', 'Fall', 'taylor', '1', 2010, 111),
('CS-319', '4', 'Fall', 'taylor', '1', 2009, 152),
('CS-347', '7', 'Spring', 'taylor', '1', 2009, 111),
('EE-181', '2', 'Spring', 'taylor', '1', 2009, 152),
('FIN-201', '2', 'Fall', 'painter', '1', 2009, 113),
('HIS-351', '5', 'Fall', 'painter', '1', 2009, 113),
('MU-199', '3', 'Fall', 'packard', '1', 2009, 312),
('PHY-101', '3', 'Spring', 'watson', '1', 2010, 222);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(6) NOT NULL,
  `name` varchar(26) DEFAULT NULL,
  `dept_name` varchar(26) DEFAULT NULL,
  `tot_cred` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `dept_name`, `tot_cred`) VALUES
(1111, 'privy', 'elec. eng.', 1),
(12333, 'steve', 'history', 3),
(44556, 'melisa', 'comp. sci.', 3),
(143255, 'mike', 'history', 4),
(162533, 'mert', 'software', 4),
(164465, 'liberty', 'software', 4),
(164466, 'tadiwa', 'elec. eng.', 3),
(164467, 'donald', 'comp. sci.', 4),
(164468, 'tariro', 'history', 3),
(164469, 'chiedza', 'finance', 3),
(164470, 'Benson', 'music', 3),
(164471, 'lawson', 'physics', 4),
(164473, 'chido', 'comp. sci.', 3),
(164475, 'john', 'elec. eng.', 3.56),
(998210, 'ahmert', 'finance', 4);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` int(6) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `sec_id` varchar(11) NOT NULL,
  `semester` varchar(26) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `grade` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`ID`, `course_id`, `sec_id`, `semester`, `Year`, `grade`) VALUES
(1111, '', '', '', '', NULL),
(1111, 'BIO-101', '1', 'Fall', '2009', NULL),
(1111, 'COMP-117', '1', 'Fall', '2009', NULL),
(1111, 'CS-101', '1', 'Fall', '2009', NULL),
(1111, 'HIS-351', '1', 'Fall', '2009', NULL),
(12333, 'BIO-101', '1', 'Fall', '2009', NULL),
(12333, 'HIS-351', '1', 'Fall', '2009', NULL),
(44556, '', '', '', '', NULL),
(143255, 'HIS-351', '1', 'Fall', '2009', NULL),
(162533, '', '', '', '', NULL),
(162533, 'BIO-101', '1', 'Fall', '2009', NULL),
(162533, 'COMP-124', '1', 'Fall', '2009', NULL),
(164465, 'COMP-124', '1', 'Spring', '2009', NULL),
(164466, 'EE-181', '1', 'Spring', '2009', NULL),
(164466, 'FIN-201', '1', 'Fall', '2009', NULL),
(164466, 'HIS-351', '1', 'Fall', '2009', NULL),
(164467, 'CS-347', '1', 'Spring ', '2009', NULL),
(164468, 'HIS-351', '1', 'Fall', '2009', NULL),
(164469, 'FIN-201', '1', 'Spring', '2010', NULL),
(164470, 'MU-199', '1', 'Fall', '2009', NULL),
(164471, 'PHY-101', '1', 'Spring', '2010', NULL),
(164473, 'CS-319', '1', 'Fall', '2010', NULL),
(164475, 'EE-181', '1', 'Spring', '2009', NULL),
(998210, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` int(6) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` varchar(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `start_time` int(7) NOT NULL,
  `end_time` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`time_slot_id`, `day`, `start_time`, `end_time`) VALUES
('1', 'Wednesday', 1000, 1230),
('2', 'Wednesday', 1130, 1430),
('3', 'Wednesday', 1130, 1430),
('4', 'Tuesday', 1130, 1430),
('5', 'Thursday', 1130, 1430),
('6', 'Friday', 830, 1030),
('7', 'Wednesday', 1000, 1330),
('8', 'Friday', 1100, 130),
('9', 'Monday', 1130, 1430);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`S_id`),
  ADD KEY `I_id` (`I_id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`building`,`room_no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`),
  ADD KEY `prereq_id` (`prereq_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `building` (`building`,`room_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`Year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`start_time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`ID`),
  ADD CONSTRAINT `advisor_ibfk_2` FOREIGN KEY (`I_id`) REFERENCES `instructor` (`ID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`building`,`room_no`) REFERENCES `classroom` (`building`, `room_no`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `takes` (`ID`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `instructor` (`ID`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
