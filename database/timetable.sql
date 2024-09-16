-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 12:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `username`, `pswd`) VALUES
(1, 'admin', '73e3e446fe10716ac8cd3eaf788eb9a7');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `course` varchar(50) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `examdate` varchar(20) NOT NULL,
  `examtime` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `regno`, `course`, `venue`, `examdate`, `examtime`, `day`) VALUES
(6, '17/6839876U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(7, '17/564123U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(8, '17/675435U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(9, '17/568761U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(10, '17/543216U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(11, '17/543261U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(12, '17/656436U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(13, '17/565431U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(14, '17/556476U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(15, '17/547651U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(16, '17/687086U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(17, '17/564543U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(18, '17/576543U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(19, '17/545213U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(20, '17/566786U/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(21, '18/529569D/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(22, '18/525344D/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(23, '18/599844D/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(24, '18/567044D/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday'),
(25, '18/527534D/5', 'Economics of ICT', 'Education lecture Theatre', '20/10/2024', '9:00am', 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `id` int(11) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `pswd` varchar(40) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `regno`, `pswd`, `fullname`, `department`, `level`, `gender`) VALUES
(1, '18/524444D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Aliyu Abubakar', 'Infor Tech', 500, 'Male'),
(2, '18/567444D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Abudul Isah', 'Infor Tech', 500, 'Male'),
(3, '18/527789D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Aisha Ilyas', 'Infor Tech', 500, 'Female'),
(4, '18/525644D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Khadija Yakubu', 'Infor Tech', 500, 'Female'),
(5, '18/528689D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Muhammad Abbas', 'infor Tech', 500, 'Female'),
(6, '18/524477D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Salman Aliyu', 'Infor Tech', 500, 'Male'),
(7, '18/56799D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Halisa Ayuba', 'Infor Tech', 500, 'Female'),
(8, '17/563476U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Mustapha Abdullahi', 'Infor Tech', 500, 'Male'),
(9, '17/564321U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Amina Hassan', 'Infor Tech', 500, 'Female'),
(10, '17/6839876U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Muhammad Usman', 'Infor Tech', 500, 'Male'),
(11, '17/564123U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Anas Usman', 'Infor Tech', 500, 'Male'),
(12, '17/675435U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Maryam Usman', 'Infor Tech', 500, 'Female'),
(13, '17/568761U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Salamatu Habib', 'Infor Tech', 500, 'Female'),
(14, '17/543216U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Zainab Ibrahim', 'Infor Tech', 500, 'Female'),
(15, '17/543261U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Ayuba Aliyu', 'Infor Tech', 500, 'Male'),
(16, '17/656436U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Kabiru Hassan', 'Infor Tech', 500, 'Male'),
(17, '17/565431U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Amatu Saleh', 'Infor Tech', 500, 'Female'),
(18, '17/556476U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Yahaya Bello', 'Infor Tech', 500, 'Male'),
(19, '17/547651U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Walida Aminu', 'Infor Tech', 500, 'Female'),
(20, '17/687086U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Rabiatu Usman', 'Infor Tech', 500, 'Female'),
(21, '17/564543U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Shafa Haruna', 'Infor Tech', 500, 'Female'),
(22, '17/576543U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Esther Mark', 'Infor Tech', 500, 'Female'),
(23, '17/545213U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Khadija Hassan', 'Infor Tech', 500, 'Female'),
(24, '17/566786U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Dauda Hashim', 'Infor Tech', 500, 'Male'),
(25, '18/529569D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Aliya Yusuf', 'Infor Tech', 500, 'Male'),
(26, '18/525344D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Maryam Ibrahim', 'Infor tech', 500, 'Female'),
(27, '18/599844D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Haruna Isa', 'Infor Tech', 500, 'Male'),
(28, '18/567044D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Ummi Aliyu', 'Infor Tech', 500, 'Female'),
(29, '18/527534D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Haruna Musa', 'Infor Tech', 500, 'Male'),
(30, '18/509597D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Ibrahim Aliyu', 'Infor Tech', 500, 'Male'),
(31, '18/500744D/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Adama Isa', 'Infor Tech', 500, 'Female'),
(32, '17/563543U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Hafsat Adam', 'Infor Tech', 500, 'Female'),
(33, '17/569086U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Adam Dauda', 'Infor Tech', 500, 'Male'),
(34, '17/654321U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Dauda Suleiman', 'Infor Tech', 500, 'Male'),
(35, '17/765176U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Farida Garba', 'Infor Tech', 500, 'Female'),
(36, '17/908765U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Ruqayya Yakubu', 'Infor Tech', 500, 'Female'),
(37, '17/566549U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Usman Aliyu', 'Infor Tech', 500, 'Male'),
(38, '17/765431U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Fatima Adam', 'Infor Tech', 500, 'Female'),
(39, '17/563901U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Zainab Hamxa', 'Infor Tech', 500, 'Female'),
(40, '17/664123U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Garba Nafiu', 'Infor Tech', 500, 'Male'),
(41, '17/569876U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Sadiya Baba', 'Infor Tech', 500, 'Female'),
(42, '17/523423U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Debora Daniel', 'Infor Tech', 500, 'Female'),
(43, '17/685438U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Faith Shamaki', 'Infor Tech', 500, 'Female'),
(44, '17/567623U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Hyelni Joshua', 'Infor Tech', 500, 'Female'),
(45, '17/567676U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Qasim Dayyabu', 'Infor Tech', 500, 'Male'),
(46, '17/566723U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Yakubu Usman', 'Infor Tech', 500, 'Male'),
(47, '17/563112U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Precious Adam', 'Infor Tech', 500, 'Female'),
(48, '17/678123U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Najaatu Magaji', 'Infor Tech', 500, 'Female'),
(49, '17/578963U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Nana Kabir', 'Infor Tech', 500, 'Female'),
(50, '17/564564U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'James Andrew', 'Infor Tech', 500, 'Male'),
(51, '17/569876U/5', '73e3e446fe10716ac8cd3eaf788eb9a7', 'Yohana Tanimu', 'Infor Tech', 500, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
