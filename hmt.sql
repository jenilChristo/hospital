-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 09:40 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `ortho-dnvd`
--

CREATE TABLE `ortho-dnvd` (
  `id` bigint(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `x_ray_name` varchar(225) NOT NULL,
  `finding` text NOT NULL,
  `x_ray_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ortho-history-info`
--

CREATE TABLE `ortho-history-info` (
  `id` bigint(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `brief_history` varchar(100) NOT NULL,
  `head_injury` varchar(100) NOT NULL,
  `past_history` varchar(100) NOT NULL,
  `drug_history` text NOT NULL,
  `ho_allergy` text NOT NULL,
  `personal_history` varchar(100) NOT NULL,
  `airways` varchar(100) NOT NULL,
  `breathing_rate` varchar(50) NOT NULL,
  `breating_type` varchar(200) NOT NULL,
  `c_pr` varchar(50) NOT NULL,
  `c_rhythm` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `bp_hg` varchar(100) NOT NULL,
  `higher_functions` text NOT NULL,
  `orientation` varchar(50) NOT NULL,
  `external_injury` text NOT NULL,
  `daoc` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortho-history-info`
--

INSERT INTO `ortho-history-info` (`id`, `patient_id`, `brief_history`, `head_injury`, `past_history`, `drug_history`, `ho_allergy`, `personal_history`, `airways`, `breathing_rate`, `breating_type`, `c_pr`, `c_rhythm`, `bp`, `bp_hg`, `higher_functions`, `orientation`, `external_injury`, `daoc`, `timestamp`) VALUES
(6, 'PT_5b09482428bce', 'RTA', 'ENT Bleed', 'TB', '', '', 'Smoking', 'Blocked', '', 'Abdominal', '', 'Irregular', '', '(L)', 'Semiconscious', 'Yes', '', '2', '2018-05-27 08:43:13'),
(7, 'PT_5b0ac52d1b4ab', 'ASSAULT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '2018-05-27 16:58:57'),
(9, 'PT_5b0af65b51eb8', 'specf', 'ENT Bleed', 'SHT', 'ddrug', 'ho', 'Alcohol', 'Blocked', '12', 'other', '132', 'Irregular', '123', '(L)', 'Conscious', 'Yes', 'injury', '1', '2018-05-27 18:20:59'),
(10, 'PT_5b0b7a78547f6', 'ASSAULT', 'LOC', 'DM', 'ddrug', 'ho', 'Alcohol', 'Clear', '12', 'Abdomino Thoracic', '132', 'Regular', '123', '(R) UL', 'Conscious', 'Yes', 'testing', '2', '2018-05-28 03:44:25'),
(11, 'PT_5b0b89a7a4626', 'other', 'LOC', 'DM', 'ddrug', 'ho', 'Alcohol', 'Clear', '60', 'other type', '132', 'Regular', '123', '(R) UL', 'Conscious', 'Yes', 'external inju', '2', '2018-05-28 04:55:46'),
(12, '<br />\r\n<b>Notice</b>:  Undefined variable: id in <b>C:\\xampp\\htdocs\\hmt\\scan-report.php</b> on line <b>193</b><br />\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '2018-06-22 09:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `ortho-history-info-2`
--

CREATE TABLE `ortho-history-info-2` (
  `id` bigint(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `brain` varchar(200) NOT NULL,
  `perl` varchar(100) NOT NULL,
  `cervical_spine` varchar(50) NOT NULL,
  `spine` varchar(5) NOT NULL,
  `deformity_level` varchar(50) NOT NULL,
  `tenderness_level` varchar(50) NOT NULL,
  `sensory_level` varchar(50) NOT NULL,
  `motor_level` varchar(50) NOT NULL,
  `provisional_diagnosis` text NOT NULL,
  `bladder` varchar(50) NOT NULL,
  `bowel` varchar(50) NOT NULL,
  `cvs` varchar(50) NOT NULL,
  `added_sounds` varchar(50) NOT NULL,
  `rs` varchar(100) NOT NULL,
  `chest_compression` varchar(50) NOT NULL,
  `abdomen` varchar(100) NOT NULL,
  `ab_sound` varchar(50) NOT NULL,
  `pelvis` varchar(100) NOT NULL,
  `peripheral_pulse` varchar(200) NOT NULL,
  `limb_examination` text NOT NULL,
  `entered_by` varchar(200) NOT NULL,
  `final_diagnosis` text NOT NULL,
  `plan` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortho-history-info-2`
--

INSERT INTO `ortho-history-info-2` (`id`, `patient_id`, `brain`, `perl`, `cervical_spine`, `spine`, `deformity_level`, `tenderness_level`, `sensory_level`, `motor_level`, `provisional_diagnosis`, `bladder`, `bowel`, `cvs`, `added_sounds`, `rs`, `chest_compression`, `abdomen`, `ab_sound`, `pelvis`, `peripheral_pulse`, `limb_examination`, `entered_by`, `final_diagnosis`, `plan`, `timestamp`) VALUES
(0, '<br />\r\n<b>Notice</b>:  Undefined variable: id in <b>C:\\xampp\\htdocs\\hmt\\scan-report.php</b> on line <b>193</b><br />\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sobin', '', '', '2018-06-22 09:45:39'),
(0, 'PT_5b09482428bce', '', 'Yes', 'No', 'Yes', 'C1', 'C1', 'C1', 'C1', '', 'Bowel Control', 'Bowel Control', 'S1', 'No', 'AEBE', 'No', 'Tense', 'No', 'PCT', '', '', 'jerry', '', '', '2018-05-27 08:43:13'),
(0, 'PT_5b0ac52d1b4ab', '', '', '', '', 'C1', 'C1', 'C1', 'C1', '', '', '', '', '', '', '', '', '', '', '', '', 'jerry', '', '', '2018-05-27 16:58:57'),
(0, 'PT_5b0af65b51eb8', 'brain', 'No', 'Yes', '', 'C6', 'T8', 'T1', 'C6', 'test', 'Bowel Control', 'Bowel Control', 'NS2', 'No', 'VBS', 'chest', 'Tenderness', 'Yes', 'PDT', 'testfvc', 'limb', 'jerry', 'test', 'test', '2018-05-27 18:20:59'),
(0, 'PT_5b0b7a78547f6', 'brain', 'No', 'Yes', '', 'C1', 'C1', 'C1', 'C1', 'test', 'Bowel Control', 'Bowel Control', 'S1', 'extra sound', 'AEBE', 'No', 'Soft', 'Yes', 'PCT', 'testfvc', 'limb', 'jerry', 'test', 'test', '2018-05-28 03:44:25'),
(0, 'PT_5b0b89a7a4626', 'brain', 'Yes', 'Yes', '', 'C1', 'C1', 'C4', 'C1', 'test', 'Bowel Control', 'Bowel Control', 'S1', 'No', 'VBS', 'No', 'Soft', 'Yes', 'PDT', 'per-test', 'limb-test', 'jerry', 'test', 'test', '2018-05-28 04:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` bigint(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `patient_name` varchar(225) NOT NULL,
  `pin_no` varchar(225) NOT NULL,
  `ip_no` varchar(225) NOT NULL,
  `age` varchar(150) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `doa` date NOT NULL,
  `doi` date NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `chief` varchar(150) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `daos` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entered_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `patient_id`, `patient_name`, `pin_no`, `ip_no`, `age`, `sex`, `doa`, `doi`, `phone`, `address`, `chief`, `unit`, `daos`, `timestamp`, `entered_by`) VALUES
(3, 'orth_1548786546', 'testing', 'test pin', 'test ip', '24', 'male', '2018-05-17', '0000-00-00', '7418529632', '', 'Testing chief', 'Unit 4', '2', '2018-05-20 13:16:17', 'jerry'),
(4, 'orth_674817995', 'Sobin', 'test pin', 'test ip', '24', 'male', '0000-00-00', '0000-00-00', '7418529632', '12-2, PUTHUVAL KARAIKADU, MATHOORKONAM,\r\nARUMANAI P.O, KANYAKUMARI, TAMILNADU', 'Testing chief', 'Unit 4', '2', '2018-05-20 13:17:17', 'jerry'),
(5, 'PT_5b09482428bce', 'Sunil', '852741', '741852', '25', 'male', '0000-00-00', '0000-00-00', '741852963', 'kuzhithurai', 'Testing chief', 'Unit 1', '1', '2018-05-26 11:42:28', 'Chief'),
(6, 'PT_5b0abb6a7ece6', 'testing', '7418596', '74185296', '25', 'male', '1970-01-01', '1970-01-01', '84954165', 'testing', 'Testing chief', 'Unit 3', '2', '2018-05-27 14:06:34', 'jerry'),
(7, 'PT_5b0abd688a70b', 'testing', '7418596', '74185296', '25', 'male', '2018-05-23', '2018-05-14', '84954165', 'testing', 'Testing chief', 'Unit 3', '2', '2018-05-27 14:15:04', 'jerry'),
(8, 'PT_5b0ac52d1b4ab', 'testing', '629151', '254872', '24', 'male', '2018-05-15', '2018-05-14', '8148025194', '12-2, PUTHUVAL KARAIKADU, MATHOORKONAM,\r\nARUMANAI P.O, KANYAKUMARI, TAMILNADU', 'Testing chief', 'Unit 4', '2', '2018-05-27 14:48:13', 'jerry'),
(9, 'PT_5b0af65b51eb8', 'testing', '629151', '741852123', '24', 'male', '2018-05-15', '2018-05-16', '8148025194', '12-2, PUTHUVAL KARAIKADU, MATHOORKONAM,\r\nARUMANAI P.O, KANYAKUMARI, TAMILNADU', 'Testing chief', 'Unit 2', '1', '2018-05-27 18:18:03', 'Chief'),
(10, 'PT_5b0b7a78547f6', 'Sobin', '852741', '741852', '24', 'male', '2018-05-28', '2018-05-10', '8148025194', 'testing', 'Testing chief', 'Unit 4', '2', '2018-05-28 03:41:44', 'jerry'),
(11, 'PT_5b0b89a7a4626', 'testing23', '629151', '741852', '25', 'male', '2018-05-23', '2018-05-22', '741856', '12-2, PUTHUVAL KARAIKADU, MATHOORKONAM,\r\nARUMANAI P.O, KANYAKUMARI, TAMILNADU', 'Testing chief', 'Unit 3', '2', '2018-05-28 04:46:31', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` bigint(225) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `department` varchar(150) NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `user_type` int(3) NOT NULL COMMENT '0-normal 1-admin',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `username`, `password`, `name`, `email`, `phone`, `department`, `speciality`, `user_type`, `timestamp`) VALUES
(1, 'admin_01', '21232f297a57a5a743894a0e4a801fc3', 'Chief', 'admin@admin.admin', '8148025194', 'Orthopaedics', 'Ortho', 1, '2018-05-20 10:57:50'),
(2, 'jmsobin', 'fbafaec35b73f3638b658d4b59cd4941', 'Sobin', 'jmsobin@gmail.com', '8148025194', 'orthopaedics', 'Data Entry', 0, '2018-05-20 11:51:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ortho-history-info`
--
ALTER TABLE `ortho-history-info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indexes for table `ortho-history-info-2`
--
ALTER TABLE `ortho-history-info-2`
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ortho-history-info`
--
ALTER TABLE `ortho-history-info`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
