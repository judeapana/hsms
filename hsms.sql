-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 05:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `year`, `register_time`, `addedby`) VALUES
(10, '2018/2019', '2019-01-27 15:49:36', 'Azure');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profileimg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `othernum` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `fname`, `lname`, `uname`, `sex`, `contact`, `address`, `profileimg`, `email`, `othernum`, `timestamp`) VALUES
(2, 'Azure', 'Desmond', 'Azure', 'male', '0208854787', 'Post Office Box 182', 'adminjx09uoiABgwCLyTpKm17.jpg', 'azuredesmond@gmail.com', '0208857485', '2019-01-30 13:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `portfolio` varchar(100) NOT NULL,
  `attempts` int(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(3, 'Science A'),
(4, 'Science B'),
(6, 'Art A'),
(7, 'Art B'),
(8, 'Business A'),
(9, 'Business B'),
(10, 'Home Science A'),
(11, 'Home Science B');

-- --------------------------------------------------------

--
-- Table structure for table `grade_sys`
--

CREATE TABLE `grade_sys` (
  `id` int(11) NOT NULL,
  `from_int` int(11) NOT NULL,
  `to_int` int(11) NOT NULL,
  `gp` char(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_sys`
--

INSERT INTO `grade_sys` (`id`, `from_int`, `to_int`, `gp`, `remarks`) VALUES
(7, 0, 39, 'F9', 'Fail'),
(9, 40, 44, 'E8', 'Pass'),
(10, 45, 49, 'D7', 'Pass'),
(11, 50, 54, 'C6', 'Credit'),
(12, 55, 59, 'C5', 'Credit'),
(13, 60, 64, 'C4', 'Credit'),
(15, 70, 79, 'B2', 'Very Good'),
(16, 80, 100, 'A', 'Excellent'),
(20, 65, 69, 'B3', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `ptfname` varchar(100) NOT NULL,
  `ptlname` varchar(100) NOT NULL,
  `ptuname` varchar(100) NOT NULL,
  `ptsex` varchar(100) NOT NULL,
  `ptoccupation` varchar(100) NOT NULL,
  `ptcontact` varchar(100) NOT NULL,
  `reltostd` varchar(100) NOT NULL,
  `ptemail` varchar(100) NOT NULL,
  `stduname` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dismissed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `ptfname`, `ptlname`, `ptuname`, `ptsex`, `ptoccupation`, `ptcontact`, `reltostd`, `ptemail`, `stduname`, `timestamp`, `dismissed`) VALUES
(1, 'Amina', 'Musah', 'sudaisaziz', 'male', 'Trader', '0249965654', 'Mother', 'ahmedissahtahiru19@gmail.com', 'SX302', '2019-03-29 19:42:55', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `registered_to` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`, `registered_to`, `uname`) VALUES
(17, 'Headmaster / Mistress', '', ''),
(18, 'Assistant  Headmaster / Mistress', '', ''),
(20, 'House Master /Mistress', '', ''),
(24, 'Head Of Department', '', ''),
(25, 'Form Master / Mistress', '', ''),
(26, 'Teacher', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `elect_sub1` varchar(100) NOT NULL,
  `elect_sub2` varchar(100) NOT NULL,
  `elect_sub3` varchar(100) NOT NULL,
  `elect_sub4` varchar(100) NOT NULL,
  `core_sub1` varchar(100) NOT NULL,
  `core_sub2` varchar(100) NOT NULL,
  `core_sub3` varchar(100) NOT NULL,
  `core_sub4` varchar(100) NOT NULL,
  `core_sub5` varchar(100) NOT NULL,
  `core_sub6` varchar(100) NOT NULL,
  `core_sub7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `name`, `elect_sub1`, `elect_sub2`, `elect_sub3`, `elect_sub4`, `core_sub1`, `core_sub2`, `core_sub3`, `core_sub4`, `core_sub5`, `core_sub6`, `core_sub7`) VALUES
(12, 'General Science', 'Elective Mathematics', 'Biology', 'Physics', 'Chemistry', 'English Language', 'Social Studies', 'Core Mathematics', 'Integrated Science', 'Information Communication Technology', 'Physical Education', 'French'),
(13, 'General Arts', 'Elective Mathematics', 'Geography', 'Literature', 'Economics', 'English Language', 'Social Studies', 'Core Mathematics', 'Integrated Science', 'Information Communication Technology', 'Physical Education', 'French'),
(14, 'Home Economics', 'Chemistry', 'Fashion And Design', 'Management In Living', 'Food And Nutrition', 'English Language', 'Social Studies', 'Core Mathematics', 'Integrated Science', 'Information Communication Technology', 'Physical Education', 'French'),
(21, 'Business', 'Costing Accounting', 'Financial Accounting', 'Business Management', 'Economics', 'English Language', 'Social Studies', 'Core Mathematics', 'Integrated Science', 'Information Communication Technology', 'Physical Education', 'French');

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

CREATE TABLE `recovery` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recovery`
--

INSERT INTO `recovery` (`id`, `email`, `usertype`, `hash`, `status`, `timestamp`) VALUES
(11, 'fusein2020@gmail.com', 'teacher', '84912', 0, '2019-02-01 16:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) NOT NULL,
  `stdid` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `term` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `stdid`, `position`, `remark`, `uname`, `academic_year`, `semester`, `form`, `term`) VALUES
(1, 'SX302', 'Form Master / Mistress', 'Good Performance', 'fuseini', '2018/2019', 1, 1, 1),
(2, 'SX302', 'Head Of Department', 'Excellent Performance Keep It Up', 'Ahmed Issah', '2018/2019', 1, 1, 1),
(3, 'SX302', 'House Master /Mistress', 'Excellent Performance Keep It Up', 'Janson', '2018/2019', 1, 1, 1),
(4, 'SX302', 'Assistant  Headmaster / Mistress', 'Excellent Performance Keep It Up', 'martin', '2018/2019', 1, 1, 1),
(5, 'SX302', 'Headmaster / Mistress', 'Excellent Performance Keep It Up', 'fuseinihu', '2018/2019', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resume_date`
--

CREATE TABLE `resume_date` (
  `id` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_date`
--

INSERT INTO `resume_date` (`id`, `term`, `resume`, `academic_year`, `timestamp`) VALUES
(2, 1, '2019-04-25', '2018/2019', '2019-01-30 13:18:31'),
(3, 2, '2019-03-21', '2018/2019', '2019-03-09 19:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `postaladdr` varchar(100) NOT NULL,
  `profileimg` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `stdprogram` varchar(100) NOT NULL,
  `stdclass` varchar(100) NOT NULL,
  `stdid` varchar(100) NOT NULL,
  `ptuname` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stdhouse` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `dismissed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `sex`, `nationality`, `date_of_birth`, `contact`, `hometown`, `region`, `postaladdr`, `profileimg`, `email`, `uname`, `stdprogram`, `stdclass`, `stdid`, `ptuname`, `timestamp`, `stdhouse`, `academic_year`, `dismissed`) VALUES
(1, 'Sudais', 'Aziz', 'male', 'Ghanaian', '1995-08-02', '0245656876', 'Bongo', 'Upper East Region', 'P. O. Box AD 56, BG', 'SudaisAzizb0F5ohKXTcEjMJdqBPNu20182019.jpg', 'ahmed@gmail.com', 'SX302', 'General Science', 'Science A', 'SX302', 'sudaisaziz', '2019-04-14 17:06:43', 'Hawa House', '2018/2019', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `student_report`
--

CREATE TABLE `student_report` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stdid` varchar(100) NOT NULL,
  `form` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `stdclass` varchar(100) NOT NULL,
  `class_score` float NOT NULL,
  `exams_score` float NOT NULL,
  `total_score` float NOT NULL,
  `grade` tinytext NOT NULL,
  `term` int(11) NOT NULL,
  `remarks` tinytext NOT NULL,
  `attendance` int(11) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `submitttedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_report`
--

INSERT INTO `student_report` (`id`, `date`, `stdid`, `form`, `semester`, `subject`, `stdclass`, `class_score`, `exams_score`, `total_score`, `grade`, `term`, `remarks`, `attendance`, `academic_year`, `submitttedby`) VALUES
(1, '2019-03-29 19:44:03', 'SX302', 1, 1, 'Chemistry', 'Science A', 12, 66, 78, 'B2', 1, 'Very Good', 40, '2018/2019', 'Janson'),
(2, '2019-02-01 14:48:17', 'SX302', 1, 1, 'Physics', 'Science A', 15, 70, 85, 'A', 1, 'Excellent', 26, '2018/2019', 'fuseini'),
(3, '2019-02-01 14:50:39', 'SX302', 1, 1, 'Biology', 'Science A', 29, 70, 99, 'A', 1, 'Excellent', 40, '2018/2019', 'Ahmed Issah'),
(4, '2019-02-01 14:52:00', 'SX302', 1, 1, 'Elective Mathematics', 'Science A', 17, 67, 84, 'A', 1, 'Excellent', 45, '2018/2019', 'martin'),
(5, '2019-02-01 14:55:04', 'SX302', 1, 1, 'Core Mathematics', 'Science A', 11, 69, 80, 'A', 1, 'Excellent', 50, '2018/2019', 'fuseinihu'),
(6, '2019-04-14 17:32:59', 'SX302', 1, 1, 'Biology', 'Science A', 1, 4, 5, 'F9', 2, 'Fail', 2, '2018/2019', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(10, 'Biology'),
(11, 'Physics'),
(12, 'Chemistry'),
(16, 'Economics'),
(18, 'Geography'),
(19, 'Financial Accounting'),
(20, 'Government'),
(21, 'Christian Religious Studies'),
(22, 'French'),
(23, 'Costing Accounting'),
(24, 'Business Management'),
(25, 'Food And Nutrition'),
(26, 'History'),
(27, 'Graphic Design'),
(28, 'Textiles'),
(29, 'Management In Living'),
(30, 'Literature'),
(31, 'Fashion And Design'),
(32, 'English Language'),
(33, 'Core Mathematics'),
(34, 'Elective Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profileimg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `subject_area` varchar(100) NOT NULL,
  `othernum` varchar(100) NOT NULL,
  `current_pos` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `uname`, `sex`, `contact`, `address`, `profileimg`, `email`, `app_date`, `subject_area`, `othernum`, `current_pos`, `timestamp`) VALUES
(1, 'AdamKarim', 'Mohammed', 'teacher', 'Male', '0545788904', 'Pox 02 sari', 'teacherqhxFJEXUQV0AeZGy85MB.jpg', 'fusein2020@gmail.com', '2016-12-02', 'Biology', '0545788904', 'Form Master / Mistress', '2019-04-14 17:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `acc_level` int(11) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `email`, `contact`, `acc_level`, `usertype`, `active`, `timestamp`) VALUES
(17, 'Azure', 'f00b20533721db08624bb394322b27d3f61dc063', 'azuredesmond@gmail.com', '0208854787', 911, 'admin', 1, '2019-01-25 08:13:23'),
(22, 'SX302', 'f00b20533721db08624bb394322b27d3f61dc063', 'student@gmail.com', '0245656876', 0, 'student', 1, '2019-04-14 17:03:06'),
(24, 'teacher', 'f00b20533721db08624bb394322b27d3f61dc063', 'teacher@gmail.com', '0545788907', 200, 'teacher', 1, '2019-04-14 17:02:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_sys`
--
ALTER TABLE `grade_sys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recovery`
--
ALTER TABLE `recovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_date`
--
ALTER TABLE `resume_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_report`
--
ALTER TABLE `student_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grade_sys`
--
ALTER TABLE `grade_sys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `recovery`
--
ALTER TABLE `recovery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resume_date`
--
ALTER TABLE `resume_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_report`
--
ALTER TABLE `student_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
