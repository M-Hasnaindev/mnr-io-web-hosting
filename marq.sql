-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 07:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `images` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `update_info`
--

CREATE TABLE `update_info` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `u_name` varchar(50) NOT NULL,
  `work_number` int(11) DEFAULT NULL,
  `work_address` varchar(350) DEFAULT NULL,
  `mobile_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `update_info`
--

INSERT INTO `update_info` (`id`, `img`, `u_name`, `work_number`, `work_address`, `mobile_number`) VALUES
(1, '92929283983982', 'dani', 0, 'adbss', 9),
(2, '320984938urrjir3984', 'admin', 989898, 'abc', 909090909),
(3, NULL, '', 9999, 'abc', 9099090),
(4, NULL, '', 0, '', 0),
(5, NULL, '', 0, '', 0),
(6, NULL, '', 90909, 'abcchange', 9090909),
(7, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(8, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(9, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(10, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(11, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(12, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(13, 'pexels-sebastiaan-stam-1097456.jpg', '', 90909, 'abcchange', 90909),
(14, 'pexels-sebastiaan-stam-1097456.jpg', 'dani', 90909, 'abcchange', 9090909),
(15, '', 'dani', 90909, 'abcchange', 9090909),
(16, NULL, 'dani', 90909, 'abcchange', 9090909),
(17, NULL, 'dani', 90909, 'abcchange', 9090909),
(18, '', 'dani', 90909, 'abcchange', 9090909),
(19, '', 'dani', 90909, 'abcchange', 9090909),
(20, '', 'dani', 90909, 'abcchange', 9090909),
(21, '', 'dani', 90909, 'abcchange', 9090909),
(22, '', 'dani', 90909, 'abcchange', 9090909),
(23, 'pexels-sebastiaan-stam-1097456.jpg', 'dani', 90909, 'abcchange', 9090909),
(24, '', 'danichange', 90909, 'abcchange', 9090909),
(25, '', 'dani', 90909, 'abcchange', 9090909),
(26, NULL, 'hassss', 1234567899, 'abcchange', 2147483647),
(27, NULL, 'hasnan', 1234567899, 'abcchange', 2147483647),
(28, NULL, 'danijijijiji', 1234567899, 'abcchange', 2147483647),
(29, NULL, 'anusbc', 1234567899, 'abcchange', 2147483647),
(30, NULL, 'danim', 1234567899, 'abcchange', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `phonenumber`, `email`, `password`) VALUES
(1, 'admin', 0, 'dani123@gmail.com', 'dani123'),
(2, 'user', 0, 'user123@gmail.com', 'user123'),
(3, 'campany', 0, 'campany123@gmail.com', 'campany123'),
(4, 'test', 909090, 'dani123@gmail.com', '$2y$10$z5F.t11i.vjx0J6gyzdoKuyMbHzonf/dqhjRpALzV0h'),
(5, 'test', 9090, 'dani123@gmail.com', '$2y$10$BqzBPo1Fv9yuQLlQyEoO2e1/bqg.se1DdtUeTTO5J0S'),
(6, 'test', 90909, 'test1@gmail.com', '$2y$10$jY5mIJoX2OffMLpS3qNT4eA0HlOQdSc0nN7z.TrOiC6'),
(7, 'jijij', 909090, 'dani123@gmail.com', '$2y$10$hibBjR41d24LIeISvWRxleQBwsor.5j/X1/BaufarBi'),
(8, 'test12', 2147483647, 'dani1233@gmail.com', '$2y$10$0LsVnEjSKnO4dKWjGIJCbenwCmrSuUlP7FMG7278IKX'),
(9, 'test5', 2147483647, 'test5@gmail.com', '$2y$10$XGa/GHXLJ9sXmdaKRGX61.X7wYSddOsX0iXfVX9/YuO'),
(10, 'test6', 2147483647, 'test6@gmail.com', '$2y$10$wrLTmE1we2aQt1BhnKoL2urCB0xx.YolFLMhsSgHVkd'),
(11, 'test122', 2147483647, 'test122@gmail.com', '$2y$10$vnPggBXpaoGunvF/zb8rqeA1Fh8lhlaPCa1kVpMJMmR'),
(12, 'anus', 2147483647, 'anus123@gmail.com', '$2y$10$IUS9x1FXiBIjDBQBGnF.K.YDx0szUej7iqipz.bqhhA'),
(13, 'hassnain', 2147483647, 'hasnain123@gmail.com', ''),
(14, 'yameen', 2147483647, 'yameend41@gmail.com', 'Daniyall1!'),
(15, 'retocheck1', 2147483647, 'retocheck1@gmail.com', 'Daniyall1!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_info`
--
ALTER TABLE `update_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_info`
--
ALTER TABLE `update_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
