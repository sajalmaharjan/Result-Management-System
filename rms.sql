-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 01:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade1`
--

CREATE TABLE `grade1` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade1`
--

INSERT INTO `grade1` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:18 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade2`
--

CREATE TABLE `grade2` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade2`
--

INSERT INTO `grade2` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:34 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade3`
--

CREATE TABLE `grade3` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade3`
--

INSERT INTO `grade3` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:38 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade4`
--

CREATE TABLE `grade4` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade4`
--

INSERT INTO `grade4` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:43 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade5`
--

CREATE TABLE `grade5` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade5`
--

INSERT INTO `grade5` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:46 AM', '2018/09/07 21:25:45 PM', 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 50, 100, 'English', 50, 100, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, NULL, NULL, NULL),
(2, '2018/09/07 21:23:32 PM', NULL, 2018, 'Female', '5', '', 9, 'Nisha', 'Basnet', 'Final', NULL, NULL, 90, NULL, NULL, 80, NULL, NULL, 85, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade6`
--

CREATE TABLE `grade6` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade6`
--

INSERT INTO `grade6` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:49 AM', '', 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade7`
--

CREATE TABLE `grade7` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade7`
--

INSERT INTO `grade7` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:53 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade8`
--

CREATE TABLE `grade8` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade8`
--

INSERT INTO `grade8` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:57:56 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade9`
--

CREATE TABLE `grade9` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade9`
--

INSERT INTO `grade9` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 14:05:09 PM', '2018/09/06 14:06:20 PM', 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, 'math', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade10`
--

CREATE TABLE `grade10` (
  `id` int(250) NOT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL,
  `year` int(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `section` varchar(250) DEFAULT NULL,
  `rollno` int(250) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `term` varchar(250) DEFAULT NULL,
  `display` varchar(250) DEFAULT NULL,
  `sub1` varchar(250) DEFAULT NULL,
  `sub1pass` int(250) DEFAULT NULL,
  `sub1full` int(250) DEFAULT NULL,
  `sub2` varchar(250) DEFAULT NULL,
  `sub2pass` int(250) DEFAULT NULL,
  `sub2full` int(250) DEFAULT NULL,
  `sub3` varchar(250) DEFAULT NULL,
  `sub3pass` int(250) DEFAULT NULL,
  `sub3full` int(250) DEFAULT NULL,
  `sub4` varchar(250) DEFAULT NULL,
  `sub4pass` int(250) DEFAULT NULL,
  `sub4full` int(250) DEFAULT NULL,
  `sub5` varchar(250) DEFAULT NULL,
  `sub5pass` int(250) DEFAULT NULL,
  `sub5full` int(250) DEFAULT NULL,
  `sub6` varchar(250) DEFAULT NULL,
  `sub6pass` int(250) DEFAULT NULL,
  `sub6full` int(250) DEFAULT NULL,
  `sub7` varchar(250) DEFAULT NULL,
  `sub7pass` int(250) DEFAULT NULL,
  `sub7full` int(250) DEFAULT NULL,
  `sub8` varchar(250) DEFAULT NULL,
  `sub8pass` int(250) DEFAULT NULL,
  `sub8full` int(250) DEFAULT NULL,
  `sub9` varchar(250) DEFAULT NULL,
  `sub9pass` int(250) DEFAULT NULL,
  `sub9full` int(250) DEFAULT NULL,
  `sub10` varchar(250) DEFAULT NULL,
  `sub10pass` int(250) DEFAULT NULL,
  `sub10full` int(250) DEFAULT NULL,
  `sub11` varchar(250) DEFAULT NULL,
  `sub11pass` int(250) DEFAULT NULL,
  `sub11full` int(250) DEFAULT NULL,
  `sub12` varchar(250) DEFAULT NULL,
  `sub12pass` int(250) DEFAULT NULL,
  `sub12full` int(250) DEFAULT NULL,
  `sub13` varchar(250) DEFAULT NULL,
  `sub13pass` int(250) DEFAULT NULL,
  `sub13full` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade10`
--

INSERT INTO `grade10` (`id`, `createtime`, `updatetime`, `year`, `gender`, `grade`, `section`, `rollno`, `firstname`, `lastname`, `term`, `display`, `sub1`, `sub1pass`, `sub1full`, `sub2`, `sub2pass`, `sub2full`, `sub3`, `sub3pass`, `sub3full`, `sub4`, `sub4pass`, `sub4full`, `sub5`, `sub5pass`, `sub5full`, `sub6`, `sub6pass`, `sub6full`, `sub7`, `sub7pass`, `sub7full`, `sub8`, `sub8pass`, `sub8full`, `sub9`, `sub9pass`, `sub9full`, `sub10`, `sub10pass`, `sub10full`, `sub11`, `sub11pass`, `sub11full`, `sub12`, `sub12pass`, `sub12full`, `sub13`, `sub13pass`, `sub13full`) VALUES
(1, '2018/09/06 07:58:03 AM', NULL, 2018, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Math', 50, 100, 'Nepali', 25, 50, 'English', 50, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `createtime` varchar(250) DEFAULT NULL,
  `updatetime` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `status`, `createtime`, `updatetime`) VALUES
(1, 'admin', 'admin', 'admin', 'offline', NULL, '2019/05/25 17:31:10 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade1`
--
ALTER TABLE `grade1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade2`
--
ALTER TABLE `grade2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade3`
--
ALTER TABLE `grade3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade4`
--
ALTER TABLE `grade4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade5`
--
ALTER TABLE `grade5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade6`
--
ALTER TABLE `grade6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade7`
--
ALTER TABLE `grade7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade8`
--
ALTER TABLE `grade8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade9`
--
ALTER TABLE `grade9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade10`
--
ALTER TABLE `grade10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade1`
--
ALTER TABLE `grade1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade2`
--
ALTER TABLE `grade2`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade3`
--
ALTER TABLE `grade3`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade4`
--
ALTER TABLE `grade4`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade5`
--
ALTER TABLE `grade5`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade6`
--
ALTER TABLE `grade6`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade7`
--
ALTER TABLE `grade7`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade8`
--
ALTER TABLE `grade8`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade9`
--
ALTER TABLE `grade9`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade10`
--
ALTER TABLE `grade10`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
