-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: custsql-glo03.eigbox.net
-- Generation Time: May 01, 2020 at 03:16 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `postedon` date NOT NULL,
  `enddate` date NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `jobpage` varchar(100) NOT NULL,
  `jobdescription` longtext NOT NULL,
  `jobrequirements` longtext NOT NULL,
  `manualpost` varchar(255) NOT NULL,
  `jobnotice` longtext NOT NULL,
  `createdTime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `jobtitle`, `location`, `postedon`, `enddate`, `jobtype`, `jobpage`, `jobdescription`, `jobrequirements`, `manualpost`, `jobnotice`, `createdTime`) VALUES
(17, 'Software Developer / Analyst', 'New York, USA', '2019-01-23', '2019-02-22', 'Information Technology', 'PERM JOBS', 'Analysis, design, and development of software applications using various software languages and tools. ', 'Bachelorâ€™s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with five (5) years of progressive experience in the position offered, or Masterâ€™s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with one (1) year of experience in the position offered.', 'No', '', '2020-04-30 12:34:30'),
(18, 'Software Developer / Analyst', 'New York, USA', '2019-01-23', '2019-02-06', 'Information Technology', 'PERM JOBS', 'Analysis, design, and development of software applications using various software languages and tools. ', 'Bachelorâ€™s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with five (5) years of progressive experience in the position offered, or Masterâ€™s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with one (1) year of experience in the position offered.', 'Yes', 'This notice was posted in a conspicuous place at the offices of Novisync Inc for 10 Consecutive business days, from 01/23/2019 through 02/06/2019.  This notice remained clearly visible and unobstructed during the entire period of posting.', '2020-04-30 12:34:30'),
(19, 'Software Developer / Analyst', 'NewYork, USA', '2020-01-21', '2020-02-20', 'Information Technology', 'PERM JOBS', 'Analysis, design, and development of software applications using various software languages and tools.', 'Bachelor’s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with five (5) years of progressive experience in the position offered, or Master’s degree or the foreign equivalent in Computer Science, Information Technology, Engineering, or Business, Science or related with one (1) year of experience in the position offered.\r\n', 'Yes', '', '2020-04-30 12:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `novidetails`
--

CREATE TABLE `novidetails` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `visatype` varchar(255) NOT NULL,
  `jobtype` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fileloc` varchar(255) NOT NULL,
  `createdTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `novidetails`
--

INSERT INTO `novidetails` (`id`, `firstname`, `lastname`, `email`, `visatype`, `jobtype`, `number`, `description`, `fileloc`, `createdTime`) VALUES
(7, 'Baratam', 'Sateesh', 'sateeshbaratam123@gmail.com', 'NA', 'Network and Computer Systems Adminstrator', '9010962540', 'Dear sir, i would like to interested to join your company ', 'register/Baratam-9010962540/', '2020-04-30 12:33:48'),
(8, 'Yaswanth', 'Saikiran', 'vemuri.yaswanth@gmail.com', '', 'Software Developer / Analyst', '9550406697', '', 'register/Yaswanth-9550406697/', '2020-04-30 12:33:48'),
(9, 'sergey', 'astafiev', 'astafiev2010@gmail.com', 'H1B', '', '4158513131', 'System administrator with a lot of expirience.', 'register/sergey-4158513131/Sergey Astafiev - resume.doc', '2020-04-30 12:33:48'),
(10, 'Zubair', 'Ali', 'erzubairalimech@gmail.com', 'Greencard EAD', '', '8888247457', 'Mechanical engineer.', 'register/Zubair-8888247457/new resume.pdf', '2020-04-30 12:33:48'),
(11, 'Andrew', 'Winslow', 'awinslow@pga.com', 'US Citizen', '', '2147337254', 'Experience in the golf sales industry for 16 years. PGA member, retired playing professional.', 'register/Andrew-2147337254/', '2020-04-30 12:33:48'),
(12, 'Abhishek', 'Chakraborty', 'abhishekchakraborty2@gmail.com', 'H1B', '', '7327816104', 'EMC Storage admin with 9.2 yrs experience. Working with TCS as FTE and looking for Transfer.', 'register/Abhishek-7327816104/EMC SAN - Abhishek Chakraborty.docx', '2020-04-30 12:33:48'),
(13, 'Dhananjay', 'Ambhure', 'jayambhure1@gmail.com', 'US Citizen', '', '9130301629', '', 'register/Dhananjay-9130301629/Resume-Dhananjay Ambhure.pdf', '2020-04-30 12:33:48'),
(14, 'Korukonda', 'SaiMuraliKrishna', 'muralikorukonda29@gmail.com', 'CPT', '', '9866101248', 'I had completed my graduation in the year 2018. I was looking for a software job.', 'register/Korukonda-9866101248/main resume mk.pdf', '2020-04-30 12:33:48'),
(128, 'Rambariki', 'Satyanarayana', 'satyanarayana7784@gmail.com', '', 'Administration', '6302253026', 'I can Take work responsibility when it need.', 'register/Rambariki-6302253026/Satyanarayan Resume 4.pdf', '2020-04-30 12:33:48'),
(137, 'Don', 'Villeneuve', 'donv@third-raven.com', 'OPT', 'Information Technology', '4033334153', 'I bring to the table over a decade and a half of IT leadership and technology experience.  I have contributed to the growth and success of multiple businesses through leadership of multiple teams of IT professionals, vendor, and program/business managemen', 'register/Don-4033334153/Don Villeneuve Resume_2019.pdf', '2020-04-30 12:33:48'),
(138, 'Waseem', 'Anwar', 'amwaseemanwer@gmail.com', 'CPT', 'Information Technology', '3323364315', 'Dear Sir / Madam,\r\nI am writing to apply for the above-mentioned vacancies, which may be available in the future or current needs of your company. I would like to inform you that I have more than 6 years of experience in the related field and that I am cu', 'register/Waseem-3323364315/Waseem_CV_In_PDF.pdf', '2020-04-30 12:33:48'),
(139, 'Ankush', 'Rathod', 'ankush.rathod87@gmail.com', 'OPT', 'Engineering', '9850060758', 'Sir i have send the resume of new job reason..plz accepted....', 'register/Ankush-9850060758/Ankush Rathod_Resume.docx.doc', '2020-04-30 12:33:48'),
(141, 'Adult onlinÐµ dÐ°ting Ñ€hone numbÐµrs: https://cutt.us/iqOaE', 'Adult onlinÐµ dÐ°ting Ñ€hone numbÐµrs: https://cutt.us/iqOaE', 'k.strebe@hydraulikpoint.com', 'OPT', 'Functional', '8343579429', '', '', '2020-04-30 23:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(4) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `createdTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`, `status`, `createdTime`) VALUES
(1, 'admin', 'admin@novisync.com', '7eb254d885eaed98bda5ac69d0323a1a', 'active', '2020-04-30 12:35:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novidetails`
--
ALTER TABLE `novidetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `novidetails`
--
ALTER TABLE `novidetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
