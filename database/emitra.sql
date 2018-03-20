-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 05:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bsnl`
--

CREATE TABLE `bsnl` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `stdcode` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsnl`
--

INSERT INTO `bsnl` (`id`, `firstname`, `stdcode`, `telephone`, `address`, `contactno`, `problem`, `problemid`, `lastname`, `district`, `email`) VALUES
(2, 'Rajat', '0291', '0291', 'Address test1', '9166440031', 'Problem Test1', '', 'Rajdeep', '15', 'rajatrajdeep@outlook.com'),
(3, 'Rajat', '02191', '0192', 'Test', '91827', 'Test', 'BS7011', 'Rajdeep', '21', 'jangidr413@gmail.com'),
(4, 'Jayesh ', 'RAJASTHAN', 'RAJASTHAN', '31 ROOP NAGAR 2ND PAOTA C ROAD', '7597950136', 'ADSL not working', 'BS5647', 'Arora', '15', ''),
(5, 'jha', '0291', '2750936', 'JHIUH', '+917597950136', 'LJLJ', 'BS9324', 'hsdi', '21', 'jayesh.arora98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(100) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `depart`, `discription`) VALUES
(1, 'BSNL Landline/Postpaid', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(2, 'Discom Problems', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(3, 'Public Health Engineering Department', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(4, 'Road Issues', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(5, 'Swachhata', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(6, 'LPG(Gas)', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(7, 'DTH', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.'),
(8, 'E-mitra Complain', 'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.');

-- --------------------------------------------------------

--
-- Table structure for table `discom`
--

CREATE TABLE `discom` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `consumerid` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `problemid` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discom`
--

INSERT INTO `discom` (`id`, `firstname`, `consumerid`, `contactno`, `problem`, `problemid`, `address`, `lastname`, `email`, `phone`, `district`) VALUES
(1, 'Rajat', '543', '9166440031', 'Test1', '', 'Test1', 'Rajdeep', 'rajatrajdeep@outlook.com', '9166440031', '6'),
(2, 'kartik', '3ddjksa432401', '7727724430`', 'ljhk', 'DS4775', 'jhkjgkjg', 'dwivedi', 'kartikdwivedi78@gmail.com', '7727724430`', '16'),
(3, 'Rajat', '23567', '+917737724430', 'gfhfdhfhfhfh', 'DS2225', 'fsesddg', 'Rajdeep', 'r@gail.com', '+917737724430', '21');

-- --------------------------------------------------------

--
-- Table structure for table `dth`
--

CREATE TABLE `dth` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `dthno` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `serviceprovider` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dth`
--

INSERT INTO `dth` (`id`, `firstname`, `contactno`, `dthno`, `problem`, `problemid`, `serviceprovider`, `email`, `address`, `district`, `lastname`) VALUES
(1, 'Rajat', '098765', '', 'Test1', '', '', 'jangidr413@gmail.com', 'Test1', '21', 'Rajdeep'),
(2, 'Rajat', '23567', '', 'Test1', '', '', 'rajatrajdeep@outlook.com', 'Test1', '15', 'Rajdeep'),
(3, 'Rajat', '9166440031', '1234567', 'Test1', '', 'Sun Direct', 'rajatrajdeep@outlook.com', 'Test1', '21', 'Rajdeep'),
(4, '', '', '', '', '', '', '', '', '21', ''),
(5, 'Rajat', '9166440031', '9876543', 'Test2', '', 'Reliance Digital TV', 'rajatrajdeep@outlook.com', 'Test2', '21', 'Rajdeep');

-- --------------------------------------------------------

--
-- Table structure for table `emitra`
--

CREATE TABLE `emitra` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emitra`
--

INSERT INTO `emitra` (`id`, `firstname`, `lastname`, `email`, `district`, `phone`, `address`, `problemid`, `problem`) VALUES
(1, 'Rajat', 'Rajdeep', '', '21', '9166440031', 'Test1', '', 'Test1'),
(2, 'Rajat', 'Rajdeep', '', 'ALL', '9166440031', 'Test1', 'EM4567', 'Test1'),
(3, 'Rajat', 'Rajdeep', '', '21', '9166440031', 'Test1', 'EM1982', 'Test1'),
(4, 'Rajat', 'Rajdeep', '', '6', '9166440031', 'Test1', 'EM1671', 'Test1'),
(5, 'Rajat', '', '', '21', '9166440031', 'Test1', 'EM3390', 'Test1'),
(6, 'Rajat', '', '', '21', '', '', 'EM1805', ''),
(7, 'Rajat', '', '', '6', '', '', 'EM9217', ''),
(8, 'Rajat', '', '', '6', '', '', 'EM2506', ''),
(9, 'Rajat', '', '', '6', '', '', 'EM7975', ''),
(10, 'Rajat', '', '', '6', '', '', 'EM3556', ''),
(11, 'Rajat', '', '', 'ALL', '', '', 'EM8203', ''),
(12, 'Rajat', '', '', 'ALL', '', '', 'EM9889', ''),
(13, 'Rajat', '', '', 'ALL', '', '', 'EM7018', ''),
(14, 'Rjaat', '', '', 'ALL', '', '', 'EM6802', ''),
(15, 'Rjaat', '', '', 'ALL', '', '', 'EM3224', ''),
(16, 'Rjaat', '', '', 'ALL', '', '', 'EM4944', ''),
(17, 'Rjaat', '', '', 'ALL', '', '', 'EM6520', ''),
(18, 'Rjaat', '', '', 'ALL', '', '', 'EM1951', ''),
(19, 'Rjaat', '', '', 'ALL', '', '', 'EM4414', ''),
(20, 'Rajat', '', '', '21', '', '', 'EM1329', ''),
(21, '', '', '', 'ALL', '', '', 'EM4201', ''),
(22, '', '', '', 'ALL', '', '', 'EM8997', ''),
(23, 'Rajat', '', '', '21', '', '', 'EM3837', ''),
(24, 'Rajat', '', '', 'ALL', '', '', 'EM3355', ''),
(25, '', '', '', 'ALL', '', '', 'EM5902', ''),
(26, 'Rajat', '', '', '21', '', '', 'EM4252', ''),
(27, 'Rajat', '', '', '21', '', '', 'EM8397', ''),
(28, 'Rajat', '', '', '21', '', '', 'EM3920', ''),
(29, 'Rajat', '', '', '21', '', '', 'EM7851', ''),
(30, '', '', '', 'ALL', '', '', 'EM4863', ''),
(31, 'Rajat', '', '', '21', '', '', 'EM4570', ''),
(32, 'Rajat', '', '', '21', '', '', 'EM4948', ''),
(33, 'Rajat', '', '', '21', '', '', 'EM3523', ''),
(34, '', '', '', '21', '', '', 'EM6528', ''),
(35, '', '', '', 'ALL', '', '', 'EM7809', ''),
(36, 'Rajat', '', '', '21', '', '', 'EM8971', ''),
(37, 'Rajat', '', '', '21', '', '', 'EM2306', ''),
(38, 'Raja', '', '', '21', '', '', 'EM9701', ''),
(39, 'Raja', '', '', '6', '', '', 'EM4962', ''),
(40, 'Raja', '', '', '6', '', '', 'EM4986', ''),
(41, 'Raja', '', '', '6', '', '', 'EM9248', ''),
(42, 'Raja', '', '', '6', '', '', 'EM9371', ''),
(43, 'Raja', '', '', '21', '', '', 'EM1191', ''),
(44, 'Rajaaaaaaa', '', '', '21', '', '', 'EM2702', ''),
(45, 'Rajaaaaaaa', '', '', '21', '', '', 'EM1466', ''),
(46, 'Rajaaaaaaa', '', '', '21', '', '', 'EM3481', ''),
(47, 'Rajaaaaaaa', '', '', '21', '', '', 'EM6016', ''),
(48, 'Rajaaaaaaa', '', '', '21', '', '', 'EM9504', ''),
(49, 'Rajaaaaaaa', '', '', '21', '', '', 'EM8580', ''),
(50, 'Rajat', '', '', '21', '', '', 'EM9949', ''),
(51, 'Rajaaaaaaa', '', '', '21', '', '', 'EM8374', ''),
(52, 'raa', '', '', '6', '', '', 'EM5180', ''),
(53, 'Test', 'Test', '', '6', 'Test', 'Test\r\n\r\n', 'EM3585', 'Test'),
(54, 'Test', 'Test', '', '6', '9166440031', 'Test\r\n\r\n', 'EM9687', 'Test'),
(55, 'Rajat', 'Rajdeep', '', '28', '9166440031', 'Test1', 'EM1371', 'Test1'),
(56, 'Rajat', 'Rajdeep', '', '28', '9166440031', 'Test1', 'EM6584', 'Test1'),
(57, 'Rajat', 'Rajdeep', '', '28', '9166440031', 'Test1', 'EM4781', 'Test1'),
(58, 'Rajat', 'R', '', '6', '7597950136', 'Test', 'EM8344', 'Test'),
(59, 'Rajat', 'Rajdeep', '', '6', '9166440031', 'Test1', 'EM5232', 'Test1'),
(60, 'Rajat', 'Rajdeep', '', '6', '+919166440031', 'Test1', 'EM8324', 'Test1'),
(61, 'Rajat', 'Rajdeep', '', '6', '+917597950136', 'Test1', 'EM8512', 'Test1'),
(62, 'Rajat', 'Rajdeep', '', '6', '+917597950136', 'Test1', 'EM7104', 'Test1'),
(63, 'Rajat', 'Rajdeep', '', '6', '+917737724430', 'Test1', 'EM6555', 'Test1'),
(64, 'swaroop', 'singh`', '', '15', '+919166440031', 'teadfkokf', 'EM4432', 'why?');

-- --------------------------------------------------------

--
-- Table structure for table `lpg`
--

CREATE TABLE `lpg` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `serviceprovider` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpg`
--

INSERT INTO `lpg` (`id`, `firstname`, `problemid`, `problem`, `serviceprovider`, `contactno`, `address`, `lastname`, `district`) VALUES
(1, 'Rajat', '', 'Test1', '', '9166440031', 'Test1', 'Rajdeep', 'ALL'),
(2, 'Rajat', '', 'test1', 'Bharat', '9166440031', 'teat1', 'Rajdeep', '21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phed`
--

CREATE TABLE `phed` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phed`
--

INSERT INTO `phed` (`id`, `firstname`, `problemid`, `problem`, `address`, `contactno`, `district`, `lastname`) VALUES
(1, 'Rajat', '', '', '', '', 'ALL', 'r'),
(2, 'fhthhfhthh', 'PH6167', 'fhthhfhthhfhthh', 'fhthhfhthhfhthh', '8675453534', 'ALL', 'fhthh'),
(3, 'fhthhfhthh', 'PH3290', 'fhthhfhthhfhthh', 'fhthhfhthhfhthh', '8675453534', 'ALL', 'fhthh');

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`id`, `firstname`, `contactno`, `district`, `address`, `problemid`, `problem`, `image`, `lastname`, `email`) VALUES
(1, '', '', '21', '', '', '', 'uploads/1521266404.png', '', ''),
(2, '', '', '21', '', '', '', 'uploads/1521266432.png', '', ''),
(3, '', '', '21', '', '', '', 'uploads/1521266547.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `swachta`
--

CREATE TABLE `swachta` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `problemid` varchar(100) NOT NULL,
  `email` int(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swachta`
--

INSERT INTO `swachta` (`id`, `firstname`, `contactno`, `district`, `address`, `image`, `problem`, `problemid`, `email`, `lastname`) VALUES
(1, '', '', '21', 'Test3', 'uploads/1521268304.png', '', 'SW414', 0, ''),
(2, 'Test5', '9166440031', '21', 'Test5', 'uploads/1521315689.png', 'Test5', 'SW5762', 0, 'Test5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `date`, `phone`, `district`, `gender`, `password`) VALUES
(2, 'Rajat', 'Rajdeep', 'rajatrajdeep@outlook.com', '03/17/1999', '9166440031', '15', 'Male', 'admin'),
(3, 'Rajat', 'Rajdeep', 'jangidr413@gmail.com', '03/17/1999', '9166440031', '15', 'Male', 'admin'),
(4, 'raa', 's', 'jangidr413@gmail.com', 's', 's', '31', 'Male', 'admin'),
(5, 'Rajat', 'Rajdeep', 'jangidr413@gmail.com', '17/03/1999', 'w', '21', '', 'admin'),
(6, '', '', '', '', '', '21', 'Female', ''),
(7, 'd', 't', 'r@gmail.com', '', '54', '21', 'Male', 'admin'),
(8, '', '', '', '', '', '6', 'Male', ''),
(9, '', '', '', '', '', '21', 'Male', ''),
(10, '', '', '', '', '', '6', 'Female', ''),
(11, '', '', '', '', '', '6', 'Male', ''),
(12, '', '', '', '', '', '28', 'Male', ''),
(13, '', '', '', '', '', '21', 'Male', ''),
(14, '', '', '', '', '', '21', 'Male', ''),
(15, '', '', '', '', '', '28', 'Male', ''),
(16, '', '', '', '', '', '6', 'Male', ''),
(17, 'Rajat', '', '', '', '', '21', 'Male', ''),
(18, '', '', '', '', '', '21', 'Male', ''),
(19, '', '', '', '', '', '21', 'Male', ''),
(20, '', '', '', '', '', '21', 'Male', ''),
(21, '', '', '', '', '', '21', 'Male', ''),
(22, '', '', '', '', '', '21', 'Male', ''),
(23, '', '', '', '', '', '21', 'Male', ''),
(24, '', '', '', '', '', '6', 'Male', ''),
(25, '', '', '', '', '', 'ALL', 'Male', ''),
(26, '', '', '', '', '', '21', 'Male', ''),
(27, '', '', '', '', '', '21', 'Male', ''),
(28, '', '', '', '', '', '21', 'Male', ''),
(29, '', '', '', '', '', '21', 'Male', ''),
(30, '', '', '', '', '', '21', 'Male', ''),
(31, '', '', '', '', '', '21', 'Male', ''),
(32, '', '', '', '', '', '21', 'Male', ''),
(33, '', '', '', '', '', '21', 'Male', ''),
(34, '', '', '', '', '', '6', 'Male', ''),
(35, 'r', '', '', '', '', '21', 'Male', ''),
(36, '', '', '', '', '', '6', 'Male', ''),
(37, '', '', '', '', '', '21', 'Male', ''),
(38, '', '', '', '', '', '6', 'Male', ''),
(39, '', '', '', '', '', '21', 'Male', ''),
(40, '', '', '', '', '', '21', 'Male', ''),
(41, '', '', '', '', '', '6', 'Male', ''),
(42, '', '', '', '', '', '21', 'Male', ''),
(43, '', '', '', '', '', '21', 'Male', ''),
(44, 'Rajat', 'Rajdeep', 'jangidr413@gmail.com', '98765', '76', '21', 'Male', '12345'),
(45, 'Jayesh', 'Arora', 'jayesh.arora98@gmail.com', '07/08/1998', '7597950136', '15', 'Male', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsnl`
--
ALTER TABLE `bsnl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discom`
--
ALTER TABLE `discom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dth`
--
ALTER TABLE `dth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emitra`
--
ALTER TABLE `emitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpg`
--
ALTER TABLE `lpg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phed`
--
ALTER TABLE `phed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swachta`
--
ALTER TABLE `swachta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bsnl`
--
ALTER TABLE `bsnl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discom`
--
ALTER TABLE `discom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dth`
--
ALTER TABLE `dth`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emitra`
--
ALTER TABLE `emitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `lpg`
--
ALTER TABLE `lpg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phed`
--
ALTER TABLE `phed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `road`
--
ALTER TABLE `road`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `swachta`
--
ALTER TABLE `swachta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
