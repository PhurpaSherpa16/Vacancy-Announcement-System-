-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `jobid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `jobtype` varchar(100) NOT NULL,
  `jobqualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `vechile` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `postdate` date NOT NULL,
  `jobpdffile` varchar(250) NOT NULL,
  `jobdescription` varchar(250) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `programs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`jobid`, `uid`, `jobtitle`, `jobtype`, `jobqualification`, `experience`, `position`, `vechile`, `deadline`, `postdate`, `jobpdffile`, `jobdescription`, `salary`, `programs`) VALUES
(10, 17, 'Science teacher', 'School', 'Master', '2', 'Teacher', 'No', '2019-04-24', '2019-03-20', 'Science teacher_School_jobs_full_details_UpdateByUserID_17_on_.pdf', 'Teaching', '60000', 'Education'),
(11, 15, 'PHP Developer', 'School', 'Master', '1', 'Senior Computer Teacher', 'Yes', '2019-04-24', '2019-03-23', 'PHP Developer_School_jobs_full_details.pdf', 'Typing hello world for the organization.', '80000', 'IT'),
(12, 15, 'Math Teacher', 'School', 'Master', '2', 'Teacher', 'None', '2019-05-17', '2019-04-01', 'Math Teacher_School_jobs_full_details.pdf', 'politeness', '35000', 'Education'),
(13, 15, 'Nepali', 'School', 'Higher Secondary (+2)', '2', 'teacher', 'None', '2019-05-25', '2019-04-01', 'Nepali_School_jobs_full_details.pdf', 'nepali', '15000', 'Education'),
(14, 15, 'Science Teacher', 'School', 'Bachlore', '2', 'teaching', 'None', '2019-05-23', '2019-04-01', 'Science Teacher_School_jobs_full_details_UpdateByUserID_15_JobID_.pdf', 'teaching', '100000', 'Education'),
(15, 15, 'Math', 'School', 'Master', '2', 'Teacher', 'None', '2019-05-25', '2019-04-01', 'Math_School_jobs_full_details.pdf', 'teaching', '25000', 'IT'),
(16, 15, 'Math Teacher', 'School', 'Bachlore', '2', 'Teaching', 'No', '2019-05-24', '2019-04-01', 'Math Teacher_School_jobs_full_details.pdf', 'teaching', '25000', 'Education'),
(18, 17, 'Professor', 'School', 'Master', '2', 'Teaching', 'No', '2019-05-16', '2019-04-07', 'Professor_School_jobs_full_details_PostedByUserID17_on_2019-4-7.pdf', 'teaching', '60000', 'Sociology'),
(20, 17, 'PHP', 'IT', 'Master', '2', 'Teacher', 'None', '2019-05-22', '2019-04-14', 'PHP_IT_jobs_full_details_PostedByUserID17_on_2019-4-14.pdf', 'Teacher', '30000', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `jobid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD CONSTRAINT `jobdetails_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
