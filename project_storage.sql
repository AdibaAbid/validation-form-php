-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 05:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `created_record` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `title`, `author`, `categories`, `created_record`) VALUES
(2, 'Peer-e-Kamil', 'Umera Ahmed', 'Novel ', '2020-11-13 05:07:45'),
(3, 'The Forty Rules of Love', ' Elif Shafak', 'Literary Fiction', '2020-11-13 05:09:41'),
(6, 'Harry potter', 'J.K Rowling', 'fantasy', '2020-11-12 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`user_name`, `user_email`, `user_password`) VALUES
('Adiba', 'xyz@gmail.com', 'admin'),
('Adiba', 'Adiba@gmail.com', '123456'),
('Ali ', 'xyz@hotmail.com', '123456789'),
('Adiba', 'xyz@gmail.com', '123456'),
('Adiba', 'xyz@gmail.com', '12345'),
('Adibaaaaa', 'xyz@mail.com', '456789'),
('Adiba', 'xyz@gmail.com', '123456'),
('Adiba', 'xyz@gmail.com', '123456'),
('Adiba', 'xyz@gmail.com', '123456'),
('Adiba', 'xyz@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
