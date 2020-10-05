-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 06:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `preferreddate` date NOT NULL,
  `preferredtime` time(6) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`fullname`, `email`, `dob`, `preferreddate`, `preferredtime`, `department`) VALUES
('ganapathy', 'ganapathy2000subramanian@gmail.com', '2000-12-05', '2020-04-24', '12:30:00.000000', 'skin'),
('ganapathy', 'ganapathy5subramanian@gmail.com', '2000-12-05', '2020-04-20', '19:30:00.000000', 'skin'),
('vengadesh', 'venkyks777@gmail.com', '2001-02-04', '2020-05-20', '18:01:00.000000', 'skin'),
('kamesh', 'kamesh212@gmail.com', '2000-12-02', '2020-06-20', '10:30:00.000000', 'skin'),
('evin', 'evin@gmail.com', '2222-12-12', '2020-02-12', '13:20:00.000000', 'skin'),
('kabilan', 'kabilan@gmail.com', '2222-12-12', '2020-02-12', '13:20:00.000000', 'dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` bigint(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fullname`, `email`, `mobileno`, `comments`) VALUES
('Ganapathisubramanian Sankaranarayanan', 'ganapathy5subramanian@gmail.com', 6385470031, 'hi i have an problem'),
('Ganapathisubramanian Sankaranarayanan', 'ganapathy5subramanian@gmail.com', 6385470031, 'gddgg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `fullname` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`fullname`, `name`, `email`, `password`) VALUES
('Ganapathy Subramanian', 'ganapathy', 'ganapathy2000subramanian@gmail.com', 'ganapathyda'),
('Ganapathy ', 'ganapathyda', 'ganapathy5subramanian@gmail.com', '123'),
('Subramanian', 'ganapathydadada', 'ganapathy@gmail.com', '12345'),
('Kabilan', 'kabilan', 'Kabilan@gmail.com', 'kabilan123'),
('Kamesh Babu', 'kamesh', 'kamesh123@gmail.com', 'kamesh212'),
('Rahul', 'rahul123', 'rahul@gmail.com', '123'),
('Selwin Landis', 'selwin', 'selwin@gmail.com', 'selwin10'),
('Sharmila', 'sharmila', 'sharmila192003@gmail.com', 'balaji'),
('Vengadesh K S', 'venky', 'venkyks@gmail.com', 'venks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
