-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 04:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('adminsiesgst', '9930682984');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pub` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `image`, `category`, `pub`, `author`) VALUES
(101, 'Modern Digital Electronics', 'modern digital electronics rp jain.jpg', 'Computer Engineering', 'Mc Graw Hill Publications', 'R.P. Jain'),
(102, 'Data Structures Using C', 'data structure.jpg', 'Computer Engineering', 'Oxford University Press', 'Reema Thareja'),
(103, 'Computer Organization And Architecture', 'coa.jpg', 'Computer Engineering', 'Pearson Publications', 'William Stallings'),
(104, 'Fundamentals of Computer Algorithm', 'aoa.jpg', 'Computer Engineering', 'Universities Press', 'Sartaj Sahani'),
(105, 'Computer Graphics C Version', 'computer-graphics-ebookhearn-baker-1-728', 'Computer Engineering', 'Pearson Publications', 'M. Pauline Baker'),
(106, 'Database System Concepts', 'dbms.jpg', 'Computer Engineering', 'Mc Graw Hill Publications', 'Henry Korth'),
(107, 'Programming with Java', '', 'Computer Engineering', 'Mc Graw Hill Publications', 'E Balagurusamy'),
(108, 'Operating System Principles', 'os.jpg', 'Computer Engineering', 'Wiley Publication', 'Galvin'),
(109, 'Discrete Mathematics and Applications', 'dis.jpg', 'Computer Engineering', 'Mc Graw Hill Publications', 'Kenneth Rosen'),
(110, 'Computer Networks', 'cn.jpg', 'Computer Engineering', 'Pearson Publications', 'Andrew Tanenbaum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
