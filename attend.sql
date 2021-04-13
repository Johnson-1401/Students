-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 08:51 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.admin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`admin`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `attndance`
--

CREATE TABLE `attndance` (
  `ID` int(20) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `SEM` varchar(255) NOT NULL,
  `ATTEND` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.attndance: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`attndance`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SUBJECT` longtext NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.cont: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`cont`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `ID` int(11) NOT NULL,
  `NAME` int(11) NOT NULL,
  `ADDRESS` int(11) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `EMAIL` int(11) NOT NULL,
  `GENDER` int(11) NOT NULL,
  `DOB` int(11) NOT NULL,
  `PASSWORD` int(11) NOT NULL,
  `DATE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.stud: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`stud`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `student`
--
-- Error reading structure for table attend.student: #1932 - Table 'attend.student' doesn't exist in engine
-- Error reading data for table attend.student: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`student`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CONTACT` bigint(20) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `SEMESTER` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.students: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`students`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CONTACT` int(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attend.teach: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attend`.`teach`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attndance`
--
ALTER TABLE `attndance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attndance`
--
ALTER TABLE `attndance`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
