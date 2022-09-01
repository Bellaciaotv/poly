-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 01:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fedpolyado`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `id` int(11) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `school` varchar(200) NOT NULL,
  `course_of_study` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`id`, `programme`, `school`, `course_of_study`) VALUES
(1, 'ND FULL TIME', 'SCHOOL OF AGRICULTURE AND AGRICULTURAL TECHNOLOGY', 'MICROBIOLOY');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `state_of_origin` varchar(50) NOT NULL,
  `local_government` varchar(50) NOT NULL,
  `home_town` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `street_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `surname`, `firstname`, `othername`, `sex`, `date_of_birth`, `state_of_origin`, `local_government`, `home_town`, `phone_no`, `email`, `religion`, `street_address`) VALUES
(3, 'Adeleye', 'Ayo', 'Tope', 'Male', '2005-05-02 00:00:00', 'Abia', 'Ikole-Ekiti', 'Aba', '08032661166', 'emmanuelayo402@gmail.com', 'Christianity', 'Omisanjana Ado ekiti');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `jamb_matric_no` varchar(20) CHARACTER SET utf16 NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `jamb_matric_no`, `filename`) VALUES
(9, '', 'passport.jpg'),
(8, '', 'passport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `next_of_kin`
--

INSERT INTO `next_of_kin` (`id`, `name`, `address`, `relationship`, `phone_no`) VALUES
(2, 'Adeleke David Segun', 'Omisanjana, Ado Ekiti', 'SISTER', '08032661166'),
(3, 'Adeleke David Segun', 'Omisanjana, Ado Ekiti', 'SISTER', '08032661166');

-- --------------------------------------------------------

--
-- Table structure for table `olevel_first_sitting`
--

CREATE TABLE `olevel_first_sitting` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `exam_no` varchar(20) NOT NULL,
  `exam_year` year(4) NOT NULL,
  `scratch_card_pin` varchar(20) NOT NULL,
  `scratch_card_serial_no` varchar(20) NOT NULL,
  `subject_1` varchar(50) NOT NULL,
  `grade_1` varchar(10) NOT NULL,
  `subject_2` varchar(50) NOT NULL,
  `grade_2` varchar(10) NOT NULL,
  `subject_3` varchar(50) NOT NULL,
  `grade_3` varchar(10) NOT NULL,
  `subject_4` varchar(50) NOT NULL,
  `grade_4` varchar(10) NOT NULL,
  `subject_5` varchar(50) NOT NULL,
  `grade_5` varchar(10) NOT NULL,
  `subject_6` varchar(50) NOT NULL,
  `grade_6` varchar(10) NOT NULL,
  `subject_7` varchar(50) NOT NULL,
  `grade_7` varchar(10) NOT NULL,
  `subject_8` varchar(50) NOT NULL,
  `grade_8` varchar(10) NOT NULL,
  `subject_9` varchar(50) NOT NULL,
  `grade_9` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `olevel_second_sitting`
--

CREATE TABLE `olevel_second_sitting` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `exam_no` varchar(20) NOT NULL,
  `exam_year` year(4) NOT NULL,
  `scratch_card_pin` varchar(20) NOT NULL,
  `scratch_card_serial_no` varchar(20) NOT NULL,
  `subject_1` varchar(50) NOT NULL,
  `grade_1` varchar(10) NOT NULL,
  `subject_2` varchar(50) NOT NULL,
  `grade_2` varchar(10) NOT NULL,
  `subject_3` varchar(50) NOT NULL,
  `grade_3` varchar(10) NOT NULL,
  `subjectv4` varchar(50) NOT NULL,
  `gradev4` varchar(10) NOT NULL,
  `subject_5` varchar(50) NOT NULL,
  `grade_5` varchar(10) NOT NULL,
  `subject_6` varchar(50) NOT NULL,
  `grade_6` varchar(10) NOT NULL,
  `subject_7` varchar(50) NOT NULL,
  `grade_7` varchar(10) NOT NULL,
  `subject_8` varchar(50) NOT NULL,
  `grade_8` varchar(10) NOT NULL,
  `subject_9` varchar(50) NOT NULL,
  `grade_9` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `jamb_matric_no` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_id`, `jamb_matric_no`, `password`, `confirm_password`, `time`) VALUES
(8, 2001365987, '20598678AF', '08104175959', '08104175959', '2022-08-18 16:48:57'),
(9, 78402854906281338, '20598678AF', '12345', '12345', '2022-08-22 09:30:57'),
(10, 191555, '20221458AF', 'password', 'password', '2022-08-22 11:06:19'),
(11, 85882647180, 'MCB/2020/1048', 'aaaaa', 'aaaaa', '2022-08-22 13:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `utme_details`
--

CREATE TABLE `utme_details` (
  `id` int(11) NOT NULL,
  `jamb_reg_no` varchar(20) NOT NULL,
  `jamb_score` varchar(10) NOT NULL,
  `choice` varchar(50) NOT NULL,
  `first_subject` varchar(50) NOT NULL,
  `score_1` varchar(10) NOT NULL,
  `second_subject` varchar(50) NOT NULL,
  `score_2` varchar(10) NOT NULL,
  `third_subject` varchar(50) NOT NULL,
  `score_3` varchar(10) NOT NULL,
  `fourth_subject` varchar(50) NOT NULL,
  `score_4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utme_details`
--

INSERT INTO `utme_details` (`id`, `jamb_reg_no`, `jamb_score`, `choice`, `first_subject`, `score_1`, `second_subject`, `score_2`, `third_subject`, `score_3`, `fourth_subject`, `score_4`) VALUES
(1, '20598678AF', '', 'FIRST', 'ENGLISH LANGUAGE', '50', 'BIOLOGY', '100', 'CHEMISTRY', '100', '', '50'),
(2, '20220457AD', '', 'FIRST', 'ENGLISH LANGUAGE', '50', 'BIOLOGY', '50', 'CHEMISTRY', '75', 'PHYSICS', '75'),
(3, '20221245AG', '295', 'FIRST', 'ENGLISH LANGUAGE', '95', 'BIOLOGY', '57', 'PHYSICS', '50', 'CHEMISTRY', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olevel_first_sitting`
--
ALTER TABLE `olevel_first_sitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olevel_second_sitting`
--
ALTER TABLE `olevel_second_sitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utme_details`
--
ALTER TABLE `utme_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `olevel_first_sitting`
--
ALTER TABLE `olevel_first_sitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olevel_second_sitting`
--
ALTER TABLE `olevel_second_sitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `utme_details`
--
ALTER TABLE `utme_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
