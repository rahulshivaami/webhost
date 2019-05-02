-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 01:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhost`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `domain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `ssl_required` tinyint(4) NOT NULL,
  `amp_required` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`domain_id`, `user_id`, `domain_name`, `file_path`, `ssl_required`, `amp_required`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 3, 'www.test.com', '/Applications/XAMPP/htdocs/uploads/ecoland.zip', 0, 0, '2019-04-30 16:12:20', 3, '2019-04-30 10:42:20', 0),
(2, 3, 'www.test.com', '/Applications/XAMPP/htdocs/uploads/ecoland.zip', 0, 0, '2019-04-30 16:13:08', 3, '2019-04-30 10:43:08', 0),
(3, 3, 'www.test.com', '/Applications/XAMPP/htdocs/uploads/ecoland.zip', 0, 0, '2019-04-30 16:13:45', 3, '2019-04-30 10:43:45', 0),
(4, 3, 'www.demo.com', '/Applications/XAMPP/htdocs/uploads/natrue2.jpeg', 1, 1, '2019-04-30 16:14:34', 3, '2019-04-30 10:44:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(255) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `contact`, `email`, `password`, `created_date`, `created_by`, `updated_date`, `updated_by`, `isActive`) VALUES
(1, 'rahul', '2147483647', 'd', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-26 14:48:01', 0, '2019-04-26 09:18:01', 0, 1),
(2, 'demo', '2147483647', 'd', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-26 14:49:19', 0, '2019-04-26 09:19:19', 0, 1),
(3, 'prerana', '9561047101', 'rahul.b@shivaami.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-26 14:51:46', 0, '2019-04-26 09:21:46', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`domain_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
