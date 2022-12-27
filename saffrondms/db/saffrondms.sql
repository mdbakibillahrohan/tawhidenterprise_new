-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 06:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saffrondms`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents_file_details`
--

CREATE TABLE `documents_file_details` (
  `fileID` int(11) NOT NULL,
  `file_name` varchar(150) DEFAULT NULL,
  `file_format` varchar(10) DEFAULT NULL,
  `file_categories` varchar(100) DEFAULT NULL,
  `file_details` varchar(255) DEFAULT NULL,
  `file_rule` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents_file_details`
--

INSERT INTO `documents_file_details` (`fileID`, `file_name`, `file_format`, `file_categories`, `file_details`, `file_rule`) VALUES
(1, 'test file', 'JPG', 'Office Documents', NULL, 'Admin'),
(2, 'Helal Uddin', 'PNG', 'Unofficial Documents', NULL, 'Local User'),
(3, 'test file', 'PNG', 'Office Documents', NULL, 'Administration'),
(4, 'test file', 'PNG', 'Office Documents', NULL, 'Administration'),
(5, '', 'Default se', 'Select Categorie', NULL, 'Administration'),
(6, 'sdfsd', 'Default se', 'Select Categorie', NULL, 'Administration'),
(7, 'adsd', 'Default se', 'Select Categorie', NULL, 'Administration'),
(8, 'asdasd', 'JPG', 'Office Documents', NULL, 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `documents_folder_details`
--

CREATE TABLE `documents_folder_details` (
  `folderID` int(11) NOT NULL,
  `folder_name` varchar(150) DEFAULT NULL,
  `folder_categories` varchar(100) DEFAULT NULL,
  `folder_details` varchar(255) DEFAULT NULL,
  `folder_rule` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents_folder_details`
--

INSERT INTO `documents_folder_details` (`folderID`, `folder_name`, `folder_categories`, `folder_details`, `folder_rule`) VALUES
(1, 'Afeef', 'Unofficial Documents', NULL, 'Administration'),
(2, 'Boishakhi', 'Others Documents', NULL, 'Local User'),
(3, '', '', NULL, ''),
(4, 'BD Tender', 'Others Documents', NULL, 'Local User'),
(5, 'BD Tender', 'Others Documents', NULL, 'Local User'),
(6, 'BD Tender', 'Others Documents', NULL, 'Local User'),
(7, 'Helal', 'Office Documents', NULL, 'Administration'),
(8, 'Helal', 'Office Documents', NULL, 'Administration'),
(9, 'Helal', 'Office Documents', NULL, 'Administration'),
(10, 'sdfdsf', 'Office Documents', NULL, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `infopdf`
--

CREATE TABLE `infopdf` (
  `fileid` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `directory` varchar(150) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infopdf`
--

INSERT INTO `infopdf` (`fileid`, `filename`, `directory`, `created_date`) VALUES
(1, 'etp.pdf', '/file uploads/', '2019-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(50) NOT NULL,
  `msg_sender_name` varchar(100) NOT NULL,
  `msg_reciever_name` varchar(100) NOT NULL,
  `msg_sender_email` varchar(50) NOT NULL,
  `msg_reciever_email` varchar(50) NOT NULL,
  `msg_subject` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `userID` int(11) NOT NULL,
  `fullname_eng` varchar(100) DEFAULT NULL,
  `fullname_bng` varchar(100) DEFAULT NULL,
  `fathersname_eng` varchar(100) DEFAULT NULL,
  `fathersname_bng` varchar(100) DEFAULT NULL,
  `mothersname_eng` varchar(100) DEFAULT NULL,
  `mothersname_bng` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `nid_number` int(30) DEFAULT NULL,
  `birth_certificate_no` int(30) DEFAULT NULL,
  `passport_no` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `user_mobile` int(20) DEFAULT NULL,
  `user_other_number` int(20) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `UserAuthKey` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userpic_title` varchar(50) DEFAULT NULL,
  `userpic_directory` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`userID`, `fullname_eng`, `fullname_bng`, `fathersname_eng`, `fathersname_bng`, `mothersname_eng`, `mothersname_bng`, `date_of_birth`, `nid_number`, `birth_certificate_no`, `passport_no`, `gender`, `religion`, `blood_group`, `marital_status`, `useremail`, `user_mobile`, `user_other_number`, `username`, `UserAuthKey`, `password`, `userpic_title`, `userpic_directory`) VALUES
(44, 'Helal Uddin', 'Helal Uddin', 'Abu Taher', 'Abu Taher', 'Afroza Begum', 'Afroza Begum', '12-02-1991', 2147483647, 2147483647, 'EF0334491', 'Male', 'Islam', 'B+', 'Married', 'root@outlook.com', 1872772313, 98766654, 'root', 'a72404860c2ae2183b09954b05aa2f07', 'b48bf6b999f95ce8cc77a7a6cc4a12ae', 'helal.png', 'img/users');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `username`, `password`) VALUES
(1, 'helal', '1234'),
(10, 'admin', 'dfsdf'),
(11, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents_file_details`
--
ALTER TABLE `documents_file_details`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `documents_folder_details`
--
ALTER TABLE `documents_folder_details`
  ADD PRIMARY KEY (`folderID`);

--
-- Indexes for table `infopdf`
--
ALTER TABLE `infopdf`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents_file_details`
--
ALTER TABLE `documents_file_details`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `documents_folder_details`
--
ALTER TABLE `documents_folder_details`
  MODIFY `folderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `infopdf`
--
ALTER TABLE `infopdf`
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
