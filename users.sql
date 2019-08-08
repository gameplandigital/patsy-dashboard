-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com:3306
-- Generation Time: Aug 08, 2019 at 12:37 PM
-- Server version: 5.6.39-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_time` varchar(10) NOT NULL,
  `logout_time` varchar(10) NOT NULL,
  `c_location` varchar(100) NOT NULL,
  `trn_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `access` int(1) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `userlevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`userid`, `firstname`, `middlename`, `lastname`, `position`, `dept`, `birthdate`, `username`, `password`, `login_time`, `logout_time`, `c_location`, `trn_date`, `status`, `access`, `uname`, `userlevel`) VALUES
(1, 'Bryan', 'M', 'Conde', 'General Manager', '', '2019-06-04', 'bm.conde', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, '', ''),
(10, 'Giro ', 'C', 'Calvario   ', 'Head Developer', 'OPS ', '2019-07-17', 'gcalvario ', 'pogiako2', '', '', '', '0000-00-00 00:00:00', '', 0, '', ''),
(9, 'Joshua', 'B', 'Benas', 'Operations Supervisor', 'OPS', '2019-06-04', 'jbenas', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, '', ''),
(11, 'Joe ', 'B', 'Lebramonte  ', 'Web Developer', 'Product', '2019-06-04', 'jlebramonte', 'pogiako3 ', '', '', '', '0000-00-00 00:00:00', '', 0, '', ''),
(12, 'Archangel ', 'B', 'Yacap ', 'Another Supervisor', 'OPS ', '2019-07-17', 'jyacap ', 'kalboako1', '', '', '', '0000-00-00 00:00:00', '', 0, '', ''),
(2, 'Kristin ', 'C.', 'Conde', 'General Manager', '', '2019-06-06', 'kr.conde', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, '', ''),
(7, 'Leonardo', 'B', 'Benuya', 'Operations Head', 'OPS', '2019-06-04', 'lbenuya', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, '', ''),
(3, 'Mico', 'E. ', 'Lopez', '', '', '2017-07-26', 'mark11', '2d', '', '', '', '0000-00-00 00:00:00', '', 2, '', ''),
(7, 'Mc Niel ', 'B', 'Bercasio', 'OIC of Sales & Marketing', 'Digital', '2019-06-04', 'mbercasio', 'pogi', '', '', '', '0000-00-00 00:00:00', '', 0, '', ''),
(4, 'Patricia ', 'Hipolio', 'Balana', 'Jr. Account Manager ', 'Digital', '1998-05-10', 'patricia_balana', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, 'Pat', ''),
(13, 'Ruchell', 'V', 'Salas', '', '', '0000-00-00', 'rfc_admin', 'admin', '', '', '', '0000-00-00 00:00:00', '', 0, '', ''),
(5, 'Samuelle', 'Samson', 'Roselada ', 'Jr. Account Manager ', 'Digital', '1998-06-18', 'samuelle_samson', 'admin', '', '', '', '0000-00-00 00:00:00', '', 2, 'Sam', ''),
(6, 'Gerald ', 'Light', 'Facistol', 'Customer Experience Supervisor', 'Digital', '2017-07-19', 'tom', 'tom', '', '', '', '0000-00-00 00:00:00', '', 1, 'Mico', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
