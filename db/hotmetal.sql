-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 08:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotmetal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `tags` text NOT NULL,
  `username` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL,
  `query_type` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_no`, `query_type`, `msg`, `date`) VALUES
(1, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:21'),
(2, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:32'),
(3, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:47'),
(4, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:00:26'),
(5, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:15'),
(6, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:36'),
(7, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:42'),
(8, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:53'),
(9, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:02:53'),
(10, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:02:55'),
(11, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Develop Custom Solution', 'message', '2024-02-29 07:03:08'),
(12, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Develop Custom Solution', 'message', '2024-02-29 07:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `cat` text NOT NULL,
  `demo_link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL COMMENT '\r\n',
  `name` text NOT NULL,
  `username` text NOT NULL,
  `platform` text NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subsucribe`
--

CREATE TABLE `subsucribe` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subsucribe`
--

INSERT INTO `subsucribe` (`id`, `email`, `date`) VALUES
(5, 'info@hotmetallogos.com', '2024-02-29 07:12:14'),
(6, 'info@hotmetallogos.com', '2024-02-29 07:12:25'),
(7, 'admin@hotmetallogos.com', '2024-02-29 07:15:25'),
(8, 'inf@hotmetallogos.com', '2024-02-29 07:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsucribe`
--
ALTER TABLE `subsucribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '\r\n';

--
-- AUTO_INCREMENT for table `subsucribe`
--
ALTER TABLE `subsucribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
