-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 02:39 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(255) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(255) NOT NULL,
  `StudentName` varchar(500) NOT NULL,
  `Year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `id` int(255) NOT NULL,
  `semester` varchar(500) NOT NULL,
  `day` varchar(500) NOT NULL,
  `cell1` varchar(500) NOT NULL,
  `cell2` varchar(500) NOT NULL,
  `cell3` varchar(500) NOT NULL,
  `cell4` varchar(500) NOT NULL,
  `cell5` varchar(500) NOT NULL,
  `cell6` varchar(500) NOT NULL,
  `cell7` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`id`, `semester`, `day`, `cell1`, `cell2`, `cell3`, `cell4`, `cell5`, `cell6`, `cell7`) VALUES
(1, '1', 'Monday', 'ITC, Shafiq', 'ITC, Shafiq', '', '', '', '', ''),
(2, '1', 'Tuesday', '', '', 'BE, Imran Khan', 'PSTD, Kamil Siddiqui', 'ITC, Shafiq', 'ITC, Shafiq', 'ITC, Shafiq'),
(3, '1', 'Wednesday', '', 'PF, Shafaq S', 'FE, Adnan Jafri', 'FE, Adnan Jafri', 'PF, Shafaq S', 'PF, Shafaq S', 'PF, Shafaq S'),
(4, '1', 'Thursday', '', 'PF, Shafaq S', 'Calculus, Kamran', 'FE, Adnan Jafri', 'Islamiat, M.Ahmed', 'Islamiat, M.Ahmed', ''),
(5, '1', 'Friday', '', '', '', 'Calculus, Kamran', '', '', ''),
(6, '2', 'Monday', 'CS, Nazra S', 'CS, Nazra S', '', '', '', '', ''),
(7, '2', 'Tuesday', '', '', 'MVC, A Mannan', 'FM, Kamran S', 'CS, Nazra S', 'CS, Nazra S', 'CS, Nazra S'),
(8, '2', 'Wednesday', '', 'DS, Shamim S', 'MVC, A mannan', 'MVC, A mannan', 'FM, Kamran S', 'FM, Kamran S', 'FM, Kamran S'),
(9, '2', 'Thursday', '', 'FM, Kamran', 'DS, Shamim S', 'MVC, A Mannan', 'DS, Shamim S', 'DS, Shamim S', ''),
(10, '2', 'Friday', '', '', '', 'DS, Shamim S', '', '', ''),
(11, '3', 'Monday', 'DLD, Shafiq', 'DLD, Shafiq', '', '', '', '', ''),
(12, '3', 'Tuesday', '', '', 'LA, Arisha A', 'LA, Arisha A', 'DLD, Shafiq', 'DLD, Shafiq', 'DLD, Shafiq'),
(13, '3', 'Wednesday', '', 'LA, Arisha A', 'PS, ALi', 'OOp, Shams Ul Arfeen', 'LA, Arisha A', 'LA, Arisha A', 'LA, Arisha A'),
(14, '3', 'Thursday', '', 'OOP, Shams Ul Arfeen', 'OOP, Shams Ul Arfeen', 'OOP, Shams Ul Arfeen', 'PS, Ali', 'PS, Ali', ''),
(15, '3', 'Friday', '', '', '', 'PS, Ali', '', '', ''),
(16, '4', 'Monday', 'DSA, Shehzad', 'DSA, Shehzad', '', '', '', '', ''),
(17, '4', 'Tuesday', '', '', 'DE, Kumar', 'DE, Kumar', 'DSA, Shehzad', 'DSA, Shehzad', 'DSA, Shehzad'),
(18, '4', 'Wednesday', '', 'DCNCN, Dr. A A Siddiqui', 'MAM, Noman S', 'MAM, Noman S', 'DE, kumar', 'DE, kumar', 'DE, kumar'),
(19, '4', 'Thursday\r\n', '', 'DCNCN, Dr, AA Siddiqui', 'DCNCN, Dr, AA Siddiqui', 'MAM, Noman S', 'Assembly, Imran Khan', 'Assembly, Imran Khan', ''),
(20, '4', 'Friday', '', '', '', 'Assembly, Imran Khan', '', '', ''),
(21, '5', 'Monday', 'Database, Afzal', 'Database, Afzal', '', '', '', '', ''),
(22, '5', 'Tuesday', '', '', 'SE, Asad Ur Rehman', 'SE, Asad Ur Rehman', 'Database, Afzal', 'Database, Afzal', 'Database, Afzal'),
(23, '5', 'Wednesday', '', 'SE, Asad Ur Rehman', 'OS, Iqbal U', 'OS, Iqbal U', 'SE, Asad Ur Rehman', 'SE, Asad Ur Rehman', 'SE, Asad Ur Rehman'),
(24, '5', 'Thursday', '', 'NC, Imran Khan', 'NC, Imran Khan', 'OS, Iqbal U', 'OS-L, Iqbal U', 'OS-L, Iqbal U', ''),
(25, '5', 'Friday', '', '', '', 'OS-L, Iqbal U', '', '', ''),
(26, '6', 'Monday', 'CAO, Dr. Aqeel Raza', 'CAO, Dr. Aqeel Raza', '', '', '', '', ''),
(27, '6', 'Tuesday', '', '', 'Entrepreneurship, Noman S', 'Entrepreneurship, Noman S', 'CAO, Dr. Aqeel Raza', 'CAO, Dr. Aqeel Raza', 'CAO, Dr. Aqeel Raza'),
(28, '6', 'Wednesday', '', 'Entrepreneurship, Noman S', 'Automata, Saboohi', 'Automata, Saboohi', 'Entrepreneurship, Noman S', 'Entrepreneurship, Noman S', 'Entrepreneurship, Noman S'),
(29, '6', 'Thursday', '', 'SQA, Asad Ur Rehman', 'SQA, Asad Ur Rehman', 'Automata, Saboohi', 'DAA, S Shah', 'DAA, S Shah', ''),
(30, '6', 'Friday', '', '', '', 'DAA, S Shah', '', '', ''),
(31, '7', 'Monday', 'AI, Shafiq S', 'AI, Shafiq S', '', '', '', '', ''),
(32, '7', 'Tuesday', '', '', 'Web E-I, Dr. A A Siddiqui', 'Web E-I, Dr. A A Siddiqui', 'A.I-L, Shafiq S', 'A.I-L, Shafiq S', 'A.I-L, Shafiq S'),
(33, '7', 'Wednesday', '', 'HCI, Dr. A A Siddiqui', 'SPM, A Mannan', 'SPM, A Mannan', 'Web E-I-L, Dr. A A Siddiqui', 'Web E-I-L, Dr. A A Siddiqui', 'Web E-I-L, Dr. A A Siddiqui'),
(34, '7', 'thursday', '', 'HCI, Dr. A A Siddiqui', 'HCI, Dr. A A Siddiqui', 'SPM, A Mannan', 'CC, S Shah', 'CC, S Shah', ''),
(35, '7', 'Friday', '', '', '', 'CC, S Shah', '', '', ''),
(36, '8', 'Monday', 'Elective v, Shafaq S', 'Elective v, Shafaq S', '', '', '', '', ''),
(37, '8', 'Tuesday', '', '', 'Elective VI, Dr. AA Siddiqui', 'Elective VII, Dr. AA Siddiqui', 'Elective v, Shafaq S', 'Elective v, Shafaq S', 'Elective v, Shafaq S'),
(38, '8', 'Wednesday', '', 'Elective VI, Dr. A A Siddiqui', 'IS, A Mannan', 'IS, A Mannan', 'Elective VII, Dr. A A Siddiqui', 'Elective VI, Dr. A A Siddiqui', 'Elective VI, Dr. A A Siddiqui'),
(39, '8', 'Thursday', '', 'Elective VII, Dr. A A Siddiqui', 'Elective VI, Dr. A A Siddiqui', 'IS, A Mannan', 'PP, S Shah', 'PP, S Shah', ''),
(40, '8', 'Friday', '', '', '', 'PP, S Shah', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(255) NOT NULL,
  `teachername` varchar(100) NOT NULL,
  `coursename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `teachername`, `coursename`) VALUES
(1, 'Shafiq', 'ITC'),
(2, 'Imran Khan', 'BE'),
(3, 'Kamil Siddiqui', 'PSTD'),
(4, 'Shafaq S', 'PF'),
(5, 'Adnan Jafri', 'FE');

-- --------------------------------------------------------

--
-- Table structure for table `teachertable`
--

CREATE TABLE `teachertable` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `day` varchar(500) NOT NULL,
  `cell1` varchar(500) NOT NULL,
  `cell2` varchar(500) NOT NULL,
  `cell3` varchar(500) NOT NULL,
  `cell4` varchar(500) NOT NULL,
  `cell5` varchar(500) NOT NULL,
  `cell6` varchar(500) NOT NULL,
  `cell7` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachertable`
--

INSERT INTO `teachertable` (`id`, `name`, `day`, `cell1`, `cell2`, `cell3`, `cell4`, `cell5`, `cell6`, `cell7`) VALUES
(1, 'Shafiq', 'Monday', 'ITC, 1st Semester', 'ITC, 1st Semester', '', '', '', '', ''),
(2, 'Shafiq', 'Tuesday', '', '', '', '', 'ITC, 1st Semester', 'ITC, 1st Semester', 'ITC, 1st Semester'),
(3, '', 'Tuesday', '', '', 'BE, 1st Semester', '', '', '', ''),
(4, 'Imran Khan', 'Thursday', '', '', '', '', 'Assembly, 4th Semester', 'Assembly, 4th Semester', ''),
(5, 'Imran Khan', 'Friday', '', '', '', 'Assembly, 4th Semester', '', '', ''),
(6, 'Kamil Sidddiqui', 'Tuesday', '', '', '', 'PSTD, 1st semester', '', '', ''),
(7, 'Shafaq S', 'Monday', 'AI, 7th semester', 'AI, 7th semester', '', '', '', '', ''),
(8, 'Shafaq S', 'Tuesday', '', '', '', '', 'AI, 7th semester', 'AI, 7th semester', 'AI, 7th semester'),
(9, 'Shafaq S', 'Wednesday', '', 'PF, 1st Semester', '', '', 'AI, 7th semester', 'AI, 7th semester', 'AI, 7th semester'),
(10, 'Shafaq S', 'Thursday', '', 'PF, 1st Semester', '', '', '', '', ''),
(11, 'Adnan Ahmed Siddiqui', 'Tuesday', '', '', 'Web, 7th semester', 'Web, 7th semester', '', '', ''),
(12, 'Adnan Ahmed Siddiqui', 'Wednesday', '', '', '', '', 'Web-L, 7th semester', 'Web-L, 7th semester', 'Web-L, 7th semester'),
(13, 'Adnan Ahmed Siddiqui', 'Thursday', '', 'HCI- 7th Semester', 'HCI- 7th Semester', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE `ttable` (
  `id` int(255) NOT NULL,
  `Semester` varchar(500) NOT NULL,
  `day` varchar(500) NOT NULL,
  `cell1` varchar(500) NOT NULL,
  `cell2` varchar(500) NOT NULL,
  `cell3` varchar(500) NOT NULL,
  `cell4` varchar(500) NOT NULL,
  `cell5` varchar(500) NOT NULL,
  `cell6` varchar(500) NOT NULL,
  `cell7` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`id`, `Semester`, `day`, `cell1`, `cell2`, `cell3`, `cell4`, `cell5`, `cell6`, `cell7`) VALUES
(1, '1', 'Monday', 'ITC', 'ITC', '', '', '', '', ''),
(2, '1', 'Tuesday', '', '', 'BE', 'PSTD', 'ITC', 'ITC', 'ITC'),
(3, '1', 'Wednesday', '', 'PF', 'FE', 'FE', 'PF', 'PF', 'PF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `category`, `Year`) VALUES
(8, '', 'bb@bb.com', 'bb', 'student', '1'),
(9, '', 'bcb@bcb.com', 'bcb', 'student', '1'),
(10, '', 'ioi@iooi.com', 'ioi', 'student', '1'),
(11, '', 'ioi@iooi.com', 'kk', 'student', '1'),
(12, '', 'rutabash@yahoo.com', 'abc', 'student', '1'),
(14, '', 'iou@tr.com', 'abc', 'student', '1'),
(15, '', 'oi@gtf.com', 'abc', 'student', '3'),
(16, '', 'hh@gg.com', 'abc', 'student', '1'),
(17, '', 'op@jh.com', 'abc', 'student', '1'),
(18, '', 'jh@gbv.com', 'abc', 'student', '2'),
(19, '', 'kjh@uy.com', 'abc', 'student', '1'),
(20, '', 'kjds@jh.com', 'llll', 'student', '1'),
(21, '', 'gggggg@gggggg.com', 'abc', 'student', '1'),
(29, '', 'abc@abc.com', 'abc', 'student', '1'),
(30, '', 'jj@jj.com', 'jj', 'student', '1'),
(31, 'Shafiq', 'gg@g.com', 'gg', 'teacher', ''),
(32, 'Adnan Ahmed Siddiqui', 'adnan@gmail.com', 'adnan', 'teacher', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachertable`
--
ALTER TABLE `teachertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttable`
--
ALTER TABLE `ttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachertable`
--
ALTER TABLE `teachertable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ttable`
--
ALTER TABLE `ttable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
