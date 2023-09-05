-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 11:16 AM
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
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `issuedata`
--

CREATE TABLE `issuedata` (
  `id` int(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stdgroup` varchar(50) NOT NULL,
  `grp_year` varchar(50) NOT NULL,
  `issue_category` varchar(50) NOT NULL,
  `issue_description` varchar(900) NOT NULL,
  `Response` varchar(10) DEFAULT NULL,
  `Response_msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuedata`
--

INSERT INTO `issuedata` (`id`, `student_name`, `email`, `gender`, `stdgroup`, `grp_year`, `issue_category`, `issue_description`, `Response`, `Response_msg`) VALUES
(1, 'amarnath', 'yrasgasg@gmail.com', 'Male', 'mpcs', '1st Year', 'Raging', 'how is it', 'Yes', 'will solve ur problem don\'t worry'),
(6, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', 'yes', NULL),
(7, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', 'yes', NULL),
(9, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', 'No', 'will solve ur problem don\'t worry'),
(10, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', 'yes', NULL),
(11, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', '', NULL),
(12, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', '', NULL),
(13, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', '', NULL),
(14, 'amarnath421', 'yrasgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Raging', 'afaf arf aefa', '', NULL),
(15, 'Amar45', 'fisa243@gmail.com', 'Male', 'MSCS', '2nd Year', 'Classes', 'fsas a f ljaflkj lafjljalafaafa afa a sd afjlaskj aljflasj asjflajs alhjfoalj asljflasj fasf afa afa af a asfas afa asfgasrf a sfa afa ar fa af a asfae afawe asfwae afawe asdfa awre aa afe awe a  aaws  a  erw asf sd  srtfwe ae  a aw ', '', NULL),
(16, 'amarnath421521', 'asgasg@gmail.com', 'Male', 'BA', '2nd Year', 'Raging', 'sdf asd fasd sdf sda asdf asdf a sfasd a asd sad sda', NULL, NULL),
(17, 'fasdfaS', 'yrasgasg@gmail.com', 'Male', 'B.com Gen', '2nd Year', 'Raging', 'fa asf a sdfa fdsaf asdf asdfa sdfa sdfa sdfas dsfa  sadf  dsaf asdafa sdsf a', NULL, NULL),
(18, 'amarnathfas', 'fisa243@gmail.com', 'Male', 'MPCS', '1st Year', 'Library', 'fas dsf ad sf sdf sf sf sa sdf ', NULL, NULL),
(19, 'fsgafawsrwe', 'asfasdfw@gmail.com', 'Male', 'MSCS', '1st Year', 'Library', 'sdf aa as', NULL, NULL),
(20, 'fsgafawsrwe', 'amarnadh51arfq341@gmail.com', 'Male', 'MPCS', '2nd Year', 'Raging', 'sdfa dsf sa asdf as sdf a', NULL, NULL),
(21, 'fasdfa sd sa', '', '', 'MPC', '1st Year', 'Library', '', NULL, NULL),
(22, 'zsxdfas', 'asgasg@gmail.com', 'Male', 'MPCS', '2nd Year', 'Raging', 'hello man wharara ', NULL, NULL),
(23, 'zsxdfas', 'asgasg@gmail.com', 'Male', 'MPCS', '2nd Year', 'Raging', 'hello man wharara ', NULL, NULL),
(24, 'jufajr', 'yrasgasg@gmail.com', 'Unknown', 'MSCS', '2nd Year', 'Raging', 'faf sdfa sdfa sdff sddf sdf a', NULL, NULL),
(25, 'amarnath', 'asga2sgFTEY@gmail.com', 'Male', 'MPC', '2nd Year', 'Classes', 'dcas asfd sadf dasf a', NULL, NULL),
(26, 'amarnath', 'asgasg@gmail.com', 'Male', 'BZC', '1st Year', 'Raging', 'sfadsf', NULL, NULL),
(27, 'amarnath', 'asgasg@gmail.com', 'Male', 'BZC', '1st Year', 'Raging', 'sfadsf', NULL, NULL),
(28, 'amarnath', 'asgasg@gmail.com', 'Male', 'BZC', '1st Year', 'Raging', 'sfadsf', NULL, NULL),
(29, 'amarnath421fsdfa', 'asga2sgFTEY@gmail.com', 'Male', 'BZC', '1st Year', 'Classes', 'fsdf sdf sdfsa sdf s sdf sdf sdf ', NULL, NULL),
(30, 'amarnath421fsdfa', 'asga2sgFTEY@gmail.com', 'Male', 'BZC', '1st Year', 'Classes', 'fsdf sdf sdfsa sdf s sdf sdf sdf ', NULL, NULL),
(31, 'luckylaxman24332@gmail.com', 'asgasg@gmail.com', 'Unknown', 'MPC', '3rd Year', 'Raging', 'zczx dsaf sdf sg sdf ', NULL, NULL),
(32, 'Amar45fsaf', 'safwseadfaws@gmail.com', 'Male', 'MSCS', '2nd Year', 'Library', 'fas sf sf a', NULL, NULL),
(33, 'luckylaxman24332@gmail.com', 'yrasgasg@gmail.com', 'Male', 'MSCS', '2nd Year', 'Lab', 'gfds sdg ', NULL, NULL),
(35, 'amarnath', 'asgasg@gmail.com', 'Male', 'MPC', '3rd Year', 'Raging', 'fsd sdf sdf ', NULL, NULL),
(37, 'amarnath', 'asgasg@gmail.com', 'Male', 'BZC', '1st Year', 'Syllabus', 'fcasdfcsa', NULL, NULL),
(38, 'sdf a', 'safd@gmail.com', 'Male', 'MSCS', '3rd Year', 'Raging', 'sadf asd f', NULL, NULL),
(39, 'amarnadh511@gmail.com', 'yrasgasg@gmail.com', 'Male', 'MSCS', '3rd Year', 'Raging', 'sgfds daf', NULL, NULL),
(40, 'Amar45', 'yrasgasg@gmail.com', 'Male', 'MSCS', '1st Year', 'Classes', 'bmvbjm ērenmnb n b  jj  ', NULL, NULL),
(41, 'amarnath', 'asgasg@gmail.com', 'Male', 'MPCS', '1st Year', 'Syllabus', '', NULL, NULL),
(42, 'amarnath', 'fisa243@gmail.com', 'Male', 'MPCS', '3rd Year', 'Library', 'gfds sdf s df sdf  sdf  sdf ', NULL, NULL),
(43, 'amarnath', 'asgasgFTEY@gmail.com', 'Female', 'BZC', '2nd Year', 'Classes', '', NULL, NULL),
(44, 'luckylaxman24332@gmail.com', 'asgasg@gmail.com', 'Male', 'MSCS', '2nd Year', 'Library', 'fa asf a af af af af a a', 'Yes', NULL),
(45, 'luckylaxman24332@gmail.com', 'yrasgasg@gmail.com', 'Male', 'MPC', '2nd Year', 'Library', 'dfa fas sdf  sfd sf adf af sadf ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'Amarnath', 'Amar@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issuedata`
--
ALTER TABLE `issuedata`
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
-- AUTO_INCREMENT for table `issuedata`
--
ALTER TABLE `issuedata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
