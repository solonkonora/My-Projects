-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 01:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diligent_servers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `request` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date/time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `tel`, `email`, `request`, `address`, `date/time`) VALUES
(1, 'Noela', 7654321, 'noela@gmail.com', 'need both boys and girls for an event', '', '0000-00-00 00:00:00'),
(3, 'nora', 1123456, 'nora@gmail.com', 'girls only', '', '0000-00-00 00:00:00'),
(4, 'nini', 2147483647, 'nini@gmail.com', 'need protocol services for my graduation celebration at Buea town.', '', '2023-02-15 12:58:25'),
(6, 'lizzy', 2147483647, 'lizzy@gmail.com', 'deco services for an anniversary celebration', '', '2023-02-15 13:56:15'),
(9, 'lizza', 45362768, 'liza@gmail.com', 'girls only', 'Molyko-south', '0000-00-00 00:00:00'),
(10, '', 0, '', 'need protocol services for my graduation celebration at Buea town.', 'Molyko-south', '0000-00-00 00:00:00'),
(12, 'Solonko Nora ', 652161749, 'nora@gmail.com', 'need protocol services for my graduation celebration at Buea town.', 'Bokoko', '2023-02-15 15:02:35'),
(13, 'Madison Jay', 237, 'madisonjay@gmail.com', 'two 7 inches birthday cakes, in colors blue and pink, to be delivered on thursday 6th of April before 12noon, at faith hostel molyko south.', 'Buea, molyko, molyko south', '2023-02-17 13:08:48'),
(14, 'ivoline', 682891358, 'ivoline@gmail.com', 'in need of 10 hostesses to help cordinate food sharing during my wedding, on the 12 of march at mountain Hotel', 'Buea town', '2023-02-22 10:15:28'),
(15, 'Collete', 650281968, 'collette@gmail.com', 'A good and nice birthday cake for my childs birthday on the 20th of April.', 'sossoliso', '2023-02-22 11:26:38'),
(16, 'JANE DOE', 2147483647, 'DOE@GMAIL.COM', 'SAMPLE', 'MOLYKO', '2023-02-22 11:51:49'),
(17, '', 0, '', '', '', '2023-02-22 20:40:31'),
(18, '', 0, '', '', '', '2023-02-22 20:40:52'),
(19, '', 0, '', '', '', '2023-02-22 20:42:21'),
(20, '', 0, '', '', '', '2023-02-22 20:42:23'),
(21, '', 0, '', '', '', '2023-02-22 20:49:46'),
(22, '', 0, '', '', '', '2023-02-22 20:50:12'),
(23, '', 0, '', '', '', '2023-02-22 20:50:49'),
(24, '', 0, '', '', '', '2023-02-22 20:51:12'),
(25, '', 0, '', '', '', '2023-02-22 20:51:14'),
(26, '', 0, '', '', '', '2023-02-22 20:54:11'),
(27, '', 0, '', '', '', '2023-02-22 20:55:23'),
(28, '', 0, '', '', '', '2023-02-22 20:56:30'),
(29, '', 0, '', '', '', '2023-02-22 21:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `tel` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
