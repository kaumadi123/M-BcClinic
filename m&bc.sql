-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `m&bc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(100) NOT NULL,
  `to` varchar(200) NOT NULL,
  `from` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(200) NOT NULL,
  `sender_read` varchar(200) NOT NULL,
  `receiver_read` varchar(200) NOT NULL,
  `sender_deleted` varchar(200) NOT NULL,
  `receiver_deleted` varchar(200) NOT NULL,
  `file` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `to`, `from`, `message`, `time`, `sender_read`, `receiver_read`, `sender_deleted`, `receiver_deleted`, `file`) VALUES
(1, 'sanjana', 'sanjana', 'hi', '1652557195', 'yes', 'yes', 'yes', 'yes', ''),
(2, 'samila', 'sanjana', 'Hi Samila', '1652557585', 'yes', 'yes', 'yes', 'yes', ''),
(3, 'sanjana', 'samila', 'Hi sanjana', '1652557595', 'yes', 'yes', 'yes', 'yes', ''),
(4, 'sanjana', 'sanjana', 'hi', '1653068191', 'yes', 'yes', 'no', 'no', ''),
(5, 'samila', 'sanjana', 'test', '1653068241', 'yes', 'no', 'yes', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_added_files`
--

CREATE TABLE IF NOT EXISTS `chat_added_files` (
`id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `file` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_vpb_online_users`
--

CREATE TABLE IF NOT EXISTS `chat_vpb_online_users` (
`id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_vpb_online_users`
--

INSERT INTO `chat_vpb_online_users` (`id`, `username`) VALUES
(6, 'samila');

-- --------------------------------------------------------

--
-- Table structure for table `chat_vpb_users`
--

CREATE TABLE IF NOT EXISTS `chat_vpb_users` (
`id` int(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_vpb_users`
--

INSERT INTO `chat_vpb_users` (`id`, `fullname`, `username`, `password`, `photo`, `date`) VALUES
(11, 'Samila', 'samila', '81dc9bdb52d04dc20036dbd8313ed055', '', '14-05-2022'),
(10, 'Sanjana', 'sanjana', '81dc9bdb52d04dc20036dbd8313ed055', '', '14-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_center`
--

CREATE TABLE IF NOT EXISTS `clinical_center` (
  `clinic_ID` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `midwife1` varchar(15) NOT NULL,
  `midwife2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_center`
--

INSERT INTO `clinical_center` (`clinic_ID`, `name`, `division`, `midwife1`, `midwife2`) VALUES
('cl10', 'Kurana', 'Negombo', 'mdw100', 'mdw101');

-- --------------------------------------------------------

--
-- Table structure for table `doc_request`
--

CREATE TABLE IF NOT EXISTS `doc_request` (
  `request_ID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_request`
--

INSERT INTO `doc_request` (`request_ID`, `name`, `specialization`) VALUES
('1', 'Dr.Sunil Fernando', 'VOG'),
('2', 'Dr.Tharushi Liyanage', 'VOG'),
('3', 'Dr.Shashikumar Balchandra', 'VOG');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`evt_id` bigint(20) NOT NULL,
  `evt_start` datetime NOT NULL,
  `evt_end` datetime NOT NULL,
  `evt_text` text NOT NULL,
  `evt_color` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evt_id`, `evt_start`, `evt_end`, `evt_text`, `evt_color`) VALUES
(3, '2022-05-25 00:00:00', '2022-05-25 00:00:00', 'Test 2', '#e1390e'),
(4, '2022-05-11 00:00:00', '2022-05-11 00:00:00', 'test 35', '#f9ffe5'),
(6, '2022-01-05 00:00:00', '2022-01-05 00:00:00', 'dlrv', '#e4edff'),
(7, '2022-05-03 00:00:00', '2022-05-03 00:00:00', 'jfjfhf', '#e4edff'),
(8, '2022-05-04 00:00:00', '2022-05-04 00:00:00', 'qq', '#e4edff'),
(9, '2022-05-04 00:00:00', '2022-05-04 00:00:00', 'hju', '#e4edff');

-- --------------------------------------------------------

--
-- Table structure for table `lec_allocation`
--

CREATE TABLE IF NOT EXISTS `lec_allocation` (
  `l_id` int(10) NOT NULL,
  `l_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lec_allocation`
--

INSERT INTO `lec_allocation` (`l_id`, `l_name`) VALUES
(1, 'Shewon hsu'),
(2, 'Jame Burns'),
(3, 'Peter mark'),
(1, 'Shewon hsu'),
(2, 'Jame Burns'),
(3, 'Peter mark'),
(1, 'Shewon hsu'),
(1, 'Shewon hsu'),
(1, 'Shewon hsu'),
(2, 'Jame Burns'),
(3, 'Peter mark'),
(1, 'Shewon hsu'),
(2, 'Jame Burns'),
(3, 'Peter mark'),
(1, 'Shewon hsu'),
(1, 'Shewon hsu'),
(1, 'Dr.Sunil Fernando'),
(2, 'Dr.Tharushi Liyanage'),
(3, 'Dr.Shashikumar Balchandra'),
(3, 'Dr.Shashikumar Balchandra'),
(5, 'Dr.Andrew Blake'),
(1, 'Dr.Sunil Fernando'),
(1, 'Dr.Sunil Fernando');

-- --------------------------------------------------------

--
-- Table structure for table `midwife`
--

CREATE TABLE IF NOT EXISTS `midwife` (
  `midwife_ID` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `clinic_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midwife`
--

INSERT INTO `midwife` (`midwife_ID`, `name`, `division`, `clinic_ID`) VALUES
('mdw100', 'Nimeshika Fernando', 'Colombo', 'cl10'),
('mdw101', 'Anjalee Jayasinghe', 'Negombo', 'cl10'),
('mdw102', 'Hiruni Fernando', 'Gampaha', 'cl34'),
('mdw103', 'Amali Perera', 'Chilaw', 'cl41');

-- --------------------------------------------------------

--
-- Table structure for table `mother_allocation_rqst`
--

CREATE TABLE IF NOT EXISTS `mother_allocation_rqst` (
`id` int(11) NOT NULL,
  `mother_nic` varchar(15) NOT NULL,
  `alloc_date` date NOT NULL,
  `date` date NOT NULL,
  `accept_or_not` int(1) NOT NULL DEFAULT '0',
  `group_ltr` varchar(5) NOT NULL,
  `city` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_allocation_rqst`
--

INSERT INTO `mother_allocation_rqst` (`id`, `mother_nic`, `alloc_date`, `date`, `accept_or_not`, `group_ltr`, `city`) VALUES
(14, '1234', '2022-01-05', '2022-01-06', 0, 'A', 'Kandy'),
(57, '932312018', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy'),
(58, '23v', '2022-05-25', '2022-05-23', 2, 'A', 'Kandy'),
(59, '234v', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy'),
(60, '34v', '2022-05-25', '2022-05-23', 0, 'B', 'Kandy'),
(61, '34v', '2022-05-25', '2022-05-23', 0, 'B', 'Kandy'),
(62, '932312018', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy'),
(63, '23v', '2022-05-25', '2022-05-23', 1, 'A', 'Kandy'),
(64, '234v', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy'),
(65, '932312018', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy'),
(66, '23v', '2022-05-25', '2022-05-23', 2, 'A', 'Kandy'),
(67, '234v', '2022-05-25', '2022-05-23', 0, 'A', 'Kandy');

-- --------------------------------------------------------

--
-- Table structure for table `mother_register`
--

CREATE TABLE IF NOT EXISTS `mother_register` (
`sid` int(9) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `mid` varchar(10) NOT NULL,
  `moh` varchar(50) NOT NULL,
  `pregnent` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `b_name` varchar(150) DEFAULT NULL,
  `b_dateofbirth` date DEFAULT NULL,
  `group_ltr` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_register`
--

INSERT INTO `mother_register` (`sid`, `First_Name`, `Last_Name`, `userName`, `pass`, `Email_Id`, `Mobile_Number`, `Address`, `City`, `nic`, `cid`, `mid`, `moh`, `pregnent`, `province`, `b_name`, `b_dateofbirth`, `group_ltr`) VALUES
(1, 'Sanjana', 'Kaumadi', 'sanjana', '123456', 'sanjana@mail.com', 761821648, 'No 1/6, Nagahaella rd, Mawilmada, Kandy.', 'Kandy', '932312018', 'C001', 'M003', 'Negombo', 'Pregnant', 'Western', '', '0000-00-00', 'A'),
(2, 'a', 's', 'sdf', '123', 'raviamilaaa82@gmail.com', 44444444, 'sdfsdf', 'Kandy', '34v', '333', '444', 'Drawing', 'ad', 'Drawing', '', '0000-00-00', 'B'),
(3, 'q', 'w', 'sd', '12', 'raviamilaaa82@gmail.com', 44444444, 'sadasd', 'Keg', '45v', '333', '444', 'Drawing', 'ad', 'Drawing', '', '0000-00-00', 'C'),
(4, 'f', 'l', 'un', 'pw', 'raviamilaaa82@gmail.com', 444444445, 'sdfs', 'Keg', '45v', '33345', '4444', 'Drawing', 'ad', 'Drawing', '', '0000-00-00', 'A'),
(5, 'fstnn', 'lnm', 'sdd3', '12345', 'raviamilaaa82@gmail.com', 444444445, 'fsdfsd', 'Kandy', '23v', '333', '4444', 'Drawing', 'pgn', 'Others', '', '0000-00-00', 'A'),
(6, 'fg', 'hj', 'sdd34', '345', 'raviamilaaa8233@gmail.com', 2147483647, 'werwer', 'Kandy', '234v', '3334566', '444578', 'Singing', 'ad', 'Drawing', 'sdfsdf', '2022-05-11', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `stf_register`
--

CREATE TABLE IF NOT EXISTS `stf_register` (
  `userID` int(9) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stf_register`
--

INSERT INTO `stf_register` (`userID`, `fullname`, `userName`, `email`, `pass`) VALUES
(0, 'Sanjana', 'sanjana', 'sanjanakaumadi97@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list_contents`
--

CREATE TABLE IF NOT EXISTS `to_do_list_contents` (
`id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_list_contents`
--

INSERT INTO `to_do_list_contents` (`id`, `username`, `content`, `date`) VALUES
(16, '::1', 'vaccine 1', '18-05-2022'),
(17, '::1', 'clinic day', '19-05-2022'),
(18, '::1', 'test', '21-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list_mother`
--

CREATE TABLE IF NOT EXISTS `to_do_list_mother` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_list_mother`
--

INSERT INTO `to_do_list_mother` (`id`, `username`, `content`, `date`) VALUES
(0, '::1', 'gjhhjjj', '22-05-2022'),
(0, '::1', 'gjjg', '22-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `signup_date`) VALUES
(1, 'samila123', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'samila.bboys@yahoo.com', 'yes', 1428336452),
(2, 'samila', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'samila.thilakarathne@ymail.com', 'yes', 1428336835),
(3, 'samila789', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'shit15@outlook.com', 'yes', 1428337474),
(4, 'test', '1234', 'test@mail.com', 'yes', 1428336835);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `mother_nic` varchar(15) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `dose_num` int(10) NOT NULL,
  `given_date` date NOT NULL,
  `age_given` varchar(30) NOT NULL COMMENT 'at what age the vaccine should be given'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`mother_nic`, `v_name`, `dose_num`, `given_date`, `age_given`) VALUES
('1001001', 'BCG', 1, '2023-08-12', 'birth'),
('1001002', 'BCG', 1, '2023-01-20', 'birth'),
('1001004', 'BCG', 5, '0000-00-00', '1'),
('1001005', 'BCG', 5, '2022-04-04', '2'),
('1001006', 'BCG', 5, '2022-04-08', '5'),
('1001007', 'BCG', 6, '2022-04-10', '5'),
('33333v', 'dsfsdf', 2, '2022-05-11', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `chat_added_files`
--
ALTER TABLE `chat_added_files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_vpb_online_users`
--
ALTER TABLE `chat_vpb_online_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_vpb_users`
--
ALTER TABLE `chat_vpb_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_center`
--
ALTER TABLE `clinical_center`
 ADD PRIMARY KEY (`clinic_ID`);

--
-- Indexes for table `doc_request`
--
ALTER TABLE `doc_request`
 ADD PRIMARY KEY (`request_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`evt_id`), ADD KEY `evt_start` (`evt_start`), ADD KEY `evt_end` (`evt_end`);

--
-- Indexes for table `midwife`
--
ALTER TABLE `midwife`
 ADD PRIMARY KEY (`midwife_ID`);

--
-- Indexes for table `mother_allocation_rqst`
--
ALTER TABLE `mother_allocation_rqst`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `mother_register`
--
ALTER TABLE `mother_register`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `to_do_list_contents`
--
ALTER TABLE `to_do_list_contents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
 ADD PRIMARY KEY (`mother_nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `chat_added_files`
--
ALTER TABLE `chat_added_files`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat_vpb_online_users`
--
ALTER TABLE `chat_vpb_online_users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chat_vpb_users`
--
ALTER TABLE `chat_vpb_users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `evt_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mother_allocation_rqst`
--
ALTER TABLE `mother_allocation_rqst`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `mother_register`
--
ALTER TABLE `mother_register`
MODIFY `sid` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `to_do_list_contents`
--
ALTER TABLE `to_do_list_contents`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
