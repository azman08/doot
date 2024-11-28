-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 09:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sender_userid` int(11) NOT NULL,
  `receiver_userid` int(11) NOT NULL,
  `message_text` varchar(500) DEFAULT NULL,
  `message_file` varchar(258) DEFAULT NULL,
  `message_send_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender_userid`, `receiver_userid`, `message_text`, `message_file`, `message_send_time`) VALUES
(5, 6, 'hey how are you', NULL, '2024-04-18 11:55:58'),
(6, 5, 'am good', NULL, '2024-04-18 11:57:55'),
(6, 3, 'who are you', NULL, '2024-04-18 12:00:45'),
(5, 6, 'dfdfeef', NULL, '2024-04-19 09:16:58'),
(5, 1, '', NULL, '2024-04-19 09:36:49'),
(5, 6, 'you are sde', NULL, '2024-04-19 10:06:39'),
(5, 6, 'sdssdas', NULL, '2024-04-19 10:12:16'),
(5, 6, '', NULL, '2024-04-19 10:12:16'),
(5, 6, '', NULL, '2024-04-19 10:23:50'),
(5, 6, 'ssdsd', NULL, '2024-04-19 10:24:04'),
(5, 3, 'aasdas', NULL, '2024-04-19 10:39:40'),
(5, 6, 'fgd', NULL, '2024-04-19 11:05:55'),
(5, 6, 'ay am good', NULL, '2024-04-19 12:23:28'),
(5, 6, 's', NULL, '2024-04-19 12:24:38'),
(5, 6, 'sdsd', NULL, '2024-04-19 12:25:27'),
(5, 6, 'wewe', NULL, '2024-04-19 12:33:15'),
(5, 6, 'wewe', NULL, '2024-04-19 12:33:19'),
(5, 3, 'sddfdsf', NULL, '2024-04-19 12:39:36'),
(5, 3, 'dfsd', NULL, '2024-04-19 12:46:37'),
(5, 3, 'hoe heewh', NULL, '2024-04-19 12:47:07'),
(5, 3, 'good', NULL, '2024-04-19 12:47:42'),
(5, 3, 'you are good', NULL, '2024-04-19 12:48:03'),
(5, 3, 'am fime', NULL, '2024-04-19 12:48:07'),
(5, 6, '', NULL, '2024-04-20 09:45:55'),
(6, 5, 'hi', NULL, '2024-04-20 10:05:38'),
(5, 6, 'hia', NULL, '2024-04-20 10:05:45'),
(6, 5, 'hi', NULL, '2024-04-20 10:05:57'),
(6, 5, 'hi', NULL, '2024-04-20 10:13:09'),
(5, 6, 'tou', NULL, '2024-04-20 10:13:20'),
(6, 5, 'vhjhj', NULL, '2024-04-20 10:13:34'),
(6, 5, 'hjhi', NULL, '2024-04-20 10:14:00'),
(6, 5, 'hujkhj', NULL, '2024-04-20 10:14:02'),
(6, 5, 'jk', NULL, '2024-04-20 10:14:03'),
(5, 6, 'urtyurt', NULL, '2024-04-20 10:14:04'),
(5, 6, 'jghj&#039;', NULL, '2024-04-20 10:14:04'),
(5, 6, 'uikhuj', NULL, '2024-04-20 10:14:05'),
(5, 6, 'fhsdfj', NULL, '2024-04-20 10:14:19'),
(5, 6, 'fsdfsd', NULL, '2024-04-20 10:14:22'),
(5, 6, '', NULL, '2024-04-20 10:14:22'),
(5, 6, 'jhk', NULL, '2024-04-20 10:14:25'),
(5, 6, 'kghjk', NULL, '2024-04-20 10:14:26'),
(5, 6, 'hjkhj', NULL, '2024-04-20 10:14:27'),
(5, 6, 'hfg', NULL, '2024-04-20 10:14:29'),
(5, 6, 'gfhj', NULL, '2024-04-20 10:55:35'),
(5, 6, 'hh', NULL, '2024-04-20 10:57:36'),
(6, 5, 'hey', NULL, '2024-04-20 10:58:00'),
(5, 6, 'fsdff', NULL, '2024-04-20 10:58:07'),
(5, 6, 'fgdfg', NULL, '2024-04-20 11:01:35'),
(5, 6, 'fsr', NULL, '2024-04-20 11:01:55'),
(5, 6, 'fgfgdf', NULL, '2024-04-20 11:44:04'),
(5, 6, 'fsf', NULL, '2024-04-20 11:46:30'),
(5, 6, 'dasdas', NULL, '2024-04-20 11:46:55'),
(5, 6, 'sdsad', NULL, '2024-04-20 11:46:59'),
(5, 6, 'sdas', NULL, '2024-04-20 11:47:11'),
(5, 6, '', NULL, '2024-04-20 11:54:03'),
(6, 2, 'hoo', NULL, '2024-04-29 09:23:05'),
(6, 2, 'kkkk', NULL, '2024-04-29 09:23:16'),
(7, 6, 'Hi', NULL, '2024-04-29 09:32:13'),
(7, 6, 'Hi', NULL, '2024-04-29 09:32:23'),
(2, 4, 'hii', NULL, '2024-04-29 10:23:42'),
(2, 5, 'hy', NULL, '2024-04-29 10:25:22'),
(5, 2, 'Whasup', NULL, '2024-04-29 10:25:37'),
(3, 2, 'Hii', NULL, '2024-04-29 11:36:49'),
(2, 3, 'what are you dooing', NULL, '2024-04-29 11:37:15'),
(1, 6, 'hii', NULL, '2024-04-30 09:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `group_data`
--

CREATE TABLE `group_data` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_cover` varchar(255) NOT NULL,
  `group_bio` varchar(255) NOT NULL,
  `creater` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `group_id` int(11) NOT NULL,
  `member_user_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `userid` int(11) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logout_history`
--

CREATE TABLE `logout_history` (
  `userid` int(11) NOT NULL,
  `logout_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logout_history`
--

INSERT INTO `logout_history` (`userid`, `logout_time`) VALUES
(4, '2024-04-15 11:22:30'),
(3, '2024-04-20 09:44:53'),
(7, '2024-04-29 09:40:17'),
(6, '2024-04-29 10:27:46'),
(5, '2024-04-29 10:43:36'),
(2, '2024-04-29 12:29:59'),
(8, '2024-04-30 09:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `userid` int(11) NOT NULL,
  `contact_id` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `favourite` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`userid`, `contact_id`, `contact_name`, `favourite`) VALUES
(4, '1', 'akshay singh', 0),
(4, '2', 'raj', 0),
(4, '3', 'lokendra', 0),
(6, '1', 'akshay singh', 0),
(6, '2', 'raj', 0),
(6, '5', 'abhishek', 0),
(6, '3', 'lokendra', 0),
(5, '3', 'lokendra', 0),
(5, '1', 'akshay singh', 0),
(5, '6', 'rohit', 0),
(3, '5', 'Abhi', 0),
(7, '6', 'Try A', 0),
(2, '6', 'rohit', 0),
(3, '2', 'raj', 0),
(2, '3', 'lokendra', 0),
(2, '4', 'somen', 0),
(2, '5', 'abhi', 0),
(5, '2', 'Raj', 0),
(1, '2', 'raj', 0),
(1, '8', 'akshat', 0),
(1, '6', 'rohit', 0),
(1, '3', 'lokendra', 0),
(9, '6', 'Rohit Sharma', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `userid` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_time` datetime NOT NULL DEFAULT current_timestamp(),
  `online_check` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`userid`, `name`, `mobile`, `email`, `password`, `registration_time`, `online_check`) VALUES
(1, 'Akshay Singh', '1234567890', 'akshay@mail.com', '$2y$10$6jjxFU/wKqpuxXI55NN0heyANEvSapkcX2xQXpZo/vAcnjs0MarJm', '2024-04-12 22:34:26', 1),
(2, 'Raj Singh', '1234567891', 'raj-singh@gmail.com', '$2y$10$6yKFAIXzkVlxHRyG45Q40eZ4reDDy2F4uG9PSftmCtJ08rFuK02Zq', '2024-04-12 22:35:24', 0),
(3, 'lokendra', '1234567892', 'lokendra@gmail.com', '$2y$10$xH.ZwDv.n20yvRdo119SMur6t8.5uLl3Eetu5wcIF03tD8Dz72v2S', '2024-04-12 22:57:51', 1),
(4, 'somen', '1234567893', 'somen@gmail.com', '$2y$10$cKux009PRHK17pa4586rFuYI9T5DO/uWjb24/9pcKkEboXQ4xnJMW', '2024-04-13 09:56:16', 0),
(5, 'Abhishek', '1234567894', 'abhishek@gmail.com', '$2y$10$g5M5ppiLbS/u7xkX2hXzJOY.UbP8gSQJJA/I//d4BtHyAb1hEjIba', '2024-04-13 10:00:18', 0),
(6, 'rohit kumar', '1234567895', 'rohit@gmail.com', '$2y$10$Lp1Vc0CMXH/KJji8ExQsjODLTGZ3V3ZG1MY.6dNpTuEfrEnNdZocG', '2024-04-13 10:09:32', 0),
(7, 'Mohd Sadique', '1234567881', 'Abcd@mail.com', '$2y$10$3atXSewuFZF6I/Mwj6qcv.3tckh335F6KRFCkPG8qpgXKc7kOZ0Za', '2024-04-29 09:21:47', 0),
(8, 'Akshat', '1234567897', 'aks-trp@mail.com', '$2y$10$6jjxFU/wKqpuxXI55NN0heyANEvSapkcX2xQXpZo/vAcnjs0MarJm', '2024-04-30 09:15:29', 0),
(9, 'Somendra singh', '1234567899', 'som@gmail.com', '$2y$10$Hvw/nTcG8iFu0a32G1V5CewegeNzrrLeMIiiJFp4b0OwKIFML.1Yy', '2024-04-30 10:51:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_main_dta`
--

CREATE TABLE `user_main_dta` (
  `userid` int(11) NOT NULL,
  `about` varchar(500) DEFAULT 'Enter  about',
  `online_status` varchar(256) DEFAULT 'online',
  `profile_photo` varchar(255) DEFAULT 'dummy_profile.png',
  `profile_cover` varchar(256) DEFAULT 'dummy_cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_main_dta`
--

INSERT INTO `user_main_dta` (`userid`, `about`, `online_status`, `profile_photo`, `profile_cover`) VALUES
(2, 'Beleave On Yourself', 'away', 'dummy_profile.png	', 'dummy_cover.jpg'),
(1, 'Enter About', 'away', 'dummy_profile.png	', 'dummy_cover.jpg'),
(3, 'Enter  about', 'away', 'dummy_profile.png	', 'dummy_cover.jpg'),
(4, 'Enter  about', 'online', 'dummy_profile.png	', 'dummy_cover.jpg'),
(5, 'Enter  about', 'online', 'dummy_profile.png	', 'dummy_cover.jpg'),
(6, 'Enter  about', 'do not disturb', 'vivek.jpg', 'dummy_cover.jpg'),
(7, 'Enter  about', 'online', 'dummy_profile.png	', 'dummy_cover.jpg'),
(8, 'Enter  about', 'online', 'dummy_profile.png	', 'dummy_cover.jpg'),
(9, 'Enter  about', 'online', 'dummy_profile.png', 'dummy_cover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_main_dta`
--
ALTER TABLE `user_main_dta`
  ADD KEY `sasdd` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
