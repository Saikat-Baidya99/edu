-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 04:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `board` varchar(10) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`student_id`, `name`, `roll`, `reg`, `board`, `institute`, `photo`) VALUES
(1, 'Nayeem', '01', '00', 'Dhaka', 'CT', '8a8aab12596f13061b267e1665bbbb23.jpg'),
(2, 'Faysal', '02', '01', 'Dhaka', 'CT', '67511c006424b19c63212ccd5ff1a2d0.jpg'),
(3, 'Mazin ', '03', '02', 'Dhaka', 'CT', '6cec3bbad30e5443c31615da17067dda.jpg'),
(4, 'Farhana ', '04', '03', 'Dhaka', 'CT', '57ac7b01dafdceb17c961d8e65fcfc7c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students_results`
--

CREATE TABLE `students_results` (
  `result_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `board` varchar(10) NOT NULL,
  `ins` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `ban_m` int(3) NOT NULL,
  `ban_g` varchar(2) NOT NULL,
  `ban_gpa` float NOT NULL,
  `en_m` int(3) NOT NULL,
  `en_g` varchar(2) NOT NULL,
  `en_gpa` float NOT NULL,
  `mat_m` int(3) NOT NULL,
  `mat_g` varchar(2) NOT NULL,
  `mat_gpa` float NOT NULL,
  `s_m` int(3) NOT NULL,
  `s_g` varchar(2) NOT NULL,
  `s_gpa` float NOT NULL,
  `ss_m` int(3) NOT NULL,
  `ss_g` varchar(2) NOT NULL,
  `ss_gpa` float NOT NULL,
  `r_m` int(3) NOT NULL,
  `r_g` varchar(2) NOT NULL,
  `r_gpa` float NOT NULL,
  `tgrade` varchar(5) NOT NULL,
  `cgpa` float NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_results`
--

INSERT INTO `students_results` (`result_id`, `name`, `roll`, `reg`, `board`, `ins`, `photo`, `ban_m`, `ban_g`, `ban_gpa`, `en_m`, `en_g`, `en_gpa`, `mat_m`, `mat_g`, `mat_gpa`, `s_m`, `s_g`, `s_gpa`, `ss_m`, `ss_g`, `ss_gpa`, `r_m`, `r_g`, `r_gpa`, `tgrade`, `cgpa`, `result`) VALUES
(21, 'Mazin ', '03', '02', 'Dhaka', 'CT', '6cec3bbad30e5443c31615da17067dda.jpg', 55, 'B', 3, 66, 'A-', 3.5, 66, 'A-', 3.5, 78, 'A', 4, 90, 'A+', 5, 12, 'F', 0, 'F', 3.17, 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`admin_id`, `name`, `email`, `pass`, `status`) VALUES
(1, 'Asraful Haque', 'haq@gmail.com', '$2y$10$XXA51gyHbFiwUqffthmsBOQZ6isoL0Ij5TYYAsd4032CLPJu/w8R6', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_results`
--
ALTER TABLE `students_results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_results`
--
ALTER TABLE `students_results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
