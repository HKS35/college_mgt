-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `email`, `pass`, `date`) VALUES
(1, 'hks35', 'hemantakumarsahoo35@gmail.com', '56789', '2021-10-29 12:37:50.411683');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `roll_no` int(11) NOT NULL,
  `odia` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `pscience` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `geography` int(11) NOT NULL,
  `sanskrit` int(11) NOT NULL,
  `hindi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`roll_no`, `odia`, `english`, `pscience`, `history`, `geography`, `sanskrit`, `hindi`) VALUES
(4, 76, 87, 45, 0, 42, 98, 65),
(4, 76, 87, 45, 0, 42, 98, 65),
(4, 76, 87, 45, 0, 42, 98, 65),
(5, 76, 89, 56, 56, 65, 76, 56);

-- --------------------------------------------------------

--
-- Table structure for table `commerse`
--

CREATE TABLE `commerse` (
  `roll_no` int(11) NOT NULL,
  `odia` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `tally` int(11) NOT NULL,
  `mathematics` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `business` int(11) NOT NULL,
  `accounting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commerse`
--

INSERT INTO `commerse` (`roll_no`, `odia`, `english`, `tally`, `mathematics`, `company`, `business`, `accounting`) VALUES
(2, 45, 76, 56, 67, 45, 67, 65);

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `roll_no` int(11) NOT NULL,
  `odia` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `botany` int(11) NOT NULL,
  `zoology` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`roll_no`, `odia`, `english`, `math`, `physics`, `chemistry`, `botany`, `zoology`) VALUES
(3, 76, 76, 94, 44, 45, 45, 43);

-- --------------------------------------------------------

--
-- Table structure for table `student_add`
--

CREATE TABLE `student_add` (
  `id` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `course` varchar(16) NOT NULL,
  `gender` varchar(18) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `religion` varchar(11) NOT NULL,
  `school_name` varchar(11) NOT NULL,
  `fmark` int(11) NOT NULL,
  `amark` int(11) NOT NULL,
  `faddress` varchar(30) NOT NULL,
  `saddress` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  `sign` varchar(30) NOT NULL,
  `certificate` varchar(30) NOT NULL,
  `marksheet` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_add`
--

INSERT INTO `student_add` (`id`, `aname`, `fname`, `mname`, `email`, `mobile_no`, `catagory`, `course`, `gender`, `dob`, `religion`, `school_name`, `fmark`, `amark`, `faddress`, `saddress`, `img`, `sign`, `certificate`, `marksheet`, `date`) VALUES
(2, 'pintu', 'Lokanath Sahoo', 'Manjulata Sahoo', 'hemantakumarsahoo35@gmail.com', '7008020968', 'ST', '+2Commerse', 'Male', '1994-11-07', 'hindu', 'port school', 600, 445, 'bbsr', 'paradip', 'img/IMG-20180826-WA0000.jpg', 'img/my-sign.jpeg', 'img/SI.jpg', 'img/RESIZED POSTAL MARK FINAL.jpg', '2021-10-29 13:46:03.403730'),
(3, 'debasis', 'Lokanath Sahoo', 'Manjulata Sahoo', 'hks25@gmail.com', '7008020968', 'OBC', '+2Science', 'Male', '2021-11-11', 'muslim', 'madhymika b', 600, 455, 'paradip', 'bbsr', 'img/IMG-20180826-WA0000.jpg', 'img/CPSESIGN.jpg', 'img/SI.jpg', 'img/RESIZED POSTAL MARK FINAL.jpg', '2021-11-09 23:53:48.928673'),
(4, 'kunu sahoo', 'bhramarbar', 'sneha lata sa', 'admin@gmail.com', '7008020968', 'General', '+2Arts', 'Male', '1995-12-07', 'hindu', 'dav public ', 600, 567, 'dhenkanal', 'bbsr', 'img/IMG-20180826-WA0000.jpg', 'img/CPSESIGN.jpg', 'img/SI.jpg', 'img/RESIZED POSTAL MARK FINAL.jpg', '2021-11-10 00:05:12.323168'),
(5, 'mahesh', 'Lokanath Sahoo', 'Manjulata Sahoo', 'admin@gmail.com', '7008020968', 'OBC', '+2Arts', 'Male', '1994-11-07', 'hindu', 'port school', 600, 445, 'bbsr', 'paradip', 'img/IMG-20180826-WA0000.jpg', 'img/CPSESIGN.jpg', 'img/SI.jpg', 'img/RESIZED POSTAL MARK FINAL.jpg', '2021-11-10 09:28:26.052902');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_add`
--
ALTER TABLE `student_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_add`
--
ALTER TABLE `student_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
