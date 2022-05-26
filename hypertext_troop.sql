-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 06:13 PM
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
-- Database: `hypertext_troop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Contact_No` bigint(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `genre` text NOT NULL,
  `fav1` varchar(40) NOT NULL,
  `fav2` varchar(40) NOT NULL,
  `fav3` varchar(40) NOT NULL,
  `fav4` varchar(40) NOT NULL,
  `fav5` varchar(40) NOT NULL,
  `fav6` varchar(40) NOT NULL,
  `fav7` varchar(40) NOT NULL,
  `fav8` varchar(40) NOT NULL,
  `fav9` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `user_id`, `user_name`, `password`, `date`, `Contact_No`, `Email`, `genre`, `fav1`, `fav2`, `fav3`, `fav4`, `fav5`, `fav6`, `fav7`, `fav8`, `fav9`) VALUES
(27, 498, 'nishant', '$2y$10$sppt2VWzyTyDyqTNM4m3vewc5r9nPJsR9CgU6LfrI9uDhjpAwO7NW', '2022-05-26 12:50:27', 123456798765, 'shdj@dj.com', 'Self-Help', '', '', '', '', '', '', '', '', ''),
(28, 6534, 'RK Gupta', '$2y$10$lVd0ubOgZBN6vnRcK0z5L.NirwCn74.7mPjuxmMA86oPQlpv7H//e', '2022-05-26 15:03:46', 9936621731, 'reeteshgupta211@gmai', 'Science Fiction', '', '', 'A Game of Thrones', '', '', '', '', '', ''),
(29, 9466383, 'Akash02', '$2y$10$ql.rp2tCgzUA58mAI1uyx.jflSxQEEmNttCRhs8t4E/PnmAHOkWKW', '2022-05-26 16:03:44', 987654323, 'yka334@gmail.com', 'Biographies & AutoBiographies', 'Lost Horizon', 'Gone Girl', 'A Game of Thrones', '', '', '', '', '', ''),
(30, 228562, 'Pranay', '$2y$10$CMrMeQhC/rShRSe1IJRIl.0jzCIo5Q9hvZO2uMy9cWoBLPDXcr4bq', '2022-05-26 16:05:41', 9984753837, 'pranaypandey00121@gm', 'Fantasy', '', '', '', '', '', '', '', '', 'how to crack NEET in'),
(31, 336418902, 'ankush', '$2y$10$Zl.eq.Sn6OlEHspwcZQ65O/HM6.9xaeghF/UJIB.4OKns3He4dNIO', '2022-05-26 16:09:41', 847228437, 'ank2@gmail.com', 'Competitive Exam', 'Black Holes', '', '', '', 'The Secret', '', '', '', ''),
(32, 92644929, 'Manasvi', '$2y$10$ThzOoXsDu6Ei9kOn4pB7BuKZYsNLsoWgSerufalTSVd5ehDp823BS', '2022-05-26 16:12:02', 9985473833, 'pathakmanasvi25@gmai', 'Biographies & AutoBiographies', '', '', 'The Alchemist', '', '', '', '', 'Wings of Fire', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `User_id` (`user_id`),
  ADD KEY `User_name` (`user_name`),
  ADD KEY `date` (`date`),
  ADD KEY `fav1` (`fav1`),
  ADD KEY `fav2` (`fav2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
